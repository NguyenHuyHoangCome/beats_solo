<?php
session_start();

require_once("./assets/controller/dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
			$productByCode = $db_handle->runQuery("SELECT * FROM product WHERE code='" . $_GET["code"] . "'");

			$itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["title"],'name1'=>$productByCode[0]["id_product"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["picture"] ));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["code"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["quantity"])) {
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;

	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["code"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản Phẩm</title>
    <link rel="stylesheet" href="./assets/css/menu.css">
    <link rel="stylesheet" href="./assets/css/menu.css">
    <link rel="stylesheet" href="./assets/css/pagesanpham.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/dau.css">
    <link rel="stylesheet" href="./assets/css/menuanhnenpagekhac.css">
    <link rel="stylesheet" href="./assets/css/itemconphaibe.css">
    <link rel="stylesheet" href="./assets/css/allsp.css">
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



    <link rel="stylesheet" href="./assets/css/duoi.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/dau.js"></script>
    <script src="./assets/js/i.js"></script>
    <link rel="stylesheet" href="./assets/css/i.css">
    <link rel="stylesheet" href="./assets/css/cart.css">

</HEAD>
<BODY>
    <?php
          include("./config/config.php");
          include("./header.php");
          include("./menu.php");
  
     
    ?>

<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>

<a id="btnEmpty" href="giohang.php?action=empty" >Xóa giỏ hàng</a>
<a id="btnEmpty" href="./index.php?quanly=danhmucsanphamall"style="margin-right: 20px;">TIếp tục mua sắm</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
?>	
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Hình ảnh</th>
<th style="text-align:left;">Tên sản phẩm</th>
<th style="text-align:left;">Mã sản phẩm</th>
<th style="text-align:right;" width="5%">Số lượng</th>
<th style="text-align:right;" width="10%">Đơn giá</th>
<th style="text-align:right;" width="10%">Thành tiền</th>
<th style="text-align:center;" width="5%">Xóa</th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
        //tổng tiền bằng giá nhân số lượng
        $item_price = $item["quantity"]*$item["price"];
		?>
				<tr >
				<td><img src="<?php echo $item['image']; ?>" class="image" /></td>

				<td><?php echo $item["name"]; ?></td>
				<td><?php echo $item["code"]; ?></td>
				<td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "₫ ".number_format($item["price"],0,',','.') ?></td>
				<td  style="text-align:right;"><?php echo "₫". number_format($item_price,2); ?></td>
				<td style="text-align:center;">
                <a  type="button" class="btn btn-outline-danger btn-xs" href="giohang.php?action=remove&code=<?php echo $item["code"]; ?>">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
                </td>
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td></td>
<td colspan="2" align="right">Tổng tiền:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "₫ ".number_format($total_price, 2); ?></strong></td>
<td></td>

</tr>
<tr>
<td></td>
<td colspan="2" align="right"></td>
<td align="right"></td>
<td align="right" colspan="3" ><a id="btnEmpty" href="thanhtoan.php"  style="margin-top: 30px;">Tiến hành thanh toán</a></td>


</tr>
</tbody>
</table>

  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>

</div>

<?php
     
  
          include("./footer.php");
    ?>
</BODY>
</HTML>