<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class main_controller  extends CI_Controller{
    public function index(){
        $this->load->view('home/header');
        $this->load->view('home/home');
    }
    public function login_page(){
        $this->load->model('main_model');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email');
        $this->form_validation->set_rules('password','Password','required|trim|min_length[8]');
        if($this->form_validation->run()==false){
            $data['title']='Login Page';
            $this->load->view('auth/header',$data);
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        }else{
            $this->_login();
        }

    }
    private function _login(){
        $this->load->model('main_model');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $where = [
            'email'=>$email
        ];
        $user=$this->main_model->get_user_where($where);
        $admin=$this->main_model->get_admin_where($where);
       
        if($user!=null){
            if(password_verify($password,$user['password'])){
                redirect("user_controller/index");
            }else{
                $this->session->set_flashdata('message',"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Akun tidak ditemukan. Pastikan mengisi data dengan benar
                </div>");
                redirect('main_controller/login_page');
            }
        }else if($admin!=null){
            if(password_verify($password,$admin['password'])){
                $this->session->set_userdata('id',$admin["id"]);
                redirect("admin_controller/index");
            }else{
                $this->session->set_flashdata('message',"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Akun tidak ditemukan. Pastikan mengisi data dengan benar
                </div>");
                redirect('main_controller/login_page');
            }
        }else{
            $this->session->set_flashdata('message',"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            Akun tidak ditemukan
            </div>");
            redirect('main_controller/login_page');
        }
    }
    public function user_registration_page(){
        $this->load->model('main_model');
        $this->form_validation->set_rules("nama","Nama","required");
        $this->form_validation->set_rules("ttl","Tanggal Lahir","required");
        $this->form_validation->set_rules("kelamin","Jenis Kelamin","required");
        $this->form_validation->set_rules("email","Email","required|trim|valid_email");
        $this->form_validation->set_rules("password","Password",'required|trim|min_length[8]|matches[repassword]');
        $this->form_validation->set_rules("repassword","Confirm Password",'required|trim|matches[password]');
        if($this->form_validation->run()==false){
            $data['title']='User Registration';
            $this->load->view('auth/header',$data);
            $this->load->view('auth/registration');
            $this->load->view('auth/footer');
        }else{
            $this->_register_user();
        }
    }
    public function admin_registration_page(){
        $this->load->model('main_model');
        $this->form_validation->set_rules("nama","Nama","required");
        $this->form_validation->set_rules("email","Email","required|trim|valid_email");
        $this->form_validation->set_rules("password","Password",'required|trim|min_length[8]|matches[repassword]');
        $this->form_validation->set_rules("repassword","Confirm Password",'required|trim|matches[password]');
        if($this->form_validation->run()==false){
            $data['title']='Admin Registration';
            $this->load->view('auth/header',$data);
            $this->load->view('auth/adm_registration');
            $this->load->view('auth/footer');
        }else{
            $this->_register_admin();
        }
    }
    private function _register_user(){
        $nama=$this->input->post('nama');
        $ttl=$this->input->post('ttl');
        $kelamin=$this->input->post('kelamin');
        $email=$this->input->post('email');
        $password=password_hash($this->input->post('password'),PASSWORD_DEFAULT);
        $data =[
            'nama'=>$nama,
            'ttl'=>$ttl,
            'jenis_kelamin'=>$kelamin,
            'email'=>$email,
            'password'=>$password
        ];
        $this->main_model->register_user($data);
        $this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissible fade show' role='alert'>
        Akun Berhasil Dibuat
        </div>");
        redirect('main_controller/login_page');
    }
    private function _register_admin(){
        $nama=$this->input->post('nama');
        $email=$this->input->post('email');
        $password=password_hash($this->input->post('password'),PASSWORD_DEFAULT);
        $data =[
            'nama'=>$nama,
            'email'=>$email,
            'password'=>$password
        ];
        $this->main_model->register_admin($data);
        $this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissible fade show' role='alert'>
        Akun Berhasil Dibuat
        </div>");
        redirect('main_controller/login_page');
    }
    public function logout(){
        $this->session->unset_userdata('id');
        $this->session->set_flashdata('message',"<div class='alert alert-success alert-dismissible fade show' role='alert'>
                Akun berhasil logout
                </div>");
        redirect("main_controller/login_page");
    }
}
?>