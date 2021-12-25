<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nhập dữ liệu dân cư</title>
    <link rel="stylesheet" href="http://localhost/citizenV/css/B2.css">
    <link rel="stylesheet" href="http://localhost/citizenV/fonts/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="http://localhost/citizenV/css/base.css">
    <link rel="stylesheet" href="http://localhost/citizenV/css/index.css">
</head>
<body>
   
    <div class="app">
        <div class="grid">
                <div class="banner">
                    <img src="http://localhost/citizenV
                    /img/logoVN.png" alt="">
                    <div class="banner_list">
                        <h1>VIỆT NAM</h1>
                        <h2>CỔNG THÔNG TIN ĐIỆN TỬ</h2>
                        <p>Population</p>
                    </div>
                </div>
                <div class="header">
                    <div class="col">
                        <ul class="header_list">
                            <li>
                                <a href="http://localhost/citizenV/index.php/B1_controller/home">
                                    <p class="header_icon"><i class="fas fa-house-damage"></i></p>
                                    Trang chủ
                                </a>
                            </li>
                            
                        </ul>
                        <div class="log-out"> 
                            <label class="clickbuy" for="check">
                                <p class="header_icon"><i class="far fa-user"></i></p>
                                Hoàng
                            </label> 
                            <label class="log-out-pc" for="">
                                <p class="header_icon"><i class="far fa-user"></i></p>
                                 <?php echo $this->session->userdata('tendangnhap').'||'.$this->session->userdata('info');?>
                                <a href="http://localhost/citizenV/index.php/Main/logout" class="header_output">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Đăng xuất
                                </a>
                            </label>    
                            
                        </div>
                        
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
                            <a class="header_output-click" href="http://localhost/citizenV/index.php/Main/logout">
                                Đăng xuất
                            </a>
                </div>





                <form method="post" enctype="multidata/form-data" action="http://localhost/citizenV/index.php/B1_controller/addCitizen">
                    <div class="contaner">
                        <h1>Điều tra dân số</h1>
                        <div class="contaner_listform">
                            <div class="contaner_name">
                                <label for="">Tên:</label>
                                <input name="ten" id="ten" type="text">    
                            </div>
                            
                            <div class="contaner_old">
                                <label for="">Giới tính:</label>
                                <input name="gioitinh" id="gioitinh" type="text">
                            </div>
                            <div class="contaner_cccd">
                                <label for="">Mã CCCD cấp:</label>
                                <input name="ID" id="ID" type="text">    
                            </div>
                            <form class="contaner_date" action="/action_page.php">
                                <label for="date">Ngày sinh:</label>
                                <input type="date" id="ngaysinh" name="ngaysinh">
                              </form>
                              <div class="contaner_hometown">
                                <label for="">Quê quán:</label>
                                <input name="quequan" id="quequan" type="text">  
                              </div>
                              
                              <div class="contaner_address">
                                <label for="">Tôn giáo:</label>
                                <input name="tongiao" id="tongiao" type="text">  
                              </div>
                              <div class="contaner_address">
                                <label for="">Trình độ văn hóa:</label>
                                <input name="trinhdovanhoa" id="trinhdovanhoa" type="text">  
                              </div>

                              <div class="contaner_address">
                                <label for="">Nghề nghiệp:</label>
                                <input name="nghenghiep" id="nghenghiep" type="text">  
                              </div>

                              
                              <input type="submit" placeholder="Done" name="Done">
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