<?php require_once 'dau.php' ?>

<!-- [ Layout content ] Start -->
<div class="layout-content">

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Sản phẩm</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item active" >Sản phẩm</li>
            </ol>
        </div>
        <div class="row mb-2">
             <div class="d-flex col-12 justify-content-end " >
                <a href="index.php?controller=product&action=add" class="btn btn-primary me-auto mr-5">Add</a>
                <form class="d-flex d-inline mr-5 ml-5" method="post" action="index.php?controller=product&action=search">
                    <input class="form-control " name="search_pro" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success ml-2" type="search">Search</button>
                </form>
            </div>
        </div>
       
        <div class="table-wrapper-scroll-y my-custom-scrollbar">

            <table class="table table-bordered table-striped mb-0 table-hover">
                <thead class="thead-dark">
                
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Id_cate</th>
                    <th scope="col">Id_cate second</th>
                    <th scope="col">Price</th>
                    <th scope="col">Active</th>
                    <th scope="col">Sale prive</th>
                    <th scope="col">Inventory</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody >
                    <?php foreach($data as $pro) { ?>
      
                        <tr>    
                            <th scope="row"><?=$pro['id_product']?></th>
                            <td><?=$pro['title']?></td>
                            <td><?=$pro['description']?></td>
                            <td><?=$pro['id_cate']?></td>
                            <td><?=$pro['id_cate1']?></td>
                            <td><?=$pro['price']?></td>
                            <td><?=$pro['active']?></td>
                            <td><?=$pro['sale_price']?></td>
                            <td><?=$pro['inventory']?></td>
                            <?php if(preg_match("/https:/i",$pro['picture'])===1) { ?>
                                <td><img width="50" src="<?=$pro['picture']?>" alt=""></td>
                            <?php }else {?>
                                <td><img width="50" src="<?php echo '..\\'.$pro['picture']?>" alt=""></td>
                            <?php } ?>
                            <td>
                                <a href="index.php?controller=product&action=edit&id=<?=$pro['id_product'] ?>" class="btn btn-outline-success">Edit</a>
                                <a href="index.php?controller=product&action=delete&id=<?=$pro['id_product'] ?>" class="btn btn-outline-danger">Delete</a>
                            </td>
                            
                        </tr>
                    <?php } ?>

     
                </tbody>
            </table>

        </div>
    </div>
</div>
   

</div>

<?php require_once 'cuoi.php' ?>