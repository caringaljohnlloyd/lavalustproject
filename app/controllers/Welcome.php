<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'app/vendor/autoload.php';

class Welcome extends Controller
{
    public function index()
    {
        $this->call->helper('url');

        $this->call->view('welcome_page');
    }
    public function register()
    {
        $this->call->helper('url');

        $this->call->view('register');
    }

    public function login()
    {
        $this->call->helper('url');
        $this->call->view('login');
    }

    public function account()
    {
        $this->call->helper('url');

        $this->call->view('account_verify');
    }

    public function register_val()
    {
        $this->form_validation
            ->name('username')
            ->required()
            ->min_length(4)
            ->max_length(20)
            ->name('password')
            ->required()
            ->min_length(8)
            ->name('confpassword')
            ->matches('password')
            ->required()
            ->min_length(8)
            ->name('email')
            ->valid_email();

        if ($this->form_validation->run() == FALSE) {
            $this->call->view('register');
        } else {
            $existingUser = $this->User_Model->get_user_by_email($this->io->post('email'));

            if ($existingUser) {
                $data['error_message'] = 'Email is already registered.';
                $this->call->view('register', $data);
            } else {
                $verificationCode = substr(md5(rand()), 0, 8);
                $is_verify = FALSE;

                $hashedPassword = password_hash($this->io->post('password'), PASSWORD_DEFAULT);

                $this->User_Model->insert(
                    $this->io->post('username'),
                    $hashedPassword,
                    $this->io->post('email'),
                    $verificationCode,
                    $is_verify
                );

                $data['email'] = $this->io->post('email');
                $this->call->view('account_verify', $data);

                $this->sendVerificationEmail($this->io->post('email'), $verificationCode);
            }
        }
    }

    public function check()
    {
        $email = $this->io->post('email');
        $verificationCode = $this->io->post('code');

        $isVerified = $this->User_Model->verifyUser($email, $verificationCode);

        if ($isVerified) {
            $data['email'] = $email;
            $data['success_message'] = 'Email successfully verified!';
            $this->call->view('login', $data);
        } else {
            $data['email'] = $email;
            $data['error_message'] = 'Invalid verification code.';
            $this->call->view('account_verify', $data);
        }
    }

    public function login_val()
    {
        $this->form_validation
            ->name('password')
            ->required()
            ->min_length(8)
            ->name('email')
            ->valid_email();

        if ($this->form_validation->run() == FALSE) {
            $this->call->view('login');
        } else {
            $email = $this->io->post('email');
            $password = $this->io->post('password');

            $user = $this->User_Model->get_user_by_email($email);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    if ($user['is_verified']) {
                        $this->call->view('welcome_page');
                    } else {
                        $this->call->helper('url');

                        $data['email'] = $this->io->post('email');
                        $data['error_message'] = 'Verify Your Email';
                        $this->call->view('account_verify', $data);
                    }
                } else {
                    $data['error_message'] = 'Invalid password!';
                    $this->call->view('login', $data);
                }
            } else {
                $data['error_message'] = 'Email Not Found!';
                $this->call->view('login', $data);
            }
        }
    }

    public function sendVerificationEmail($to, $verificationCode)
    {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'caringaljohnlloyd17@gmail.com';
        $mail->Password = 'vvme tzch kbky qpfr';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $from = 'caringaljohnlloyd17@gmail.com';
        $mail->setFrom($from, 'Jalo');
        $mail->addAddress($to);
        $mail->isHTML(true);
        $mail->Subject = 'Account Verification Code';
        $mail->Body = 'Your verification code is: ' . $verificationCode;

        try {
            $mail->send();
            $this->User_Model->updateVerificationCode($to, $verificationCode);
            $this->call->view('account_verify');
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }











    public function __construct()
    {
        parent::__construct();
        $this->call->model('Sched_Model');
        $this->call->helper('url');
        $this->call->library('session');
        $this->call->library('form_validation');
        $this->call->model('User_Model');
        $this->call->model('Room_Model');

    }




    public function bago()
    {
        $this->call->helper('url');
        $this->call->view('bagong');
    }
    public function service()
    {
        $this->call->helper('url');
        $this->call->view('Services');
    }

    public function room()
    {
        $this->call->helper('url');
        $this->call->view('Room');
    }
    public function contact()
    {
        $this->call->helper('url');
        $this->call->view('Contact');
    }

    public function add()
    {
        $checkin = $this->io->post('checkin');
        $checkout = $this->io->post('checkout');
        $adult = $this->io->post('adult');
        $child = $this->io->post('child');
        $this->Sched_Model->add($checkin, $checkout, $adult, $child);
        $this->call->helper('url');
        redirect('/home');
    }
    public function feedback()
    {

        $feedback = $this->io->post('feedback');
        $this->Room_Model->send_feedback($feedback);
        $this->call->helper('url');
        redirect('/home');
    }


    public function roomdata()
    {
        $data = $this->Room_Model->read();
        $this->call->view('welcome_page', $data);
    }

    public function admin()
    {
        $this->call->view('admin');
    }

    public function bookingDashboard()
    {
        $data = $this->Room_Model->getdata();
        $this->call->view('BookingAdmin', $data);
    }
    public function delete($id)
    {
        if ($this->Room_Model->delete($id))
            redirect('/bookingDashboard');
    }

    public function edit($id)
    {
        $data = $this->Room_Model->booking_data($id);
        $this->call->view('editBooking', $data);
    }
    public function update()
    {
        $id = $this->io->post('id');
        $checkin = $this->io->post('checkin');
        $checkout = $this->io->post('checkout');
        $adult = $this->io->post('adult');
        $child = $this->io->post('child');
        $this->Room_Model->edit($id, $checkin, $checkout, $adult, $child);
        redirect('/bookingDashboard');
    }
    public function logout()
    {
        unset($_SESSION['email']);
        return $this->call->view('/login');
    }
}

?>