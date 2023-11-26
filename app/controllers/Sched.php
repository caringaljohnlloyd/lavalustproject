<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Sched extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->model('Crud_model');
    }
    public function add()
    {
        $checkin = $this->io->post('checkin');
        $checkout = $this->io->post('checkout');
        $adult = $this->io->post('adult');
        $child = $this->io->post('child');
        $this->Crud_model->add($checkin, $checkout, $adult, $child);
        redirect('/');
    }
   
}