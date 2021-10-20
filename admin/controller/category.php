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
            $slug = $_POST['slug'];
            $active = $_POST['active'];
            $insertdb = [
                'title' => $title,
                'description' => $des,
                'slug' => $slug,
                'active' => $active,
            ];
            if(empty($title)){
                $error = "Not null";
            }
            else{
                $catedb->insert($insertdb);
                header("location:index.php?controller=category");
            }
        }
        if(isset($_POST['submit1'])){
            $title = $_POST['title1'];
            $des = $_POST['des1'];
            $cate = explode('-',$_POST['cate'],2);
            $ca = (int)trim($cate[0]);
            $insertdb = [
                'name_category1' => $title,
                'description' => $des,
                'id_cate' => $ca,
            ];
            if(empty($title)){
                $error = "Not null";
            }
            else{
                $catedb1->insert($insertdb);
                header("location:index.php?controller=category");
            }
        }
        $cate = $catedb->getData();
        $cate1 = $catedb1->getData();
        require_once "view/add_cate.php";
        break;
    case "delete":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $catedb->delete($id);
            header("Location:index.php?controller=category");
        }
        break;
    case "deleteSecond":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $catedb1->delete($id);
            header("Location:index.php?controller=category");
        }
        break;
    case "search":
        if(isset($_POST['search_pro'])){
            $title = $_POST['search_pro'];
            if(empty($title)){
                header("Location:index.php?controller=category");
            }
            else{
                $data = $catedb->getSearch($title);
                $data1 = $catedb1->getData();
                require_once "view/category.php";
            }
            
        }
        if(isset($_POST['search_pro1'])){
            $title = $_POST['search_pro1'];
            if(empty($title)){
                header("Location:index.php?controller=category");
            }
            else{
                $data = $catedb->getData();
                $data1 = $catedb1->getSearch($title);
                require_once "view/category.php";
            }
            
        }
        break;
    case "edit":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            foreach ($catedb->getOne($id)as $row){
                $title = isset($row['title']) ? $row['title']:'';
                $description = isset($row['description']) ? $row['description']:'';
                $slug = isset($row['slug']) ? $row['slug']:'';
                $active = isset($row['active']) ? $row['active']:'';
            }
        }

        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $des = $_POST['des'];
            $slug = $_POST['slug'];
            $active = $_POST['active'];
            $updatedb = [
                'id_category' => $id,
                'title' => $title,
                'description' => $des,
                'slug' => $slug,
                'active' => $active,
         
            ];
            if(empty($title)){
                $error = "Not null";
            }
            
            else{
                $catedb->update($updatedb);
                header("location:index.php?controller=category");
            }
        }
        $cate = $catedb->getData();
        require_once "view/edit_cate.php";
        break;
    case "editSecond":
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            foreach ($catedb1->getOne($id)as $row){
                $title = isset($row['name_category1']) ? $row['name_category1']:'';
                $description = isset($row['description']) ? $row['description']:'';
                $id_cate = isset($row['id_cate']) ? $row['id_cate']:'';
            }
        }

        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $des = $_POST['des'];
            $cate = explode('-',$_POST['cate'],2);
            $updatedb = [
                'id_category' => $id,
                'title' => $title,
                'description' => $des,
                'slug' => $slug,
                'active' => $active,
         
            ];
            if(empty($title)){
                $error = "Not null";
            }
            
            else{
                $catedb->update($updatedb);
                header("location:index.php?controller=category");
            }
        }
        $cate = $catedb->getData();
        require_once "view/edit_cate1.php";
        break;
    default:
        $data = $catedb->getData();
        $data1 = $catedb1->getData();
        require_once "view/category.php";
        break;
}