<?php
class Employee_Model extends CI_Model
{
    public function getEmployee($id = null)
    {
        if ($id === null) {
            return $this->db->get('employee')->result_array();
        } else {
            return $this->db->get_where('employee', ['id_employee' => $id])->result_array();
        }
    }
}
