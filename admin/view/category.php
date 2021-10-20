<?php require_once 'dau.php' ?>

<!-- [ Layout content ] Start -->
<div class="layout-content">

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Danh mục</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item active" >Danh mục</li>
            </ol>
        </div>
        <div class="row mb-2">
             <div class="d-flex col-12 " >
                <h4 class="mr-auto p-2">Category Prime</h4>
                <a href="index.php?controller=category&action=add" class="btn btn-primary align-self-center p-2 mr-5">Add</a>
                <form class="d-flex d-inline p-2 mr-5 ml-5" method="post" action="index.php?controller=category&action=search">
                    <input class="form-control " name="search_pro" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success ml-2" type="search">Search</button>
                </form>
            </div>
        </div>
       
        <div class="table-wrapper-scroll-y my-custom-scrollbar-cate mb-5">

            <table class="table table-bordered table-striped mb-0 table-hover">
                <thead class="thead-dark">
                
                <tr>
                    <th scope="col">Id_category </th>
                    <th scope="col">Title </th>
                    <th scope="col">Slug</th>
                    <th scope="col">Description</th>
                    <th scope="col">Active</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody >
                    <?php foreach($data as $pro) { ?>
                        <tr>    
                            <th scope="row"><?=$pro['id_category']?></th>
                            <td><?=$pro['title']?></td>
                            <td><?=$pro['slug']?></td>
                            <td><?=$pro['description']?></td>
                            <td><?=$pro['active']?></td>
                            <td>
                                <a href="index.php?controller=category&action=edit&id=<?=$pro['id_category'] ?>" class="btn btn-outline-success">Edit</a>
                                <a href="index.php?controller=category&action=delete&id=<?=$pro['id_category'] ?>" class="btn btn-outline-danger">Delete</a>
                            </td>
                            
                        </tr>
                    <?php } ?>

     
                </tbody>
            </table>

        </div>
       
        <div class="row mb-2">
             <div class="d-flex col-12 " >
                <h4 class="mr-auto p-2">Category Second</h4>
                <a href="index.php?controller=category&action=add" class="btn btn-primary align-self-center p-2 mr-5">Add</a>
                <form class="d-flex d-inline p-2 mr-5 ml-5" method="post" action="index.php?controller=category&action=search">
                    <input class="form-control " name="search_pro1" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success ml-2" type="search">Search</button>
                </form>
            </div>
        </div>
        <div class="table-wrapper-scroll-y my-custom-scrollbar-cate">

            <table class="table table-bordered table-striped mb-0 table-hover">
                <thead class="thead-dark">
                
                <tr>
                    <th scope="col">Id category second </th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Id cate prime </th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody >
                    <?php foreach($data1 as $pro) { ?>
                        <tr>    
                            <th scope="row"><?=$pro['id_category1']?></th>
                            <td><?=$pro['name_category1']?></td>
                            <td><?=$pro['description']?></td>
                            <td><?=$pro['id_cate']?></td>
                            <td>
                                <a href="index.php?controller=category&action=editSecond&id=<?=$pro['id_category1'] ?>" class="btn btn-outline-success">Edit</a>
                                <a href="index.php?controller=category&action=deleteSecond&id=<?=$pro['id_category1'] ?>" class="btn btn-outline-danger">Delete</a>
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