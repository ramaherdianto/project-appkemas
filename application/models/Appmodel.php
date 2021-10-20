<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appmodel extends CI_Model {
    
    function tampil_event() {
        return $this->db->get('tbevent');
    }

    public function input_data($data){
        $insert = $this->db->insert('tbevent',$data);
        return $insert;
    }

    function edit_data($where,$table) {
        return $this->db->get_where($table,$where);
    }

    function update_data($where,$data,$table) {
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    public function hapus($id){
        $this->db->where('id',$id);
        $this->db->delete('tbevent');
    }

    public function detail_data($id=NULL) {
        $query = $this->db->get_where('tbevent', array('id'=>$id))->row();
        return $query;
    }

    function tampil_pesan() {
        return $this->db->get('tbpesan');
    }

    public function insert_pesan($table,$data) {
        $insert=$this->db->insert($table, $data);
        return $insert;
    }

    public function detail_pesan($id=NULL) {
        $query = $this->db->get_where('tbpesan', array('id'=>$id))->row();
        return $query;
    }

    public function hapus_pesan($id){
        $this->db->where('id',$id);
        $this->db->delete('tbpesan');
    }

}