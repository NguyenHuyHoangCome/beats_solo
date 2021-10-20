<?php require_once 'dau.php' ?>

<!-- [ Layout content ] Start -->
<div class="layout-content">

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Edit sản phẩm</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item active" >Edit sản phẩm</li>
            </ol>
        </div> 

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                        if(isset($error)) { ?>
                        <p class="alert alert-danger"><?= $error ?></p>
                    <?php }
                    ?>
                    <?php
                        if(isset($success)) { ?>
                        <p class="alert alert-success"><?= $success ?></p>
                    <?php }
                    ?>
                </div>
            <div class="col-12 card">
                
                <form class="p-5" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="abc" value="<?=$title?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea name="des" class="form-control" id="exampleFormControlTextarea2" rows="3" ><?=$description?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput4">Slug</label>
                        <input name="slug" type="text" class="form-control" id="exampleFormControlInput1" placeholder="abc" value="<?=$slug?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Active</label>
                        <input name="active" type="number" class="form-control" id="exampleFormControlInput3" placeholder="" value="<?=$active?>">
                    </div>
                
                    <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                </form>
            </div>
        </div>
        </div>
    </div>
   
</div>
   

</div>

<?php require_once 'cuoi.php' ?>