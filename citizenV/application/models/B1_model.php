<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B1_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
	}
	// lấy mã xã/phường từ session
	public function getWardId()
	{
		$username =$this->session->userdata('tendangnhap'); 		

		$this->db->select('*');
		$this->db->where('tendangnhap', $username);
		$query = $this->db->get('ward');
		$user = $query->row();

		return $user->id;
	}

	// lấy tên xã phường
	public function getWard($_ward_id)
	{
		$this->db->select('*');
		$this->db->where('id', $_ward_id);
		$query = $this->db->get('ward');

		$row =$query->row();
		$ward = $row->_name;

		return $ward;
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
		$query = $this->db->get('ward');
		$user = $query->row();

        $_province_id = $user->_province_id;
        $_district_id = $user->_district_id;
        $_ward_id = $user->id;
        
		$diachi =$this->getWard($_ward_id).','.$this->getDistrict($_district_id).','.$this->getProvince($_province_id);
		return $diachi;
	}

	// thêm công dân
	public function insertCongdan($ten,$ngaysinh,$gioitinh,$ID,$quequan,$tongiao,$trinhdovanhoa,$nghenghiep)
	{	
		//lay id tinh,huyen,phuong
		$username =$this->session->userdata('tendangnhap'); 
		
		$this->db->select('*');
		$this->db->where('tendangnhap', $username);
		$query = $this->db->get('ward');
		$user = $query->row();
		
        $_province_id = $user->_province_id;
        $_district_id = $user->_district_id;
        $_ward_id = $user->id;
		
		$diachi =$this->getWard($_ward_id).','.$this->getDistrict($_district_id).','.$this->getProvince($_province_id);

		$data=array(
			'ten' => $ten,
			'ngaysinh' => $ngaysinh,
			'ID' => $ID,
			'quequan' => $quequan,
			'diachi' => $diachi,
			'gioitinh' => $gioitinh,
			'tongiao' => $tongiao,
			'trinhdovanhoa' => $trinhdovanhoa,
			'nghenghiep' => $nghenghiep,
			'_province_id' => $_province_id,
			'_district_id' => $_district_id,
			'_ward_id' => $_ward_id,
		);
		$this->db->insert('congdan', $data);
		return $this->db->insert_id();
		
	}
	// danh sách công dân
	public function getCitizenData()
	{
		$_ward_id = $this->getWardId();

		$this->db->select('*');
		$this->db->where('_ward_id', $_ward_id);
		$data = $this->db->get('congdan');
		$data = $data->result_array();
		return $data;
	}
	// tìm kiếm công dân
	public function searchCitizen($ID)
	{
		$_ward_id = $this->getWardId();

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$query = $this->db->get('congdan');
		$user = $query->row();

		if($_ward_id==$user->_ward_id)
		{
			$data = $query->result_array();
			return $data;
		}
		else return 0;
	}
	// phân tích số liệu
	public function citizenQuantity()
	{
		$_ward_id = $this->getWardId();

		$this->db->select('*');
		$this->db->where('_ward_id', $_ward_id);
		$query = $this->db->get('congdan');
		$result = $query->num_rows();
		return $result;
	}
}

/* End of file B2_model.php */
/* Location: ./application/models/B2_model.php */