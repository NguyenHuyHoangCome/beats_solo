<?php require_once 'dau.php' ?>

<!-- [ Layout content ] Start -->
<div class="layout-content">

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Thêm danh mục</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item active" >Thêm danh mục</li>
            </ol>
        </div> 

        <div class="container">
            <h4 class="mr-auto p-2">Category Prime</h4>
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
                
                <form class="p-5" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="abc">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea name="des" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Slug</label>
                        <input name="slug" type="text" class="form-control" id="exampleFormControlInput2" placeholder="abc">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Active</label>
                        <input name="active" type="number" class="form-control" id="exampleFormControlInput3" placeholder="" value="1">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
        <div class="container mt-5">
            <h4 class="mr-auto p-2">Category Second</h4>
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
                
                <form class="p-5" method="POST" >
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title</label>
                        <input name="title1" type="text" class="form-control" id="exampleFormControlInput1" placeholder="abc">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea name="des1" class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Category Prime</label>
                        <select name="cate" class="form-control" id="exampleFormControlSelect1">
                        <?php foreach($cate as $ca) {?> 
                            <option><?=$ca['id_category'] ." - ". $ca['title']?></option>
                        <?php } ?>                  
                        </select>
                    </div>
                    <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </div>
   
</div>
   

</div>

<?php require_once 'cuoi.php' ?>