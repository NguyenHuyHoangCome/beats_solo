
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
                   <div class="sanphamtrai">
               <div class="traibe">
                   <img src="<?=$row_pro1['picture'] ?>" alt="">
               </div>
               <div class="phaibe">
                   <a href="index.php?quanly=sanpham&id=<?php echo $row_pro1['id_product'] ?>"><?=$row_pro1['title'] ?></a>
                   <h3><?php echo number_format($row_pro1['price'],0,',','.' )?>₫</h3>
               </div>
                </div>
                    
                <?php } ?>





<?php } ?>









   
      
