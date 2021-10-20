<?php
    session_start();

    require_once("./assets/controller/dbcontroller.php");
    require_once("./assets/controller/control.php");
    require_once("./config/config.php");
    $db_handle = new DBController();
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
  
?>
<?php
    $sql_pro1 = "SELECT COUNT(*) AS dem FROM cart ";
    $query_pro1 = mysqli_query($mysqli , $sql_pro1);

    
    while($row_pro1 = mysqli_fetch_array($query_pro1)){
      
       $id= $row_pro1['dem'];
  
    } 
    
    
     if(isset($_POST['add'])){
        $id_cart = $id+1;
        $conn->query("INSERT INTO `cart`(`id_cart`) VALUES ('$id_cart')");
        $total_quantity = 0;
        $total_price = 0;

        
       
        foreach ($_SESSION["cart_item"] as $item){
            $sl = $item["quantity"];
            $id_pro = $item["name1"];
            $total_quantity +=  $item["quantity"];
            $total_price += ($item["price"]*$item["quantity"]);
          /*   if(empty($ho_ten) && empty($so_dt) && empty($dia_chi) && empty($email)){

                phpAlert(   "THÔNG BÁO!\\n\\Hãy điền đầy đủ thông tin vào"   );
                break;
            }
            else{ */
                $conn->query("INSERT INTO `cart_item`( `id_cart`, `id_pro`, `quantity`) VALUES ('$id_cart','$id_pro','$sl')");
           /*  } */
          
        }
    
        
        $total_money = $total_price;
        $ho_ten = $_POST['ho_ten'];
        $so_dt = $_POST['so_dt'];
        $dia_chi = $_POST['dia_chi'];
        $email = $_POST['email'];
        $idca = $id_cart;
         if(empty($ho_ten) && empty($so_dt) && empty($dia_chi) && empty($email)){

            phpAlert(   "THÔNG BÁO!\\n\\Hãy điền đầy đủ thông tin vào"   );
        }
        else{ 
            $conn->query("INSERT INTO `orders`( `total_money`, `ho_ten`, `so_dt`,`dia_chi`,`email`, `id_cart`) VALUES ('$total_money','$ho_ten','$so_dt','$dia_chi','$email','$idca')");
            
            phpAlert(   "THÔNG BÁO!\\n\\Xác nhận đơn hàng thành công. Vui lòng chờ trong ít phút để Beats xác nhận đơn hàng của bạn"   );
            session_destroy();
            

        
        } 
        if(empty($ho_ten) && empty($so_dt) && empty($dia_chi) && empty($email)){
        }
        else{ 
        ?>
         
       
            <meta http-equiv="refresh" content="0.7;url=trangchu.php">
        
       <?php } 
         
           
       
        
        
        ?>
        
        <?php
     }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="./assets/css/thanhtoan.css">
     
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>

    <div class="container">
        <div class="ctleft">
           
            <a href="./trangchu.php"><img class="anhbt" src="https://bizweb.dktcdn.net/100/208/437/themes/765059/assets/logo.png?1591937897729" alt=""></a>
            <div class="main">
                <div class="mainl">
                    <h3>Thông tin nhận hàng</h3> 
                    <form action="" method="POST"> <!-- ########################## -->
                    <input name="email" id="email" type="email" class="email" data-bind="email" placeholder="Email">
                    <input name="ho_ten" type="text" class="text" placeholder="Họ và tên">
                    <input name="so_dt" type="text" class="text" placeholder="Số điện thoại">
                    <input name="dia_chi" type="text" class="text" placeholder="Địa chỉ">
                    <h5>Ghi chú :</h5>
                    <textarea  name="" id="" cols="41" rows="6" ></textarea>

                   
                </div>
                <div class="mainr" style="width: 43%;">
                    <h3>Vận chuyển</h3> 
                    <div class="arlet">
                        <span>Vui lòng nhập thông tin thanh toán</span>
                    </div>
                    <h3>Thanh toán</h3>

    
                </div>
            </div>
            
        </div>
        <div class="ctright" style="">
            <h3>Đơn hàng</h3>
            <table class="tbl-cart">

	
<?php		

    if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
    }
    foreach ($_SESSION["cart_item"] as $item){
        //tổng tiền bằng giá nhân số lượng
        $item_price = $item["quantity"]*$item["price"];
       
       
		?>
				<tr>
				<td><div class="anh">
                    <img src="<?php echo $item['image']; ?>" class="image" />

                    

                    <span class="quantity">
                    <?php echo $item["quantity"]; ?>
                    </span>
                   
                    </div></td>

				<td><?php echo $item["name"]; ?></td>
			
                
			
				<td  style="text-align:right; width: 300px;"><?php echo  number_format($item_price,2)."₫"; ?></td>
			
				</tr>
				<?php
                	
                    $total_quantity +=  $item["quantity"];
                    $total_price += ($item["price"]*$item["quantity"]);
			
		}
		?>

<tr>

<td style="font-size: 20px;" ><strong>Tổng tiền: </strong></td>
<td >Số lượng : <?php echo $total_quantity; ?></td>
<td ><strong><?php echo number_format($total_price, 2)."₫ "; ?></strong></td>


</tr>

<tr>
    <td>
    <a  class="btn btn-danger"  id="btnEmpty" href="./giohang.php"style="margin-right: 20px;">Quay lại giỏ hàng</a>

    </td>
    <td>
        <a  class="btn btn-danger"  id="btnEmpty" href="./index.php?quanly=danhmucsanphamall"style="margin-right: 20px;">TIếp tục mua sắm</a>



    </td>
    <td  style="text-align:right; width: 300px;">

    <button type="submit" name="add" class="btn btn-primary"  >Thanh toán</button>
    </form>
    </td>
</tr>
</table>
          
        </div>
    </div>
   
  
</body>
</html>
