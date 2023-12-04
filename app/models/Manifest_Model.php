<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Manifest_Model extends Model
{
    private $LAVA;
    public function __construct()
    {
        parent::__construct();
        $this->LAVA = &lava_instance();
        $this->LAVA->call->database();    }
    public function read()
    {
        return $this->db->table('manifest')
            ->join('crud', 'manifest.id = crud.id')
            ->get_all();
    }
    public function add($name, $id)
    {
        $data = array(
            'name' => $name,
            'id' => $id,
        );
        return $this->db->table('manifest')
            ->insert($data);
    }
    

}