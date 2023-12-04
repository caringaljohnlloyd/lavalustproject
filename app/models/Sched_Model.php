<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Sched_Model extends Model
{
    private $LAVA;
    public function __construct()
    {
        parent::__construct();
        $this->LAVA = &lava_instance();
        $this->LAVA->call->database();    }
    public function read()
    {
        return $this->db->table('sched')
        ->join('crud', 'sched.id = crud.id')
        ->get_all();    
   
    }

    public function add($checkin, $checkout, $adult, $child,$manifest,$id)
    {
        $data = array(
            'checkin' => $checkin,
            'checkout' => $checkout,
            'adult' => $adult,
            'child' => $child,
            'manifest' => $manifest,
            'id' => $id,


        );
        return $this->db->table('sched')
            ->insert($data);
    }
        public function delete($id)
    {
        $result = $this->db->table('sched')->where(array('sched_id' => $id))->delete();
        if ($result) {
            return true;
        }
    }
    public function edit($checkin, $checkout, $adult, $child, $manifest, $sched_id)
{
    $data = array(
        'checkin' => $checkin,
        'checkout' => $checkout,
        'adult' => $adult,
        'child' => $child,
        'manifest' => $manifest,
    );

    $result = $this->db->table('sched')->where('sched_id', $sched_id)->update($data);

    if ($result) {
        return true;
    }
}


    public function booking_data($id)
    {
        return $this->db->table('sched')->where(array('sched_id' => $id))->get();
    }
    
}