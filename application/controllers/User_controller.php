<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_controller extends CI_Controller{
    public function index(){
        $iduser=$this->session->userdata("id");
        if($iduser!=null){
        $this->load->model('main_model');
        $data["user"]=$this->main_model->get_user_where(["id"=>$iduser]);
        $data["kost"]=$this->main_model->get_kost();
        $this->load->view('user/header');
        $this->load->view('user/sidebar',$data);
        $this->load->view('user/dashboard');
        $this->load->view('user/footer');
        }else{
            redirect("main_controller/login_page");
        }
    }
    public function detail_kost($id){
        $iduser=$this->session->userdata("id");
        if($iduser!=null){
        $data["user"]=$this->main_model->get_user_where(["id"=>$iduser]);
        $data["kost"]=$this->main_model->get_kost_where(["id"=>$id]);
        $this->load->model('main_model');
        $this->load->view('user/header');
        $this->load->view('user/sidebar',$data);
        $this->load->view('user/detail_kost');
        $this->load->view('user/footer');
        }else if($iduser==null){
            redirect("main_controller/login_page");
        }
    }
}
?>