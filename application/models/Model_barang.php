<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_barang extends CI_Model {

	function tampil_data(){
		$query = "select b.barang_id,b.nama_barang,b.harga,kb.nama_kategori from barang as b, kategori_barang as kb where b.kategori_id=kb.kategori_id";
		return $this->db->query($query);
	}

	function post($data){
		$this->db->insert('barang', $data);
	}

	function get_one($id){
		$param = array('barang_id' => $id);
		return $this->db->get_where('barang', $param);
	}

	function edit($data, $id){
		$this->db->where('barang_id', $id);
		$this->db->update('barang', $data);
	}

	function delete($id){
		$this->db->where('barang_id', $id);
		$this->db->delete('barang');
	}

}
