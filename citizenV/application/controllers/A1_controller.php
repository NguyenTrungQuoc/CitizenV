<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A1_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	// trang chủ
	public function index()
	{	

		if ($this->session->userdata('tendangnhap')=='admin')   
        {  
            $this->load->view('A1_home_view');  
        } else {  
            redirect('Main/invalid');  
        } 

	}
	// cấp tài khoản cán bộ A2 (Tỉnh/Thành phố)
	public function addA2(){
		
		$tendangnhap = $this->input->post('tendangnhap');
		$matkhau  = $this->input->post('matkhau');
		$this->load->model('A1_model');
		$this->A1_model->passwordA2($tendangnhap,$matkhau);
		$this->load->view('success_view');	
	}	
	// tra cứu mã cấp dưới
	public function listCode()
	{
		$this->load->model('A1_model');
		$result = $this->A1_model->getCodeData();
		$result = array("mangketqua" => $result);
		$this->load->view('A1_code_view', $result);
	}	
	// phân tích số liệu
	public function analysis(){
		$this->load->model('A1_model');
		$ketqua = $this->A1_model->citizenQuantity();
		$data['quantity'] = $ketqua;
		
		$this->load->view('A1_analysis_view',$data);
	}

	public function home(){
		$this->load->view('A1_home_view');
	}

	public function account(){
		$this->load->view('A1_account_view');
	}
	// danh sách công dân toàn quốc
	public function list(){
		$this->load->model('A1_model');
		$ketqua = $this->A1_model->getCitizenData();
		$ketqua = array("mangketqua" => $ketqua);
		$this->load->view('A1_list_view', $ketqua);
	}

	public function search()
	{
		$this->load->view('A1_search_view');
	}
	// tìm kiếm công dân toàn quốc
	public function searchCitizen()
	{
		$ID = $this->input->post('ID');
		$this->load->model('A1_model');

		if($this->A1_model->searchCitizen($ID))
		{
		$ketqua = $this->A1_model->searchCitizen($ID);
		$ketqua = array("mangketqua" => $ketqua);

		$this->load->view('A1_personal_view', $ketqua);
		}
		else echo "Bạn không có quyền xem thông tin này";
	}
}

/* End of file B2_controller.php */
/* Location: ./application/controllers/B2_controller.php */