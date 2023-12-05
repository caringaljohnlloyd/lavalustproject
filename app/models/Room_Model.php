<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Room_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->library('session');
    }
    public function read()
    {
        return $this->db->table('room')->get_all();
    }
    public function getdata()
    {
        return $this->db->table('sched')->get_all();
    }

    public function booking_data($id)
    {
        return $this->db->table('sched')->where(array('id' => $id))->get();
    }
    
    public function send_feedback($feedback,$id)
    {
       
        $data = array(
            'feedback' => $feedback,
            'id' =>  $id,
           

        );
       
            return $this->db->table('feedback')
            ->insert($data);

    }
    public function show_feedback()
    {
        return $this->db->table('feedback')->get_all();
    }


}


