<?php

$sql_pro2 = "SELECT id_pro, COUNT(id_pro) AS 'pro'   FROM cart_item   GROUP BY id_pro ORDER BY pro DESC LIMIT 4";
$query_pro2 = mysqli_query($mysqli , $sql_pro2);
while($row_pro2 = mysqli_fetch_array($query_pro2)){
    $bien = $row_pro2['id_pro'];
   
    $sql_pro1 = "SELECT * FROM product WHERE  product.id_product=$bien";

    $query_pro1 = mysqli_query($mysqli , $sql_pro1);
    ?>
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

                        <a  onclick="popupOpen()" href="" >MUA NGAY</a>
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
                        <a onclick="popupOpen()" href="index.php?quanly=sanpham&id=<?php echo $row_pro1['id_product'] ?>">XEM NHANH</a>

                        </div>
                    </div>
                  
                    <h3><?php echo number_format($row_pro1['price'],0,',','.' )?>₫</h3>
                    </div>
                    
                <?php } ?>





<?php } ?>









              