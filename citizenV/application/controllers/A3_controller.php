<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class A3_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	// trang chủ
	public function index()
	{	
		$this->getInfo();
		if (strlen($this->session->userdata('tendangnhap'))==4)   
        {  
            $this->load->view('A3_home_view');  
        } 
        else {  
            redirect('Main/invalid');  
        }  	
	}
	// cấp tài khoản cán bộ b1 Xã/Phường
	public function addB1(){
		
		$tendangnhap = $this->input->post('tendangnhap');
		$matkhau  = $this->input->post('matkhau');
		
		$this->load->model('A3_model');
		if($this->A3_model->passwordB1($tendangnhap,$matkhau))
		{
			$this->load->view('success_view');
		}
		else $this->load->view('unauthorized_view');
	}
	// tra cứu mã cấp dưới
	public function listCode()
	{
		$this->load->model('A3_model');
		$result = $this->A3_model->getCodeData();
		$result = array("mangketqua" => $result);

		$this->load->view('A3_code_view', $result);
	}	
	// phân tích số liệu
	public function analysis(){
		$this->load->model('A3_model');
		$ketqua = $this->A3_model->citizenQuantity();
		$data['quantity'] = $ketqua;
		
		$this->load->view('A3_analysis_view',$data);
	}

	public function home(){
		$this->load->view('A3_home_view');
	}

	public function account(){
		$this->load->view('A3_account_view');
	}
	// danh sách công dân
	public function list(){
		$this->load->model('A3_model');
		$ketqua = $this->A3_model->getCitizenData();
		$ketqua = array("mangketqua" => $ketqua);
		$this->load->view('A3_list_view', $ketqua);
	}
	// lấy thông tin từ session
	public function getInfo()
	{
		$this->load->model('A3_model');
		$result = $this->A3_model->getInfo();
		$data = array(
  			'tendangnhap' => $this->session->userdata('tendangnhap'),
  		    'info' => $result,
		);
		$this->session->set_userdata($data);
	}

	public function search()
	{
		$this->load->view('A3_search_view');
	}
	// tìm kiếm công dân
	public function searchCitizen(){
		$ID = $this->input->post('ID');
		$this->load->model('A3_model');

		if($this->A3_model->searchCitizen($ID))
		{
		$ketqua = $this->A3_model->searchCitizen($ID);
		$ketqua = array("mangketqua" => $ketqua);

		$this->load->view('A3_personal_view', $ketqua);
		}
		else echo "Bạn không có quyền xem thông tin này";
	}
}

/* End of file B2_controller.php */
/* Location: ./application/controllers/B2_controller.php */