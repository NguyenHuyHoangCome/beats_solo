<?php
require_once "./model/product.php";
require_once "./model/category.php";
require_once "./model/category1.php";
$conncect = $db->connect();
$prodb = new Product($conncect);
$catedb = new Category($conncect);
$catedb1 = new Category1($conncect);

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = "";
}
require_once "config.php";
switch ($action){
    case "add":
        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $des = $_POST['des'];
            $cate = explode('-',$_POST['cate'],2);
            $cate1 = explode('-',$_POST['cate1'],2);
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $active = $_POST['active'];
            $inven = $_POST['inven'];
            $uploaddir = str_replace("\admin","",getcwd())."\assets\picture\beats-solo\\"; 
            $dir = 'assets\picture\beats-solo\\';
            $ca = (int)trim($cate[0]);
            $ca1 = (int)trim($cate1[0]);
            $n;
            if(empty($title) || empty($price)){
                $error = "Not null";
            }
            else{
                try {
                
                    // $target_dir = "uploads/";
                    $filename =  basename($_FILES["fileToUpload"]["name"]);
                    
                    $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
                    $num = $prodb->count();

                    foreach($num as $num1){
                        $n=$num1['numPro'];
                    }
                    $n = $n+1;
                    $uploadfile = $uploaddir . $n . "." . $imageFileType;
                    $dirdb = $dir . $n . '.' . $imageFileType;
                    // foreach($_SESSION("c") as pro){
                    //     $prodb->insert($pro);
                    // }
                    $insertdb = [
                        'title' => $title,
                        'description' => $des,
                        'id_cate' => $ca,
                        'price' => $price,
                        'active' => $active,
                        'sale_price' => $sale,
                        'inventory' => $inven,
                        'id_cate1' => $ca1,
                        'picture' => $dirdb,
                 
                    ];
                    $prodb->insert($insertdb);

                    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {
                        
                        $success = "Success";
                    } else {
                        echo "Possible file upload attack!\n";
                    }
                    
                    header("location:index.php?controller=product");

                }catch (Exception $e) {
                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                }
            }
           
         
        }
        $cate = $catedb->getData();
        $cate1 = $catedb1->getData();
        require_once "view/add_pro.php";
        break;
    case "delete":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            // $prodb->action("DELETE FROM product WHERE id_product= '$id'");
            $prodb->delete($id);
            header("Location:index.php?controller=product");
        }
        break;
    case "search":
        if(isset($_POST['search_pro'])){
            $title = $_POST['search_pro'];
            if(empty($title)){
                header("Location:index.php?controller=product");
            }
            else{
                $data = $prodb->getSearch($title);
                require_once "view/product.php";
            }
            
        }
        break;
    case "edit":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            foreach ($prodb->getOne($id)as $row){
                $title = isset($row['title']) ? $row['title']:'';
                $description = isset($row['description']) ? $row['description']:'';
                $id_cate = isset($row['id_cate']) ? $row['id_cate']:'';
                $price = isset($row['price']) ? $row['price']:'';
                $active = isset($row['active']) ? $row['active']:'';
                $sale_price = isset($row['sale_price']) ? $row['sale_price']:'';
                $inventory = isset($row['inventory']) ? $row['inventory']:'';
                $id_cate1 = isset($row['id_cate1']) ? $row['id_cate1']:'';
                $picture = isset($row['picture']) ? $row['picture']:'';
            }
        }

        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $des = $_POST['des'];
            $cate = explode('-',$_POST['cate'],2);
            $cate1 = explode('-',$_POST['cate1'],2);
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $active = $_POST['active'];
            $inven = $_POST['inven'];
            $uploaddir = str_replace("\admin","",getcwd())."\assets\picture\beats-solo\\"; 
            $dir = 'assets\picture\beats-solo\\';
            $ca = (int)trim($cate[0]);
            $ca1 = (int)trim($cate1[0]);
            $n;
            if(empty($title) || empty($price)){
                $error = "Not null";
            }
            else{
                try {
                
                    // $target_dir = "uploads/";
                    $filename =  basename($_FILES["fileToUpload"]["name"]);
                    if($filename==""){
                        $dirdb = $picture;
                    }
                    else{
                        $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
                        $num = $prodb->count();

                        foreach($num as $num1){
                            $n=$num1['numPro'];
                        }
                        $n = $n+1;
                        $uploadfile = $uploaddir . $n . "." . $imageFileType;
                        $dirdb = $dir . $n . '.' . $imageFileType;

                        if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadfile)) {                     
                        $success = "Success";
                        } else {
                            echo "Possible file upload attack!\n";
                        }
                    }
                    
                    $updatedb = [
                        'title' => $title,
                        'description' => $des,
                        'id_cate' => $ca,
                        'price' => $price,
                        'active' => $active,
                        'sale_price' => $sale,
                        'inventory' => $inven,
                        'id_cate1' => $ca1,
                        'picture' => $dirdb,
                        'id_product' => $id,
                 
                    ];
                    $prodb->update($updatedb);

              
                    header("location:index.php?controller=product");

                }catch (Exception $e) {
                    echo 'Caught exception: ',  $e->getMessage(), "\n";
                }
            }
        }
        $cate = $catedb->getData();
        $cate1 = $catedb1->getData();
        require_once "view/edit_pro.php";
        break;
    default:
        $data = $prodb->getData();
        require_once "view/product.php";
        break;
}