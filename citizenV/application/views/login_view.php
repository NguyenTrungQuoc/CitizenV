<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/citizenV/fonts/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="http://localhost/citizenV/css/base.css">
    <link rel="stylesheet" href="http://localhost/citizenV/css/B2.css">
    <link rel="stylesheet" href="http://localhost/citizenV/css/B01.css">
    <link rel="stylesheet" href="http://localhost/citizenV/css/index.css">
    <link rel="stylesheet" href="http://localhost/citizenV/css/account.css">
    <title>Đăng nhập</title>
<style>
  *{
    box-sizing: border-box;
    padding: 0;
    margin:0;  
  }
    .login_content{
        display:flex;
        justify-content: center;
        align-items: center;
        background-color: #C0C0C0;
        height: 100vh;

    }
    .login_center{
      background-color:#fff;
      width:50%;
      border-radius:20px;
      overflow: hidden;
    }
    .login_center h1{
      background-color:#f95252;
      padding:20px 30px;
      color:white;
      text-align:center;
      display: flex;
      align-items:center;
      justify-content:center;
    }

    .login_center i{
      font-size:25px;
      margin-right:2px;
      
    }
    input{
      padding:10px;
      width:100%;
    }
    input:focus{
      border-color:#2da5f5;
    }
    input[type="submit"]{
      border:none;
      outline:none;
      background-color:#2da5f5;
      color:white;
      font-size:20px;
      padding:10px 0;
    }
    .login_contact p:nth-child(1){   
        padding:30px 30px 10px 30px;
        font-size:20px;
    }
    .login_contact p:nth-child(2){
      padding:20px 30px 30px 30px;
        font-size:20px;
    }
</style>
</head>  
<body>
    <div class="app">
        <div class="grid">
                <div class="banner">
                    <img src="http://localhost/citizenV/img/logoVN.png" alt="">
                    <div class="banner_list">
                        <h1>VIỆT NAM</h1>
                        <h2>CỔNG THÔNG TIN ĐIỆN TỬ</h2>
                        <p>Population</p>
                    </div>
                </div>

                <input type="checkbox" id="check" class="checked_input" hidden>
                    <div class="header_outputrepon">
                            <label for="check"><i class="fas fa-times"></i></label>
                            <div class="header_content">
                                <h1>Population</h1>
                                <p>Cổng thông tin điện tử</p>
                            </div>
                            <img src="http://localhost/citizenV/img/Output.png" alt="">
                    </div>
                        <div class="login_content">
                                <div class="login_center">
                                  <h1>
                                  <i class="fas fa-user-lock"></i>
                                  Đăng nhập
                                  </h1>  
                                  <div class="login_contact">
                                      <?php  
                                    
                                      echo form_open('Main/login_action');  
                                    
                                      echo validation_errors();  

                                      echo "<p>Tên đăng nhập: ";  
                                      echo form_input('tendangnhap', $this->input->post('tendangnhap'));  
                               
                                      echo "</p>";  
                                    
                                      echo "<p>Mật khẩu: ";  
                                      echo form_password('matkhau',$this->input->post('matkhau'));  
                                      echo "</p>";  
                                    
                                      echo "</p>";  
                                      echo form_submit('login_submit', 'Login');  
                                      echo "</p>";  
                                    
                                      echo form_close();  
                                    
                                      ?>  
                                </div>
                                </div>
                    </div>
                                       
                <footer>
                    <div class="footer_list">
                        <div class="footer_contact">
                            <h3>CONTACT US</h3>
                            <div class="footer_contact-list">
                                <i class="fas fa-home"></i>
                                <p>8888 South Avenue Street, New York</p>
                            </div>
                            <div class="footer_contact-list">
                                <i class="fas fa-phone"></i>
                                <p>(12)34567896</p>
                            </div>
                            <div class="footer_contact-list">
                                <i class="fas fa-envelope"></i>
                                <p>contact@simen.com</p>
                            </div>
                        </div>
                        <div class="footer_imformation">
                            <h3>IMFORMATION</h3>
                            <p>My Account</p>
                            <p>Wishlist</p>
                            <p>Order History</p>
                            <p>Specials</p>
                            <p>Gift Vouchers</p>
                        </div>
                        <div class="footer_newsletter">
                            <h3>NEWSLETTER</h3>
                            <p class="footer_newsletter-input">Register your email for news</p>
                            <input class="footer_newsletter-input" type="text" name="" id="" placeholder="Your email here">
                            <button class="footer_newsletter-input">SUBSCRIBE</button>
                        </div>
                    </div>
                </footer>
         </div>
    </div>    
</body>  
</html>  
