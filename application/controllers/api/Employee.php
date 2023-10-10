<?php
use chriskacerguis\RestServer\RestController;

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . "libraries/RestController.php";

class Employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employee_Model', 'employee');
        $this->load->model('Toko_Model', 'toko');
    }


    public function index()
    {
            $data['employee'] = $this->employee->getEmployee($id = $this->session->userdata('id_employee'));
            $data['toko'] = $this->toko->getToko($id = $this->session->userdata('id_toko'));
            $response = [
                'data' => $data,
                'errors' => [],
                'messages' => 'Request was Successfully'
            ];
            return json_encode($response);
    }
}
