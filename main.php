<div class="contentpagesanpham" style="height: auto;">
        <?php
            include("./left/left.php");
        ?>
        <div class="phai" style="">
            <?php
                if(isset($_GET['quanly'])){
                    $tam = $_GET['quanly'];
                }else{
                    $tam = 'danhmucsanphamall';
                }
              
                if($tam == 'headphone'){
                    include("./main/headphone.php");

                }elseif($tam == 'head-phone-cate'){
                    include("./main/head-phone-cate.php");

                }elseif($tam == 'earphone'){
                    include("./main/earphone.php");


                }elseif($tam == 'earphone-cate'){
                    include("./main/earphone-cate.php");
                    

                }elseif($tam == 'speaker'){
                    include("./main/speaker.php");

                }elseif($tam == 'phukien'){
                    include("./main/phukien.php");

                }elseif($tam == 'suachua'){
                    include("./main/suachua.php");

                }elseif($tam == 'lienhe'){
                    include("./main/lienhe.php");

                }elseif($tam == 'danhmucsanphamall'){
                    include("./main/danhmucall.php");
                    
                
                } elseif($tam == 'sanpham'){
                    include("./main/sanpham.php");
                }
           
                
            ?>
        </div>
    </div>