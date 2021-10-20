
<?php
    $sql_pro1 = "SELECT * FROM category,product WHERE product.id_cate =category.id_category AND product.id_product=' $_GET[id]'";
    $query_pro1 = mysqli_query($mysqli , $sql_pro1);
   
?>
<div class="phai">
        <?php
        while($row_pro1 = mysqli_fetch_array($query_pro1)){
        ?>
             <form method="post" action="giohang.php?action=add&code=<?php echo $row_pro1['code'] ?>">
                <div class="allsp1">
                <h2 style="margin-top: 15px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  margin-bottom: 20px; ">CHI TIẾT SẢN PHẨM</h2>
                <div class="allsp">

                   
                    <div class="allspleft">
                    <img src="<?=$row_pro1['picture'] ?>" alt="" class="">
                    </div>
                    <div class="allspright">
                        <h2><?=$row_pro1['title'] ?></h2>
                        <h3><?php echo number_format($row_pro1['price'],0,',','.' )?>₫</h3>
                        <p>✔ Tai nghe Powerbeats Pro là mẫu tai nghe không dây hoàn toàn được nâng cấp từ sản phẩm Powerbeats 3 Wireless</p><br>
                        
                        <h4>Số lượng </h4>

                        <input type="text" class="product-quantity" name="quantity" value="1" size="2" style="background-color: #fff;
                         height: 50px;
                        width: 70px;
                        margin-top: 20px;
                        margin-bottom: 20px;
                        "/>
                       <br>
                        
                     
                        <input type="submit" value="MUA NGAY" class="muangaysanpham"/>
                       
                    
                    
                    </div>
                 
                   
                </div>
          
            </div>
            </form>
            <?php } ?>
</div>







     

