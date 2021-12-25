<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A1_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
	// danh sách công dân
	public function getCitizenData()
	{
		$this->db->select('*');
		$data = $this->db->get('congdan');
		$data = $data->result_array();
		return $data;
	}
	// tra cứu mã cấp dưới
	public function getCodeData()
	{
		$this->db->select('*');
		$data = $this->db->get('province');
		$data = $data->result_array();
		return $data;
	}
	// cấp tài khoản cán bộ A2 Tỉnh/Thành phố
	public function passwordA2($tendangnhap,$matkhau)
	{
		$this->db->set('matkhau', $matkhau);
		$this->db->where('tendangnhap', $tendangnhap);
		$this->db->update('province');	
	}
	// tìm kiếm công dân toàn quốc
	public function searchCitizen($ID)
	{
		$this->db->select('*');
		$this->db->where('ID', $ID);
		$query = $this->db->get('congdan');
		$user = $query->row();

		$data = $query->result_array();
		return $data;
	}
	// phân tích số liệu
	public function citizenQuantity()
	{
		$this->db->select('*');
		$query = $this->db->get('congdan');
		$result = $query->num_rows();
		return $result;
	}
}

/* End of file B2_model.php */
/* Location: ./application/models/B2_model.php */