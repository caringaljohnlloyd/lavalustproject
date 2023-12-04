<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Feed_Model extends Model
{
    private $LAVA;

    public function __construct()
    {
        parent::__construct();
        $this->LAVA = &lava_instance();
        $this->LAVA->call->database();  
    }
    public function read()
    {
        return $this->db->table('feedback')
        ->join('crud', 'feedback.id = crud.id')
        ->get_all();    }
   
    
    public function fdelete($fid)
    {
        $result = $this->db->table('feedback')->where(array('feedback_id' => $fid))->delete();
        if ($result) {
            return true;
        }
    }
}