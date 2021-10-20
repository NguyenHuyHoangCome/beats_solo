<?php

require_once "./model/order.php";

$conncect = $db->connect();
$order = new order($conncect);

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = "";
}
require_once "config.php";
switch ($action){
    default:
        $data = $order->getData();
        require_once "view/order.php";
        break;
    case "searchvue":
        if(isset($_GET['id'])){
            // $a = "dsadasdasd";
            $id = $_GET['id'];
            $dataOrder = $order->getOne($id);
            $data = [];
            $id_cart = '';
            $data['ds']=[];
            foreach($dataOrder as $row)
            {
                $data['id_order'] = $row['id_order'];
                $data['total_money'] = $row['total_money'];
                $data['ho_ten'] = $row['ho_ten'];
                $data['so_dt'] = $row['so_dt'];
                $data['id_cart'] = $row['id_cart'];
                $data['id_user'] = $row['id_user'];
                $data['is_completed'] = $row['is_completed'];
                $id_cart = $row['id_cart'];
            }

            $dataCartItem = $order->getCartItem($id_cart);        
            foreach($dataCartItem as $row1)
            {
                $dataPro = $order->getPro($row1['id_pro']);
                $name_pro = "";
                foreach($dataPro as $row2)
                {
                    $name_pro = $row2['title'];
                }
                array_push($data['ds'],array("id_cartitem"=>$row1['id_cartitem'],"id_pro"=>$row1['id_pro'],"quantity"=>$row1['quantity'],"name" => $name_pro));
            }
            echo json_encode($data);
            break;
        }
        
    case "delete":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $order->delete($id);
            header("Location:index.php?controller=order");
        }
        break;
    case "edit":
        if(isset($_GET['id'])){
            $id_user = $_SESSION['user_id'];
            $id = $_GET['id'];
            $updatedb = [
                'id_user' => $id_user,
                'id_order' => $id
            ];
            $order->update($updatedb);
            header("Location:index.php?controller=order");
        }
        break;
    case "editDone":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $updatedb = [
                'id_order' => $id
            ];
            $order->updateDone($updatedb);
            header("Location:index.php?controller=order&action=confirmed");
        }
        break;
    case "confirmed":
        $data = $order->getDataCom();
        require_once "view/orderCom.php";
        break;
    case "completed":
        $data = $order->getDataCompleted();
        require_once "view/orderDone.php";
        break;
    case "NotDone":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $updatedb = [
                'id_order' => $id
            ];
            $order->updateNotDone($updatedb);
            header("Location:index.php?controller=order&action=completed");
        }
        break;
}