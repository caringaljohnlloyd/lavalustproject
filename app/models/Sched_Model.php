<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Sched_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }
    public function read()
    {
        return $this->db->table('sched')->get_all();
    }
    public function add($checkin, $checkout, $adult, $child)
    {
        $data = array(
            'checkin' => $checkin,
            'checkout' => $checkout,
            'adult' => $adult,
            'child' => $child,
        );
        return $this->db->table('sched')
            ->insert($data);
    }
}