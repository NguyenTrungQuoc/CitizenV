<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danh sách công dân</title>
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
                                <a href="http://localhost/citizenV/index.php/A2_controller/home">
                                    <p class="header_icon"><i class="fas fa-house-damage"></i></p>
                                    Trang chủ
                                </a>
                            </li>
                            <li>
                                <a href="http://localhost/citizenV/index.php/A2_controller/listCode">
                                    <p class="header_icon"><i class="fas fa-external-link-alt"></i></p>
                                    Tra cứu mã
                                </a>
                            </li>
                            <li>
                                <a href="http://localhost/citizenV/index.php/A2_controller/account">
                                    <p class="header_icon"><i class="fas fa-user-friends"></i></p>
                                    Cấp tài khoản
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
                                <a class="active" href="http://localhost/citizenV/index.php/A2_controller/list">
                                    <i class="fab fa-algolia"></i>
                                    Danh sách công dân</li>
                                </a>
                            </li>
                            <li class="content_menu-option">
                                <a  href="http://localhost/citizenV/index.php/A2_controller/search">
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
                                <a href="http://localhost/citizenV/index.php/A2_controller/analysis">
                                    <i class="fas fa-calendar-alt"></i>
                                    Phân tích số liệu </li>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="content_board">
                        <div class="content_board-input">
                            <input type="text" name="" id="">
                            <i class="fas fa-forward"></i>
                            <input type="text" name="" id="">
                        </div>
                        <table style="width:100%">
                            <tr>
                                <th class="content_cccd">
                                    Mã CCCD
                                </th>
                                <th class="content_name">
                                    Tên
                                </th>
                                <th class="content_date">
                                    Ngày tháng năm sinh
                                </th>
                                <th class="content_sex">
                                    Sex
                                </th>
                                <th class="content_hometown">
                                    Quê quán
                                </th>
                                <th class="content_address">
                                    ĐCTC
                                </th> 
                                <th class="content_check">Check</th>
                            </tr>

                            <?php foreach ($mangketqua as $value): ?>
                                
                            

                            <tr>
                                <td><?= $value['ID'] ?></td>
                                <td><?= $value['ten'] ?></td>
                                <td><?= $value['ngaysinh'] ?></td>
                                <td><?= $value['gioitinh'] ?></td>
                                <td><?= $value['quequan'] ?></td>
                                <td><?= $value['diachi'] ?></td>
                                <td><i class="fas fa-trash-alt"></i></td>
                            </tr>


                            <?php endforeach ?>

                        </table>
                        <div class="content_next">
                            <a href=""><div class="content_next-list"><i class="fas fa-arrow-alt-circle-left"></i></div></a>
                            <a href=""><div class="active content_next-list">1</div></a>
                            <a href=""><div class="content_next-list">2</div></a>
                            <a href=""><div class="content_next-list">3</div></a>
                            <a href=""><div class="content_next-list">...</div></a>
                            <a href=""><div class="content_next-list">12</div></a>
                            <a href=""><div class="content_next-list"><i class="fas fa-arrow-alt-circle-right"></i></div></a>
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