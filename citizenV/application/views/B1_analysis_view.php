<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phân tích</title>
    <link rel="stylesheet" href="http://localhost/citizenV/css/B2.css">
    <link rel="stylesheet" href="http://localhost/citizenV/fonts/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="stylesheet" href="http://localhost/citizenV/css/base.css">
    <link rel="stylesheet" href="http://localhost/citizenV/css/B01.css">
    <link rel="stylesheet" href="http://localhost/citizenV/css/index.css">
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
                <div class="content">
                    <div class="content_list">
                        <ul class="content_menu">
                            <li class="content_menu-option">
                                <a  href="http://localhost/citizenV/index.php/B1_controller/list">
                                    <i class="fab fa-algolia"></i>
                                    Danh sách công dân</li>
                                </a>
                            </li>

                            <li class="content_menu-option">
                                <a  href="http://localhost/citizenV/index.php/B1_controller/search">
                                    <i class="fab fa-algolia"></i>
                                    Tìm kiếm công dân</li>
                                </a>
                            </li>
                            
                            <li class="content_menu-option">
                                <a href="">
                                    <i class="fas fa-recycle"></i>
                                    Tiến độ nhập liệu</li>
                                </a>
                            </li>
                            <li class="content_menu-option">
                                <a class="active" href="http://localhost/citizenV/index.php/B1_controller/analysis">
                                    <i class="fas fa-calendar-alt"></i>
                                    Phân tích số liệu </li>
                                </a>
                            </li>
                            <li class="content_menu-option">
                                <a href="http://localhost/citizenV/index.php/B1_controller/complete">
                                    <i class="fas fa-calendar-check"></i>
                                    Báo cáo hoàn thành</li>
                                </a>
                            </li>

                            <li class="content_menu-option">
                                <a href="http://localhost/citizenV/index.php/B1_controller/input">
                                    <i class="fas fa-calendar-check"></i>
                                    Nhập dữ liệu dân số</li>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content_board">
                       <?php echo 'Tổng số công dân quản lý : ' . $quantity; ?>
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