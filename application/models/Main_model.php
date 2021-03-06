<?php
class Main_model extends CI_Model{
    public function register_user($data){
        $this->db->insert('user',$data);
    }
    public function register_admin($data){
        $this->db->insert('admin',$data);
    }
    public function get_user(){
        return $this->db->get('user')->result_array();
    }
    public function get_user_where($where){
        return $this->db->get_where('user',$where)->row_array();
    }
    public function get_admin_where($where){
        return $this->db->get_where('admin',$where)->row_array();
    }
    public function get_kota(){
        return $this->db->get('kota_kab')->result_array();
    }
    public function get_kost($key=null){
        if($key==null){
            $this->db->select("*");
            $this->db->from("kota_kab");
            $this->db->join("data_kost","data_kost.id_kota_kab=kota_kab.id");
            return $this->db->get()->result_array();
        }else{
            $this->db->like('alamat',$key);
            $this->db->or_like('nmkost',$key);
            $this->db->select("*");
            $this->db->from("kota_kab");
            $this->db->join("data_kost","data_kost.id_kota_kab=kota_kab.id");
            return $this->db->get()->result_array();
        }
        
    }
    public function get_kost_where($where){
        $this->db->where($where);
        return $this->db->get('data_kost')->row_array();
    }
    public function send_tambah_kost($data){
        $this->db->insert('data_kost',$data);
    }
    public function send_update_kost($data,$id){
        $this->db->where(["id"=>$id]);
        $this->db->update('data_kost',$data);
    }
    public function send_edit_profile($data,$id){
        $this->db->where(["id"=>$id]);
        $this->db->update('admin',$data);
    }
    public function send_edit_profile_user($data,$id){
        $this->db->where(["id"=>$id]);
        $this->db->update('user',$data);
    }
    public function tambah_favorit($data){
        $this->db->insert('favorit',$data);
    }
    public function hapus_favorit($where){
        $this->db->delete('favorit',$where);
    }
    public function get_favorit_where($iduser){
        $this->db->select("*");
        $this->db->from("favorit,user,kota_kab");
        $this->db->join("data_kost","favorit.id_user=user.id and favorit.id_kost=data_kost.id and data_kost.id_kota_kab=kota_kab.id and favorit.id_user='$iduser'");
        return $this->db->get()->result_array();
    }
    public function cek_favorite($where){
        return $this->db->get_where('favorit',$where)->row_array();
    }
}
?>