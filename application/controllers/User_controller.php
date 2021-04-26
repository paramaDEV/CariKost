<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_controller extends CI_Controller{
    public function index(){
        $this->load->model('main_model');
        $this->load->view('user/header');
        $this->load->view('user/sidebar');
        $this->load->view('user/dashboard');
        $this->load->view('user/footer');
    }
}
?>