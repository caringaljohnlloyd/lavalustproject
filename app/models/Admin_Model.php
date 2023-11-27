<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin_Model extends Model
{

        public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }

}
