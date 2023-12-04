<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_Model extends Model {

    public function __construct() {
        parent::__construct();
        $this->call->database();
    }

    public function get_user_by_email($email) {
        return $this->db->table('crud')->where('email', $email)->get();
    }

    public function insert($username, $password,$email,$verification, $is_verify){
        $role = 'user';

        $data=array(
            'username'=>$username,
            'password'=>$password,
            'email'=>$email,
            'code'=>$verification,
            'is_verified'=>$is_verify,
            'role' => $role, 

        );
        $result= $this->db->table('crud')->insert($data);
    }
    
    public function updateVerificationCode($email, $verificationCode) {
        $data = array(
            'code' => $verificationCode,
        );
    
      return  $this->db->table('crud')->where('email',$email)->update($data);
    }

    
public function verifyUser($email, $verificationCode) {
    $user = $this->db->table('crud')->where('email', $email)->get();
  
    if ($user && $user['code'] === $verificationCode) {
  
        $data = array('is_verified' => true);
        $this->db->table('crud')->where('email', $email)->update( $data);

        return true;
    }else{
        return false;
    }


}

}
?>