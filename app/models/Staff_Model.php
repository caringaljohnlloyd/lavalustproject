<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Staff_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }
    public function getStaff()
    {
        return $this->db->table('staff')->get_all();
    }
    public function addStaff($staffName,$staff_image)
    {
        $data = array(
            'staff_name' => $staffName,
            'staff_image' => $staff_image,

        );

        return $this->db->table('staff')->insert($data);
    }
    public function deleteStaff($staff_id)
    {
        $result = $this->db->table('staff')->where(array('staff_id' => $staff_id))->delete();
        if ($result) {
            return true;
        }
    }
public function getStaffById($staff_id)
{
    return $this->db->table('staff')->where('staff_id', $staff_id)->get();
}

public function updateStaff($staff_id, $staff_name,$staff_image)
{
    $data = [
        'staff_image' => $staff_image,

        'staff_name' => $staff_name,
    ];

    $this->db->table('staff')->where('staff_id', $staff_id)->update($data);
}


public function countStaff() {
    $data = $this->db->raw('select * from staff');
    

    echo $this->db->row_count();
}

public function countFeedback() {
    $data = $this->db->raw('select * from feedback');
    

    echo $this->db->row_count();
}
public function countUser() {
    $data = $this->db->raw('select * from crud');
    

    echo $this->db->row_count();
}

public function countestimonial() {
    $data = $this->db->raw('select * from crud');
    

    echo $this->db->row_count();
}
}