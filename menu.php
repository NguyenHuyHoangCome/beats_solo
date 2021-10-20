<?php
    $sql_danhmuc = "SELECT * FROM category";
    $query_danhmuc = mysqli_query($mysqli , $sql_danhmuc);

?>
<div class="menutren">
        <ul>
            <li>
                <div class="_1item">
                    <a href="./trangchu.php" style="">
                        TRANG CHỦ
                    </a>
                </div>

            </li>
            <li>
                
                <div class="_1item">
                    <a href="index.php?quanly=danhmucsanphamall" class="layer1" style="">
                        SẢN PHẨM <i class="fas fa-chevron-down"></i>
                    </a>
                    
                    <div class="layer2">
                        <ul>
                            <li>
                                <a class="iconcona" href="index.php?quanly=headphone&id=1">HEADPHONES
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </a>
                                
                                <div class="layercon">
                                    <ul>
                                    <li>
                                        <a href="index.php?quanly=head-phone-cate&id1=1">BEATS SOLO</a>
                                    </li>
                                    <li>
                                        <a href="index.php?quanly=head-phone-cate&id1=2">BEATS STUDIO</a>
                                    </li>
                                    <li>
                                        <a href="index.php?quanly=head-phone-cate&id1=3">BEATS PRO</a>
                                    </li>
                                    <li>
                                        <a href="index.php?quanly=head-phone-cate&id1=4">BEATS EP</a>
                                    </li>
                                    </ul>  
                                </div>
                            </li>
                            <li>
                                <a class="iconcona" href="index.php?quanly=earphone&id=2">EARPHONES
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </a>
                                <div class="layercon">
                                    <ul>
                                        <li>
                                            <a href="index.php?quanly=earphone-cate&id1=5">URBEATS</a>
                                        </li>
                                        <li>
                                            <a href="index.php?quanly=earphone-cate&id1=6">POWERBEATS</a>
                                        </li>
                                        <li>
                                            <a href="index.php?quanly=earphone-cate&id1=7">BEATS X</a>
                                        </li>
                                    </ul>  
                                </div>
                            </li>
                            <li>
                                <a href="index.php?quanly=speaker&id=3">BEATS SPEAKERS</a>
                            </li>
                            <li>
                                <a href="index.php?quanly=phukien&id=6">PHỤ KIỆN BEATS</a>
                            </li>
                            <li>
                                <a href="./suachua.php">SỬA CHỮA TAI NGHE BEATS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
           




          
          
           



            
             <li>
                <div class="_1item">
                <a href="index.php?quanly=headphone&id=1 " class="layer1">
                        HEADPHONES <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="layer2">
                        <ul>
                            <li>
                                <a href="index.php?quanly=head-phone-cate&id1=1">BEATS SOLO</a>
                            </li>
                            <li>
                                <a href="index.php?quanly=head-phone-cate&id1=2">BEATS STUDIO</a>
                            </li>
                            <li>
                                <a href="index.php?quanly=head-phone-cate&id1=3">BEATS PRO</a>
                            </li>
                            <li>
                                <a href="index.php?quanly=head-phone-cate&id1=4">BEATS EP</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="_1item">
                    <a href="index.php?quanly=earphone&id=2" class="layer1 ">
                        EARPHONES <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="layer2">
                        <ul>
                            <li>
                                <a href="index.php?quanly=earphone-cate&id1=5">URBEATS</a>
                            </li>
                            <li>
                                <a href="index.php?quanly=earphone-cate&id1=6">POWERBEATS</a>
                            </li>
                            <li>
                                <a href="index.php?quanly=earphone-cate&id1=7">BEATS X</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="_1item">
                    <a href="index.php?quanly=speaker&id=3" class="layer1">
                        SPEAKERS
                    </a>
                </div>

            </li> <li>
                <div class="_1item">
                    <a href="index.php?quanly=phukien&id=6" class="layer1">
                        PHỤ KIỆN
                    </a>
                </div>

            </li> 
            <!-- <li>
                <div class="_1item">
                    <a href="./main/pagetintuc.html" class="layer1 ">
                        TIN TỨC <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="layer2">
                        <ul>
                            <li>
                                <a href="">TIN TỨC MỚI</a>
                            </li>
                            <li>
                                <a href="">MỞ HỘP VÀ ĐÁNH GIÁ
                                    <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">KIẾN THỨC</a>
                            </li>
                            <li>
                                <a href="">SỰ KIỆN & EVENT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li> -->
            <li>
                <div class="_1item">
                    <a href="./suachua.php" class="layer1">
                        SỬA CHỮA
                    </a>
                </div>

            </li>
            <li>
                <div class="_1item">
                    <a href="./lienhe.php" class="layer1">
                        LIÊN HỆ
                    </a>
                </div>

            </li>
        </ul>
    </div>
   