
<?php
    $sql_pro1 = "SELECT * FROM category1,product WHERE product.id_cate1 =category1.id_category1 AND category1.id_category1=' $_GET[id1]'";
    $query_pro1 = mysqli_query($mysqli , $sql_pro1);


?>

<div class="itemphaibe">

                <?php
                while($row_pro1 = mysqli_fetch_array($query_pro1)){
                ?>
                  <div class="itemconbephai">
                    <div class="divconphai">
                        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro1['id_product'] ?>">
                        <img src="<?=$row_pro1['picture'] ?>" alt="" class="anhconbe">
                        <span><?=$row_pro1['title'] ?></span>
                        <span><?=$row_pro1['description'] ?></span>
                        </a>
                        <form method="post" action="giohang.php?action=add&code=<?php echo $row_pro1['code'] ?>">
                        <div class="chutrenphai" style="height: 34px;">

                        <a  type="submit" onclick="popupOpen()" href="" >MUA NGAY</a>
                        <button type="submit" 
                        
                        style="color: black;
                               
                                width: 100%;
                                font-size: 17px;
                                background-color: black;
                                opacity: 0.0;
                                height : 20px;
                                padding-top: 0px;
                             
                                
                        "></button>
                       
                        
                            <input type="text" class="product-quantity" name="quantity" value="1" size="2" style="background-color: #fff;
                         height: 50px;
                        width: 70px;
                        margin-top: 20px;
                        margin-bottom: 20px;
                        display: none;
                        "/>
                           
                            
                        </div>
                        </form>
                        <div class="chuduoiphai">
                            <a onclick="popupOpen()">XEM NHANH</a>
                        </div>
                    </div>
                  
                   <h3><?=$row_pro1['price'] ?>₫</h3>
                    </div>
                <?php } ?>

               
</div>      