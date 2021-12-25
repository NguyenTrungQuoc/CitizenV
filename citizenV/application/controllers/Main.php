<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Main extends CI_Controller {  
  
    public function index()  
    {  
        $this->login();  
    }  
  
    public function login()  
    {  
        $this->load->view('login_view');  
    }  
  
    public function signin()  
    {  
        $this->load->view('signin');  
    }  
    // định tuyến URL
    public function data()  
    {  
        if ($this->session->userdata('tendangnhap')=='admin')   
        {  
            redirect('A1_controller','refresh');  
        }

        if (strlen($this->session->userdata('tendangnhap'))==2)   
        {  
            redirect('A2_controller','refresh');  
        }

        if (strlen($this->session->userdata('tendangnhap'))==4)   
        {  
            redirect('A3_controller','refresh');  
        }

        if (strlen($this->session->userdata('tendangnhap'))==6)   
        {  
            redirect('B1_controller','refresh');  
        }

         else {  
            redirect('Main/invalid');  
        }  
    }  
    
    public function invalid()  
    {  
        $this->load->view('invalid');  
    }  
  	// xử lý phiên,xác thực,an ninh
    public function login_action()  
    {  
        $this->load->helper('security');  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('tendangnhap', 'Username:', 'required|trim|xss_clean|callback_validation');  
        $this->form_validation->set_rules('matkhau', 'Password:', 'required|trim');  
  
        if ($this->form_validation->run())   
        {  
            $data = array(  
                'tendangnhap' => $this->input->post('tendangnhap'),  
                'info' => 'a',
                
                );    
                    $this->session->set_userdata($data);  
                redirect('Main/data');  
        }   
        else {  
            $this->load->view('login_view');  
        }  
    }  
  
    public function signin_validation()  
    {  
        $this->load->library('form_validation');  
  
        $this->form_validation->set_rules('tendangnhap', 'Username', 'trim|xss_clean|is_unique[signup.username]');  
  
        $this->form_validation->set_rules('matkhau', 'Password', 'required|trim');  
  
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');  
  
        $this->form_validation->set_message('is_unique', 'username already exists');  
  
    if ($this->form_validation->run())  
        {  
            echo "Welcome, you are logged in.";  
         }   
            else {  
              
            $this->load->view('signin');  
        }  
    }  
    // xử lý hợp thức
    public function validation()  
    {  
        $this->load->model('login_model');  
  
        if ($this->login_model->log_in_correctly())  
        {  
  
            return true;  
        } else {  
            $this->form_validation->set_message('validation', 'Incorrect username/password.');  
            return false;  
        }  
    }  
    // đăng xuất
    public function logout()  
    {  
        $this->session->sess_destroy();  
        redirect('Main/login');  
    }  
}  
?>  