<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_controller extends CI_Controller{
    public function index(){
        $this->load->model('main_model');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
}
?>