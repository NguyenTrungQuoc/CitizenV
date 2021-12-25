<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A3_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();	
	}
	// lấy mã quận/ huyện từ thông tin session
	public function getDistrictID()
	{
		$username =$this->session->userdata('tendangnhap'); 		

		$this->db->select('*');
		$this->db->where('tendangnhap', $username);
		$query = $this->db->get('district');
		$user = $query->row();

		return $user->id;
	}
	// danh sách công dân trên địa bàn quản lý
	public function getCitizenData()
	{
		$_district_id =$this->getDistrictID();

		$this->db->select('*');
		$this->db->where('_district_id',$_district_id);
		$data = $this->db->get('congdan');
		$data = $data->result_array();
		return $data;
	}
	// tra cứu mã cấp dưới
	public function getCodeData()
	{
        $_district_id =$this->getDistrictID();
        
		$this->db->select('*');
		$this->db->where('_district_id', $_district_id);
		$data = $this->db->get('ward');
		$data = $data->result_array();
		return $data;
	}
	// cấp tài khoản B1
	public function passwordB1($tendangnhap,$matkhau)
	{
		$this->db->select('*');
		$this->db->where('tendangnhap', $tendangnhap);
		$query = $this->db->get('ward');
		$user = $query->row();
		
		if($user->_district_id == $this->getDistrictID())
		{
			$this->db->set('matkhau', $matkhau);
			$this->db->where('tendangnhap', $tendangnhap);
			$this->db->update('ward');	
			return 1;
		}
		else return 0;		
	}
	// lấy tên Quận/Huyện
	public function getDistrict($_district_id)
	{
		$this->db->select('*');
		$this->db->where('id', $_district_id);
		$query = $this->db->get('district');

		$row =$query->row();
		$district = $row->_name;

		return $district;
	}
	// lấy tên Tỉnh/Thành Phố
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
		$username =$this->session->userdata('tendangnhap'); 
		
		$this->db->select('*');
		$this->db->where('tendangnhap', $username);
		$query = $this->db->get('district');
		$user = $query->row();

        $_province_id = $user->_province_id;
        $_district_id = $user->id;
        
		$diachi =$this->getDistrict($_district_id).','.$this->getProvince($_province_id);
		return $diachi;
	}
	// tìm kiếm công dân trên địa bàn
	public function searchCitizen($ID)
	{
		$_district_id = $this->getDistrictId();

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$query = $this->db->get('congdan');
		$user = $query->row();

		if($_district_id==$user->_district_id)
		{
			$data = $query->result_array();
			return $data;
		}
		else return 0;
	}	
	// phân tích số liệu
	public function citizenQuantity()
	{
		$_district_id = $this->getDistrictId();

		$this->db->select('*');
		$this->db->where('_district_id', $_district_id);
		$query = $this->db->get('congdan');
		$result = $query->num_rows();
		return $result;
	}
}

/* End of file B2_model.php */
/* Location: ./application/models/B2_model.php */