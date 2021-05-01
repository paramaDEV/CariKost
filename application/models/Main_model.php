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
    public function get_kost(){
        return $this->db->get('data_kost')->result_array();
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
}
?>