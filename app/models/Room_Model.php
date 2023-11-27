<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Room_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }
    public function read()
    {
        return $this->db->table('room')->get_all();
    }
    public function getdata()
    {
        return $this->db->table('sched')->get_all();
    }
    public function delete($id)
    {
        $result = $this->db->table('sched')->where(array('id' => $id))->delete();
        if ($result) {
            return true;
        }
    }
    public function edit($id, $checkin, $checkout,$adult,$child)
    {
        $data = array(
            'checkin' => $checkin,
            'checkout' => $checkout,
            'adult' => $adult,
            'child' => $child,
        );
        $result = $this->db->table('sched')->where('id', $id)->update($data);
        if ($result) {
            return true;
        }
    }

    public function booking_data($id)
    {
        return $this->db->table('sched')->where(array('id' => $id))->get();
    }
    
    public function send_feedback($feedback)
    {
       
        $data = array(
            'id' => $id,
            'feedback' => $feedback,
        );
        return $this->db->table('feedback')
            ->insert($data);
    }
    
    
}




