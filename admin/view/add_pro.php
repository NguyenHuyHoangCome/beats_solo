<?php require_once 'dau.php' ?>

<!-- [ Layout content ] Start -->
<div class="layout-content">

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Thêm sản phẩm</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item active" >Thêm sản phẩm</li>
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
                        <label for="exampleFormControlSelect1">Category Prime</label>
                        <select name="cate" class="form-control" id="exampleFormControlSelect1">
                        <?php foreach($cate as $ca) {?> 
                            <option><?=$ca['id_category'] ." - ". $ca['title']?></option>
                        <?php } ?>                  
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Category Second</label>
                        <select name="cate1" class="form-control" id="exampleFormControlSelect2">
                            
                        <?php foreach($cate1 as $ca1) {?>
                            <option><?=$ca1['id_category1'] ." - ". $ca1['name_category1']?></option>
                        <?php } ?>
                            <option></option>  
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Price</label>
                        <input name="price" type="number" class="form-control" id="exampleFormControlInput2" placeholder="000">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">Sale Price</label>
                        <input name="sale" type="number" class="form-control" id="exampleFormControlInput4" placeholder="0.4">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput3">Active</label>
                        <input name="active" type="number" class="form-control" id="exampleFormControlInput3" placeholder="" value="1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput4">Inventory</label>
                        <input name="inven" type="number" class="form-control" id="exampleFormControlInput4" placeholder="100">
                    </div>
                    <div class="form-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload Picture</span>
                        </div>
                        <div class="custom-file">
                            <!-- <input type="file" name="fileToUpload" id="fileToUpload"> -->
                            <input type="file" multiple accept="image/*" class="form-control-file" name="fileToUpload" id="fileToUpload">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        </div>
    </div>
   
</div>
   

</div>

<?php require_once 'cuoi.php' ?>