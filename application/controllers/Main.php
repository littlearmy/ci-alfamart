<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_Model', 'employee');
    }


    public function index()
    {
        $data['user'] = $this->db->get_where('employee', ['id_employee' =>
        $this->session->userdata('id_employee')])->row_array();
        // echo 'Hello ' . $data['user']['nama'];
        $data['title'] = 'Alfamart || Cawang Baru';
        $this->load->view('templates/main_header', $data);
        $this->load->view('templates/main_sidebar', $data);
        $this->load->view('templates/main_topbar', $data);
        $this->load->view('Main/index.php', $data);
        $this->load->view('templates/main_footer', $data);
    }
}
