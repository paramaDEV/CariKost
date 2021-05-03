<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_controller extends CI_Controller{
    public function index(){
        $id_admin=$this->session->userdata("id");
        if($id_admin!=null){
        $data["admin"]=$this->main_model->get_admin_where(["id"=>$id_admin]);
        $data["kost"]=$this->main_model->get_kost();
        $this->load->model('main_model');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
        }else if($id_admin==null){
            redirect("main_controller/login_page");
        }
    }
    public function data_kost(){
        $id_admin=$this->session->userdata("id");
        if($id_admin!=null){
        $data["admin"]=$this->main_model->get_admin_where(["id"=>$id_admin]);
        $data["kost"]=$this->main_model->get_kost();
        $this->load->model('main_model');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/data_kost');
        $this->load->view('admin/footer');
        }else if($id_admin==null){
            redirect("main_controller/login_page");
        }
    }
    public function detail_kost($id){
        $id_admin=$this->session->userdata("id");
        if($id_admin!=null){
        $data["admin"]=$this->main_model->get_admin_where(["id"=>$id_admin]);
        $data["kost"]=$this->main_model->get_kost_where(["id"=>$id]);
        $this->load->model('main_model');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/detail_kost');
        $this->load->view('admin/footer');
        }else if($id_admin==null){
            redirect("main_controller/login_page");
        }
    }
    public function tambah_kost(){
        $id_admin=$this->session->userdata("id");
        if($id_admin!=null){
        $data["admin"]=$this->main_model->get_admin_where(["id"=>$id_admin]);
        $this->form_validation->set_rules("nmkost","Nama Kost","required");
        $this->form_validation->set_rules("pemilik","Pemilik","required");
        $this->form_validation->set_rules("telepon","Telepon","required");
        $this->form_validation->set_rules("harga","Harga","required");
        $this->form_validation->set_rules("alamat","Alammat","required");
        $this->form_validation->set_rules("long","Longitude","required|decimal");
        $this->form_validation->set_rules("lat","Latitude","required|decimal");

        if($this->form_validation->run()==false){
        $this->load->model('main_model');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/tambah_kost');
        $this->load->view('admin/footer');
        }else{
            $this->send_tambah_kost();
        }
        }else if($id_admin==null){
            redirect("main_controller/login_page");
        }
    }

    public function send_tambah_kost(){
        $nmkost=$this->input->post('nmkost');
        $pemilik=$this->input->post('pemilik');
        $telepon=$this->input->post('telepon');
        $harga=$this->input->post('harga');
        $jenis=$this->input->post('jenis');
        $alamat=$this->input->post('alamat');
        $long=$this->input->post('long');
        $lat=$this->input->post('lat');
        $foto=$_FILES["foto"];
        $nmfoto='';

        if($foto!=""){
            $config["upload_path"]="./assets/img/kost/";
            $config["max_size"]=500;
            $config["allowed_types"]="jpg|png|jpeg";
            $config["encrypt_name"]=true;
            $this->load->library('upload',$config);
            if($this->upload->do_upload('foto')){
                $nmfoto=$this->upload->data("file_name");
            }
        }

        $data = [
            "nmkost"=>$nmkost,
            "pemilik"=>$pemilik,
            "telepon"=>$telepon,
            "harga"=>$harga,
            "jenis"=>$jenis,
            "alamat"=>$alamat,
            "longitude"=>$long,
            "latitude"=>$lat,
            "foto"=>$nmfoto
        ];
        $this->main_model->send_tambah_kost($data);
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        redirect("admin_controller/data_kost");
    }

    public function edit_kost($id){
        $id_admin=$this->session->userdata("id");
        if($id_admin!=null){
        $data["admin"]=$this->main_model->get_admin_where(["id"=>$id_admin]);
        $this->form_validation->set_rules("nmkost","Nama Kost","required");
        $this->form_validation->set_rules("pemilik","Pemilik","required");
        $this->form_validation->set_rules("telepon","Telepon","required");
        $this->form_validation->set_rules("harga","Harga","required");
        $this->form_validation->set_rules("alamat","Alammat","required");
        $this->form_validation->set_rules("long","Longitude","required");
        $this->form_validation->set_rules("lat","Latitude","required");

        $data["kost"]=$this->main_model->get_kost_where(["id"=>$id]);
        if($this->form_validation->run()==false){
        $this->load->model('main_model');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/edit_kost');
        $this->load->view('admin/footer');
        }else{
            $this->send_edit_kost($id);
        }
        }else if($id_admin==null){
            redirect("main_controller/login_page");
        }
    }

    public function send_edit_kost($id){
        $this->load->model("main_model");
        $nmkost=$this->input->post('nmkost');
        $pemilik=$this->input->post('pemilik');
        $telepon=$this->input->post('telepon');
        $harga=$this->input->post('harga');
        $jenis=$this->input->post('jenis');
        $alamat=$this->input->post('alamat');
        $long=$this->input->post('long');
        $lat=$this->input->post('lat');
        $foto=$_FILES["foto"];
        $nmfoto=$this->input->post('nmfoto');;

        if($foto!=""){
            $config["upload_path"]="./assets/img/kost/";
            $config["max_size"]=500;
            $config["allowed_types"]="jpg|png|jpeg";
            $config["encrypt_name"]=true;
            $this->load->library('upload',$config);
            if($this->upload->do_upload('foto')){
                $nmfoto=$this->upload->data("file_name");
            }
        }

        $data = [
            "nmkost"=>$nmkost,
            "pemilik"=>$pemilik,
            "telepon"=>$telepon,
            "harga"=>$harga,
            "jenis"=>$jenis,
            "alamat"=>$alamat,
            "longitude"=>$long,
            "latitude"=>$lat,
            "foto"=>$nmfoto
        ];
        $this->main_model->send_update_kost($data,$id);
        echo "<script>alert('Data berhasil diubah')</script>";
        redirect("admin_controller/data_kost");
    }

    public function data_user(){
        $id_admin=$this->session->userdata("id");
        if($id_admin!=null){
        $data["admin"]=$this->main_model->get_admin_where(["id"=>$id_admin]);
        $data["user"]=$this->main_model->get_user();
        $this->load->model('main_model');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/data_user');
        $this->load->view('admin/footer');
        }else if($id_admin==null){
            redirect("main_controller/login_page");
        }
    }

    public function profile(){
        $id_admin=$this->session->userdata("id");
        if($id_admin!=null){
        $data["admin"]=$this->main_model->get_admin_where(["id"=>$id_admin]);
        $this->load->model('main_model');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/profil');
        $this->load->view('admin/footer');
        }else if($id_admin==null){
            redirect("main_controller/login_page");
        }
    }

    public function update_profile(){
        $id_admin=$this->session->userdata("id");
        if($id_admin!=null){
        $data["admin"]=$this->main_model->get_admin_where(["id"=>$id_admin]);
        $this->form_validation->set_rules("nama","Nama","required");
        $this->form_validation->set_rules("ttl","Tanggal Lahir","required");
        $this->form_validation->set_rules("email","Email","required");
        if($this->form_validation->run()==false){
        $this->load->model('main_model');
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar',$data);
        $this->load->view('admin/update_profile');
        $this->load->view('admin/footer');
        }else{
            $this->send_edit_profile($id_admin);
        }
        }else if($id_admin==null){
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
            $config["upload_path"]="./assets/img/admin/";
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

        $this->main_model->send_edit_profile($data,$id);
        redirect("admin_controller/profile");
    }
}
?>