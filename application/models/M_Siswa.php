<?php
class M_Siswa extends CI_Model {
    function data_siswa(){
        $query = $this->db->query("select * from siswa");
        return $query;
    }

    function simpan(){
        $data = array('nisn' => $this->input->post('nisn'),
                'nama' => ($this->input->post('nama')),
                
                'alamat' => $this->input->post('alamat'));
        $insert = $this->db->insert('siswa',$data);
    }
    function data_siswa_by_id($id){
$query = $this->db->query("select * from siswa where nisn = '$id'");
return $query;
}
    function update(){
$where = array('nisn'=> $this->input->post('nisn'));

$data1 = array('nama' => $this->input->post('nama'),
'alamat' => $this->input->post('alamat'));
 
  $this->db->where($where);
$query = $this->db->update('siswa',$data1);

if ($query > 0) {
$this->session->set_flashdata('suksessimpan','Data Siswa Berhasil
Diperbaharui');
}
}

    function hapus_data_siswa($id){
        $query = $this->db->query("delete from siswa where nisn = '$id'");
        if($query > 0){
            $this->session->set_flashdata('suksessimpan','Data siswa Berhasil Dihapus');
        }else{
        $this->sesssion->set_flashdata('gagalsimpan','Data siswa Gagal dihapus');    
        }
    }
}