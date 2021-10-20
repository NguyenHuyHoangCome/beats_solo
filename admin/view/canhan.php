<?php require_once 'dau.php'?>

<!-- [ Layout content ] Start -->
<div class="layout-content">

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Thông tin cá nhân</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item active" >Thông tin cá nhân</li>
            </ol>
        </div>
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
            <div class="col-12 border card border-light">
                <form class="p-5 border border-warning" method="POST">
                    <div class="form-group">
                        <label for="inputAddress">Id: </label>
                        <label for="inputAddress"><?=$id?></label>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                        <label for="inputEmail4">Username</label>
                        <input type="text" name="username" class="form-control" id="inputEmail4" placeholder="Username" value="<?=$user?>">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" value="<?=$pass?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Name</label>
                        <input type="text" name="name" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" value="<?=$name?>">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

<?php require_once 'cuoi.php'?>