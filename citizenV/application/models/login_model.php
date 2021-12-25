<?php  
  
class login_model extends CI_Model {  
       // xử lý dữ liệu đăng nhập
    public function log_in_correctly() {  
        if($this->input->post('tendangnhap')== 'admin' )
        {
            if ( $this->input->post('matkhau')== 'admin')  
            {  
                return true;  
            } 
            else 
            {  
                return false;  
            }  
        }  

        if(strlen($this->input->post('tendangnhap'))== 2 )
        {
            $this->db->where('tendangnhap', $this->input->post('tendangnhap'));  
            $this->db->where('matkhau', $this->input->post('matkhau'));  
            $query = $this->db->get('province');  
  
            if ($query->num_rows() == 1)  
            {  
                return true;  
            } else {  
                return false;  
            }  
        }  


        if(strlen($this->input->post('tendangnhap'))== 4 )
        {
            $this->db->where('tendangnhap', $this->input->post('tendangnhap'));  
            $this->db->where('matkhau', $this->input->post('matkhau'));  
            $query = $this->db->get('district');  
  
            if ($query->num_rows() == 1)  
            {  
                return true;  
            } else {  
                return false;  
            }  
        }  

        if(strlen($this->input->post('tendangnhap'))== 6 )
        {
            $this->db->where('tendangnhap', $this->input->post('tendangnhap'));  
            $this->db->where('matkhau', $this->input->post('matkhau'));  
            $query = $this->db->get('ward');  
  
            if ($query->num_rows() == 1)  
            {  
                return true;  
            }
            else 
            {  
                return false;  
            }  
    
        }  
  }
      
}  
?>  