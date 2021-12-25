<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class B1_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->getInfo();
		if (strlen($this->session->userdata('tendangnhap'))==6)   
        {  
            $this->load->view('B1_home_view');  
        } else {  
            redirect('Main/invalid');  
        }  
		
	}
	// thêm công dân
	public function addCitizen(){
		// get data from B1_view
		$ten = $this->input->post('ten');
		$ngaysinh  = $this->input->post('ngaysinh');
		$gioitinh = $this->input->post('gioitinh');
		$ID = $this->input->post('ID');
		$quequan = $this->input->post('quequan');
		$tongiao = $this->input->post('tongiao');
		$trinhdovanhoa = $this->input->post('trinhdovanhoa');
		$nghenghiep =$this->input->post('nghenghiep');

		$this->load->model('B1_model');
		if($this->B1_model->insertCongdan($ten,$ngaysinh,$gioitinh,$ID,$quequan,$tongiao,$trinhdovanhoa,$nghenghiep)){
			$this->load->view('success_view');
		}
		else{
			echo 'Nhập phiếu thông tin thất bại';
		}

	}

	public function complete()
	{
		$this->load->view('B1_complete_view');
	}

	public function input(){
		$this->load->view('B1_input_view');
	}
	// phân tích số liệu
	public function analysis(){
		$this->load->model('B1_model');
		$ketqua = $this->B1_model->citizenQuantity();
		$data['quantity'] = $ketqua;
		
		$this->load->view('B1_analysis_view',$data);
	}

	public function home(){
		$this->load->view('B1_home_view');
	}

	public function search()
	{
		$this->load->view('B1_search_view');
	}
	// danh sách công dân
	public function list(){
		$this->load->model('B1_model');
		$ketqua = $this->B1_model->getCitizenData();
		$ketqua = array("mangketqua" => $ketqua);

		$this->load->view('B1_list_view', $ketqua);
	}
	// lấy thông tin từ session
	public function getInfo()
	{
		$this->load->model('B1_model');
		$result = $this->B1_model->getInfo();
		$data = array(
  			'tendangnhap' => $this->session->userdata('tendangnhap'),
  		    'info' => $result,
		);
		$this->session->set_userdata($data);
	}
	// tìm kiếm công dân
	public function searchCitizen(){
		$ID = $this->input->post('ID');
		$this->load->model('B1_model');

		if($this->B1_model->searchCitizen($ID))
		{
		$ketqua = $this->B1_model->searchCitizen($ID);
		$ketqua = array("mangketqua" => $ketqua);

		$this->load->view('B1_personal_view', $ketqua);
		}
		else echo "Bạn không có quyền xem thông tin này";
	}
}

/* End of file B2_controller.php */
/* Location: ./application/controllers/B2_controller.php */