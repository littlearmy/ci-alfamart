<?php
class Auth_Model extends CI_Model
{
    public function setAuth()
    {

        $datacreate = array(
            'id_user' => $this->session->userdata('id_user'),
            'id_toko' => $this->session->userdata('id_toko'),
            'waktu_login' => date("Y-d-m H:i:s"),
        );
        return $this->db->insert('report_user', $datacreate)->result_array();
    }
}
