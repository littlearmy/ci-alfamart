<?php
class Toko_Model extends CI_Model
{
    public function getToko($id = null)
    {
        if ($id === null) {
            return $this->db->get('toko')->result_array();
        } else {
            return $this->db->get_where('toko', ['id_toko' => $id])->result_array();
        }
    }
}
