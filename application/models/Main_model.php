<?php
class Main_model extends CI_Model{
    public function register_user($data){
        $this->db->insert('user',$data);
    }
    public function register_admin($data){
        $this->db->insert('admin',$data);
    }
    public function get_user_where($where){
        return $this->db->get_where('user',$where)->row_array();
    }
    public function get_admin_where($where){
        return $this->db->get_where('admin',$where)->row_array();
    }
}
?>