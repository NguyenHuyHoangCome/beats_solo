

<HTML>
<HEAD>

<link href="style.css" type="text/css" rel="stylesheet" />
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beats Solo</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="./assets/css/menu.css">
    <link rel="stylesheet" href="./assets/css/duoi.css">
    <link rel="stylesheet" href="./assets/css/giua.css">  
    <link rel="stylesheet" href="./assets/css/dau.css">
    <link rel="stylesheet" href="./assets/css/itemconphaibe.css">
    <link rel="stylesheet" href="./assets/css/banner.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <script src="./assets/js/dau.js"></script>
    <link rel="stylesheet" href="./assets/css/i.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 

</HEAD>
<BODY>
    <?php
          include("./config/config.php");
          include("./header.php");
          include("./menu.php");
  
     
    ?>
 <div class="container" style="max-width: 100%;">
        <div class="box">
          <img src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/slider_1.png?1591937897729./f2.jpg">
         
        </div>
        <div class="box">
          <img src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/slider_2.png?1591937897729">
          
        </div>
        <div class="box">
          <img src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/slider_3.png?1591937897729">
          
        </div>
      </div>
      
        <!-- ket thuc menu -->
       <!-- duoi nay moi la trang giua -->
  <!--   phan giua  -->
    <div class="giua">
        <div class="anhsp">
            <div class="hi">
                <div class="trai">

                    <h4>SẢN PHẨM NỔI BẬT</h4>
                </div>
                <div class="phai" >

                    <?php
                        include("./main/sp_noi_bat.php");
                    ?>
                   
                   

                    
                </div>
            </div>
      
         </div>
        <div class="camket" style="margin-top: 20px;">
            <div class="boicon">
                <div class="icon1">
                    <div class="img">
                        <img src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/policy_icon_1.png?1591937897729" alt="">
                  
                    </div>
                    <div class="tex">
                        <h5 class="h5">CAM KẾT CHÍNH HÃNG</h5>
                        <P>Bồi thường 10 triệu đồng nếu phát hiện hàng giả</P>
                  
                    </div>
                </div>
                <div class="icon1">
                    <div class="img">
                        <img src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/policy_icon_2.png?1591937897729" alt="">
                  
                    </div>
                    <div class="tex">
                        <h5 class="h5">GIAO HÀNG COD TOÀN QUỐC</h5>
                        <P>Giao hàng toàn quốc </P>
                  
                    </div>
    
                </div>
                <div class="icon1">
                    <div class="img">
                        <img src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/policy_icon_3.png?1591937897729" alt="">
                  
                    </div>
                    <div class="tex">
                        <h5 class="h5">HỖ TRỢ TRẢ GÓP</h5>
                        <P>Hỗ trợ trả góp với lãi suất 0%</P>
                  
                    </div>
                    
                </div>
                <div class="icon1">
                    <div class="img">
                        <img src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/policy_icon_4.png?1591937897729" alt="">
                  
                    </div>
                    <div class="tex">
                        <h5 class="h5">DỊCH VỤ SỬA CHỮA</h5>
                        <P>Nhân sửa chữa các loại tai nghe</P>
                  
                    </div>
    
                </div>
            </div>
       
        </div>
        <div class="dieukhoan">
            <div class="trungtam">
                <div class="trai">
                    <div class="textren">
                        <div class="d1">
                          
                            <a href="./assets/html/vechungtoi.html" target="frame">Về chúng tôi</a>
                        </div>
                        <div class="d1">
                            <a href="./assets/html/chinhsach.html" target="frame">Chính sách</a>
                        </div>
                        <div class="d1">
                            <a href="./assets/html/dieukhoan.html" target="frame">Điều khoản</a>
                        </div>
                    </div>
                    <div class="texduoi">
                        <iframe class="k" src="./assets/html//vechungtoi.html" frameborder="" name="frame">

                        </iframe>
                    </div>
                   

                </div>
                <div class="phai">
                    <img src="https://bizweb.dktcdn.net/thumb/grande/100/208/437/themes/765059/assets/about.png?1591937897729" alt="">
 
                </div>

            </div>
        </div>
        <div class="dichvu">
            <div class="dichvucon">
                <div class="tieude">
                    <h5 class="h5">SẢN PHẨM & DỊCH VỤ</h5>
                    <p class="h6">Hàng Thật - Giá Thật - Tư Vấn Thật</p>
                </div>
                <div class="thantieude">
                    <div class="than1">
                        <div class="img">
                            <img src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/icon-service-1.png?1591937897729" alt="">
                      
                        </div>
                        <div class="tex">
                            <h5 class="h5">Tai nghe</h5>
                       
                        </div>
                    </div>
                    <div class="than1">
                        <div class="img">
                            <img src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/icon-service-2.png?1591937897729" alt="">
                      
                        </div>
                        <div class="tex">
                            <h5 class="h5">Loa</h5>
                            
                      
                        </div>
                    </div>
                    <div class="than1">
                        <div class="img">
                            <img src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/icon-service-3.png?1591937897729" alt="">
                      
                        </div>
                        <div class="tex">
                            <h5 class="h5">Phụ kiện</h5>
                            
                      
                        </div>
                    </div>
                    <div class="than1">
                        <div class="img">
                            <img src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/icon-service-4.png?1591937897729" alt="">
                      
                        </div>
                        <div class="tex">
                            <h5 class="h5">Dịch vụ sửa chữa</h5>
                            
                      
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="tintuc">
            <div class="tieude">
                <a href="">TIN TỨC - BLOG</a>

            </div>
            <div class="thongtin">
                <div class="trai">
                    <div class="anh">
                        <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/208/437/articles/201681392026722.jpg?v=1494928376127" alt="">
                    </div>
                    <div class="ten">
                        <a href="">Beats ra mắt phiên bản Studio Wireless Unity Edition</a>
                    </div>
                    <div class="thongtin1"> 
                        <i class="fa fa-calendar iconthongtin1" aria-hidden="true">  </i><p class="pthongtin1">09/05/2021</p>
                        <i class="fa fa-user iconthongtin1" aria-hidden="true"></i><p class="pthongtin1">Đăng bởi: Huy Hoàng</p>
                        
                    </div>
                    <div class="t">
                        <p>Vào ngày 4/8, Beats đã ra mắt phiên bản giới hạn của chiếc tai nghe Studio Wireless với tên gọi Unity Edition. Có 10 phiên bản tương ứng với các quốc gia như: Các nước Châu Mỹ như: Mỹ, Canada,...</p>
                    </div>
                </div>
                <div class="phai">
                    <div class="trangbao">
                        <div class="anh">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/208/437/articles/201681392222841.jpg?v=1494928377273" alt="">
                        </div>

                        <div class="tex">
                            <div class="ten">
                                <a href="">Tai nghe Bluetooth tăng trưởng mạnh nửa đầu năm 2016</a>
                            </div>
                            <div class="thongtin1"> 
                                <i class="fa fa-calendar iconthongtin1" aria-hidden="true">  </i><p class="pthongtin1">09/05/2021</p>
                                <i class="fa fa-user iconthongtin1" aria-hidden="true"></i><p class="pthongtin1">Đăng bởi: Huy Hoàng</p>
                                
                            </div>
                            <div class="t">
                                <p>Trung tâm nghiên cứu và phân tích thị trường của Mỹ NPD cho biết : trong nửa đầu năm 2016, sản lượng tai nghe Bluetooth bán ra đã...</p>
                            </div>

                          
                        </div>
                    </div>
                    <div class="trangbao">
                        <div class="anh">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/208/437/articles/201631510641330.jpg?v=1494928399560" alt="">
                        </div>

                        <div class="tex">
                            <div class="ten">
                                <a href="">[Hot] Pebble DAC-AMP dành cho thiết bị IOS giải mã 24bit-192khz giá hạt rẻ</a>
                            </div>
                            <div class="thongtin1"> 
                                <i class="fa fa-calendar iconthongtin1" aria-hidden="true">  </i><p class="pthongtin1">09/05/2021</p>
                                <i class="fa fa-user iconthongtin1" aria-hidden="true"></i><p class="pthongtin1">Đăng bởi: Trần Tú</p>
                                
                            </div>
                            <div class="t">
                                <p>Pebble ở đây là thiết bị DAC AMP hỗ trợ giải mã âm thanh độ phân giải cao 24bit/192 kHz dành cho các thiết...</p>
                            </div>

                          
                        </div>
                    </div>
                    <div class="trangbao">
                        <div class="anh">
                            <img src="https://bizweb.dktcdn.net/thumb/large/100/208/437/articles/20158617241766.jpg?v=1494928302177" alt="">
                        </div>

                        <div class="tex">
                            <div class="ten">
                                <a href="">Ưu điểm của tai nghe Beats</a>
                            </div>
                            <div class="thongtin1"> 
                                <i class="fa fa-calendar iconthongtin1" aria-hidden="true">  </i><p class="pthongtin1">09/05/2021</p>
                                <i class="fa fa-user iconthongtin1" aria-hidden="true"></i><p class="pthongtin1">Đăng bởi: Trần Tú</p>
                                
                            </div>
                            <div class="t">
                                <p>Bạn thắc mắc vì sao mình nên sở hữu một bộ tai nghe Beats? Tai nghe Beats có những ưu điểm gì mà những tai nghe khác không có ?...</p>
                            </div>

                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



<?php
     
  
          include("./footer.php");
    ?>
</BODY>
</HTML>