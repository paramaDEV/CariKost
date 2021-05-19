<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_controller extends CI_Controller{

    public function data_kost($key=null){
        $data = $this->main_model->get_kost($key);
        echo json_encode($data);
    }
    public function index(){
        $iduser=$this->session->userdata("id");
        if($iduser!=null){
        $this->load->model('main_model');
        $data["user"]=$this->main_model->get_user_where(["id"=>$iduser]);
        $data2["title"]="Dashboard User";
        $this->load->view('user/header',$data2);
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
        $where=[
            "id_user"=>$iduser,
            "id_kost"=>$id
        ];
        $data["favorit"]=$this->main_model->cek_favorite($where);
        $data2["title"]="Datail Kost";
        $this->load->model('main_model');
        $this->load->view('user/header',$data2);
        $this->load->view('user/sidebar',$data);
        $this->load->view('user/detail_kost');
        $this->load->view('user/footer');
        }else if($iduser==null){
            redirect("main_controller/login_page");
        }
    }
    public function favorit(){
        $iduser=$this->session->userdata("id");
        if($iduser!=null){
        $this->load->model('main_model');
        $data["user"]=$this->main_model->get_user_where(["id"=>$iduser]);
        $data2["title"]="Favorit";
        $data["favorit"]=$this->main_model->get_favorit_where($iduser);
        $this->load->view('user/header',$data2);
        $this->load->view('user/sidebar',$data);
        $this->load->view('user/favorit');
        $this->load->view('user/footer');
        }else{
            redirect("main_controller/login_page");
        }
    }
    public function tambah_favorit(){
        $this->load->model('main_model');
        $id_user=$this->input->post('id_user');
        $id_kost=$this->input->post('id_kost');
        $data=[
            "id_user"=>$id_user,
            "id_kost"=>$id_kost
        ];
        $this->main_model->tambah_favorit($data);
        redirect("user_controller/favorit");
    }
    public function hapus_favorit(){
        $this->load->model('main_model');
        $id_user=$this->input->post('id_user');
        $id_kost=$this->input->post('id_kost');
        $data=[
            "id_user"=>$id_user,
            "id_kost"=>$id_kost
        ];
        $this->main_model->hapus_favorit($data);
        redirect("user_controller/favorit");
    }
    public function profil(){
        $iduser=$this->session->userdata("id");
        if($iduser!=null){
        $this->load->model('main_model');
        $data["user"]=$this->main_model->get_user_where(["id"=>$iduser]);
        $data2["title"]="Profil User";
        $this->load->view('user/header',$data2);
        $this->load->view('user/sidebar',$data);
        $this->load->view('user/profil');
        $this->load->view('user/footer');
        }else{
            redirect("main_controller/login_page");
        }
    }

    public function update_profile(){
        $iduser=$this->session->userdata("id");
        if($iduser!=null){
        $data["user"]=$this->main_model->get_user_where(["id"=>$iduser]);
        $data2["title"]="Edit Profile";
        $this->form_validation->set_rules("nama","Nama","required");
        $this->form_validation->set_rules("ttl","Tanggal Lahir","required");
        $this->form_validation->set_rules("email","Email","required");
        if($this->form_validation->run()==false){
        $this->load->model('main_model');
        $this->load->view('user/header',$data2);
        $this->load->view('user/sidebar',$data);
        $this->load->view('user/update_profile');
        $this->load->view('user/footer');
        }else{
            $this->send_edit_profile($iduser);
        }
        }else if($iduser==null){
            redirect("main_controller/login_page");
        }
    }

    public function send_edit_profile($id){
        $nama = $this->input->post('nama');
        $kelamin =  $this->input->post('kelamin');
        $ttl= $this->input->post('ttl');
        $email = $this->input->post('email');
        $foto = $_FILES['foto'];
        $nm_foto = $this->input->post('nmfoto');
    
        if($foto!=""){
            $config["upload_path"]="./assets/img/user/";
            $config["encrypt_name"]=true;
            $config["allowed_types"]="jpg|png|jpeg";
            $config["max_size"]=500;
            $this->load->library('upload',$config);
            if($this->upload->do_upload('foto')){
                $nm_foto=$this->upload->data('file_name');
            }
        }

        $data=[
            "nama"=>$nama,
            "ttl" =>$ttl,
            "jenis_kelamin"=>$kelamin,
            "email"=>$email,
            "foto"=>$nm_foto
        ];

        $this->main_model->send_edit_profile_user($data,$id);
        redirect("user_controller/profile");
    }
}
?>