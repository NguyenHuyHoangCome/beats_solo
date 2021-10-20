

<HTML>
<HEAD>

<link href="style.css" type="text/css" rel="stylesheet" />
<meta charset="UTF-8">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beats Solo</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="./assets/css/pagesuachua.css">

    <link rel="stylesheet" href="./assets/css/menu.css">
    <link rel="stylesheet" href="./assets/css/pagelienhe.css">
    <link rel="stylesheet" href="./assets/css/duoi.css">
    <link rel="stylesheet" href="./assets/css/giua.css">  
    <link rel="stylesheet" href="./assets/css/dau.css">
    <link rel="stylesheet" href="./assets/css/itemconphaibe.css">
    <link rel="stylesheet" href="./assets/css/menuanhnenpagekhac.css">
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
 <div class="anhnenpagekhac">
            
            <a href="">Trang chủ</a><span >Liên hệ</span>
        </div>
     
        <div class="divlienheto">
            <div class="lienhetrai">
                <h2 >hacker.soxxam.xyz</h2>
                <div class="lienhetraicon">
                    <p class="_1">Địa chỉ: 98.F phố Nguyễn Thái Học, Ba Đình, Hà Nội 37 ngõ 81 Lương Định Của, Đống Đa, Hà Nội. 12 ngõ 860 phố Minh Khai, Hai Bà Trưng, Hà Nội.</p>
                    
                    <p class="_2">
                        Hotline: 0364222887</p>
                        
                    <p class="_3">Email: tutran0904@gmail.com</p>
                </div>
                <br>
                <h3>Liên hệ với chúng tôi</h3>
                <form action="" method="get">
                    <input type="text" name="hoten" placeholder="Họ và tên">
                    <input type="text" name="email" placeholder="Email">
                    <input type="text" name="sodt" placeholder="Số điện thoại">
                    <textarea name="noidung" id="noidung" cols="61" rows="5" placeholder="Nội dung"></textarea>
                    
                    <input type="submit" value="Gửi liên hệ của bạn" class="_1">
                </form>
            </div>
            <div class="lienhephai">
                <img src="./assets/picture/beats-solo/anhdep.jpg" alt="">
            </div>
        </div>
        
<?php
     
  
          include("./footer.php");
    ?>
</BODY>
</HTML>