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
        $data = $this->Feed_Model->read();

        $this->call->view('welcome_page', $data);
    }
    public function register()
    {
        $this->call->helper('url');

        $this->call->view('register');
    }

    public function login()
    {
        $this->call->helper('url');
    
        if(isset($_SESSION['id'])){
            // User is already logged in, redirect to a different page
            redirect(site_url('welcome_page')); // Change 'dashboard' to the desired page
        }
    
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
                $_SESSION['id']=$user['id'];
                if (password_verify($password, $user['password'])) {
                    if ($user['is_verified']) {
                        if ($user['role'] === 'admin') {
                            $data['sched_data'] = $this->Sched_Model->read();

                            $data['staff_data'] = $this->Staff_Model->getStaff();


                            $this->call->view('admin',$data);
                        } else {
                            $this->call->view('welcome_page');
                        }
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
        $this->call->model('Manifest_Model');
        $this->call->model('Feed_Model');
        $this->call->model('Staff_Model');



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

    
   


    public function roomdata()
    {
        $data = $this->Room_Model->read();
        $this->call->view('welcome_page', $data);
    }

    public function admin()
    {
        $data['sched_data'] = $this->Sched_Model->read();
        $data['staff_data'] = $this->Staff_Model->getStaff();
        $this->call->view('admin',$data);
    }
    public function addStaffForm()
    {
        $this->call->helper('url');
        $this->call->view('add_staff_form');
    }
    public function addStaff()
    {
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Extract data from $_POST
            $name = isset($_POST['staff_name']) ? $_POST['staff_name'] : '';
    
            if (isset($_FILES['staff_image']) && $_FILES['staff_image']['error'] === UPLOAD_ERR_OK) {
                // Process the uploaded file
                $uploadDir = 'public/uploads/';
                $uploadFile = $uploadDir . basename($_FILES["staff_image"]["name"]);
    
                if (move_uploaded_file($_FILES["staff_image"]["tmp_name"], $uploadFile)) {
                    // File upload successful
                    $imageFileName = basename($uploadFile);
    
                    // Call the insert method with the uploaded file path
                    if ($this->Staff_Model->addStaff($name, $imageFileName)) {
                        redirect('index.php/admin');
                    } else {
                        // Handle insert error
                        $this->call->view('index.php/admin');
                    }
                } else {
                    // Handle file move error
                    echo "File upload failed.";
                }
            } else {
                echo "File upload error: " . $_FILES["staff_image"]["error"];
            }
        }
    }
    

        
public function deleteStaff($staffId)
{
   if( $this->Staff_Model->deleteStaff($staffId))

    redirect(site_url('index.php/admin'));
}

public function updateStaffPage($staff_id)
{
    $data = $this->Staff_Model->getStaffById($staff_id);
    $this->call->view('update_staff', $data);
}

public function updateStaff()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $staff_id = isset($_POST['staff_id']) ? $_POST['staff_id'] : '';
        $staff_name = isset($_POST['staff_name']) ? $_POST['staff_name'] : '';

        if (isset($_FILES['staff_image']) && $_FILES['staff_image']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'public/uploads/';
            $uploadFile = $uploadDir . basename($_FILES["staff_image"]["name"]);

            if (move_uploaded_file($_FILES["staff_image"]["tmp_name"], $uploadFile)) {
                $staff_image = basename($uploadFile);

                $this->Staff_Model->updateStaff($staff_id, $staff_name, $staff_image);

                redirect('index.php/admin');
            } else {
                echo "File upload failed.";
            }
        } else {
            echo "File upload error: " . $_FILES["staff_image"]["error"];
        }
    }
}








    public function delete($id)
    {
        if ($this->Sched_Model->delete($id))
            redirect('index.php/bookingDashboard');
    }

    public function edit($id)
    {
        $data = $this->Sched_Model->booking_data($id);
        $this->call->view('editBooking', $data);
    }
    public function update()
    {
        $sched_id = $this->io->post('sched_id'); 
        $checkin = $this->io->post('checkin');
        $checkout = $this->io->post('checkout');
        $adult = $this->io->post('adult');
        $child = $this->io->post('child');
        $manifest = $this->io->post('manifest');
    
        $this->Sched_Model->edit($checkin, $checkout, $adult, $child, $manifest, $sched_id);
        redirect('index.php/bookingDashboard');
    }
    
    public function logout()
    {
        unset($_SESSION['email']);
        return $this->call->view('/login');
    }
    public function addManifest()
    {
        $usr = $_SESSION['id'];
        $name = $this->io->post('name');
    
        $this->Manifest_Model->add($name, $usr);
        $this->call->helper('url');
        redirect('index.php/room');
    }
    
    public function feedback()
    {
        $usr = $_SESSION['id'];

        $feedback = $this->io->post('feedback');
        $this->Room_Model->send_feedback($feedback,$usr);
        $this->call->helper('url');
        redirect('index.php/home');
    }




    public function add()
    {
        $usr = $_SESSION['id'];
    
        $checkin = $this->io->post('checkin');
        $checkout = $this->io->post('checkout');
        $adult = $this->io->post('adult');
        $child = $this->io->post('child');
        $manifest = $this->io->post('manifest');
    
        $bookingId = $this->Sched_Model->add($checkin, $checkout, $adult, $child, $manifest, $usr);
    
        if ($bookingId) {
            $_SESSION['success_message'] = 'Booking successful! Your booking ID is ' . $bookingId;
        } else {
            $_SESSION['error_message'] = 'Booking failed. Please try again.';
        }
    
        $this->call->helper('url');
        redirect('index.php/home');
    }
        public function bookingDashboard()
    {
        $data = $this->Sched_Model->read();
        $this->call->view('BookingAdmin', $data);
    }





    public function getFeed()
    {
        $data = $this->Feed_Model->read();
        print_r($data); // Check the result here
        $this->call->view('Feed', $data);
    }
    
    public function fdelete($fid)
    {
        if ($this->Feed_Model->fdelete($fid))
            redirect('/getFeed');
    }
    public function staffcount() {
        $data = $this->Staff_Model->countStaff();
        $this->call->view('welcome_page', $data);
    }
    

    
    
    
    
    
}

?>