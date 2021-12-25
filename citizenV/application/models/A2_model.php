<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A2_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
	// lấy mã tỉnh/thành phố từ session
	public function getProvinceID()
	{
		$username =$this->session->userdata('tendangnhap'); 		

		$this->db->select('*');
		$this->db->where('tendangnhap', $username);
		$query = $this->db->get('province');
		$user = $query->row();

		return $user->id;
	}
	// danh sách công dân
	public function getCitizenData()
	{
		$_province_id = $this->getProvinceID();

		$this->db->select('*');
		$this->db->where('_province_id', $_province_id);
		$data = $this->db->get('congdan');
		$data = $data->result_array();
		return $data;
	}
	// tra cứu mã cấp dưới
	public function getCodeData()
	{
		$_province_id = $this->getProvinceID();

		$this->db->select('*');
		$this->db->where('_province_id',$_province_id);
		$data = $this->db->get('district');
		$data = $data->result_array();
		return $data;
	}
	// cấp tài khoản cho cán bộ A3 Quận/Huyện
	public function passwordA3($tendangnhap,$matkhau)
	{
		$this->db->select('*');
		$this->db->where('tendangnhap', $tendangnhap);
		$query = $this->db->get('district');
		$user = $query->row();
		
		if($user->_province_id == $this->getProvinceID())
		{
			$this->db->set('matkhau', $matkhau);
			$this->db->where('tendangnhap', $tendangnhap);
			$this->db->update('district');

			return 1;
		}
		else return 0;
	}
	// lấy tên Tỉnh/Thành phố
	public function getProvince($_province_id)
	{
		$this->db->select('*');
		$this->db->where('id', $_province_id);
		$query = $this->db->get('province');

		$row =$query->row();
		$province = $row->_name;

		return $province;
	}
	// lấy thông tin từ session
	public function getInfo()
	{
        $_province_id = $this->getProvinceID();
		$diachi =$this->getProvince($_province_id);
		return $diachi;
	}
	// tìm kiếm công dân trên  địa bàn
	public function searchCitizen($ID)
	{
		$_province_id = $this->getProvinceId();

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$query = $this->db->get('congdan');
		$user = $query->row();

		if($_province_id==$user->_province_id)
		{
			$data = $query->result_array();
			return $data;
		}
		else return 0;
	}
	// phân tích số liệu
	public function citizenQuantity()
	{
		$_province_id = $this->getProvinceId();

		$this->db->select('*');
		$this->db->where('_province_id', $_province_id);
		$query = $this->db->get('congdan');
		$result = $query->num_rows();
		return $result;
	}
}

/* End of file B2_model.php */
/* Location: ./application/models/B2_model.php */