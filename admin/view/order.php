<?php require_once 'dau.php' ?>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<style>
   .modal-mask {
     position: fixed;
     z-index: 9998;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background-color: rgba(0, 0, 0, .5);
     display: table;
     transition: opacity .3s ease;
   }

   .modal-wrapper {
     display: table-cell;
     vertical-align: middle;
   }
  </style>

<!-- [ Layout content ] Start -->
<div class="layout-content" id="crudApp">

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Hóa đơn chưa xét</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item active" >Hóa đơn chưa xét</li>
            </ol>
        </div>
        <div class="row mb-2">
             <div class="d-flex col-12 justify-content-end " >
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
                    <th scope="col">Xét</th>
                    <th scope="col">Id order</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Update at</th>
                    <th scope="col">Total money</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Ho ten</th>
                    <th scope="col">So dt</th>
                    <th scope="col">Id gio hang</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody >
                    <?php foreach($data as $pro) { ?>
      
                        <tr> 
                            <td>
                            <button type="button" class="btn btn-outline-success" v-on:click="fetchData(<?=$pro['id_order']?>)" >
                                Xét
                            </button>
                            </td>
                            <th scope="row"><?=$pro['id_order']?></th>
                            <td><?=$pro['created_at']?></td>
                            <td><?=$pro['update_at']?></td>
                            <td><?=$pro['total_money']?></td>

                            <td><?=$pro['active']?></td>
                            <td><?=$pro['ho_ten']?></td>
                            <td><?=$pro['so_dt']?></td>
                            <td><?=$pro['id_cart']?></td>
                            <td>
                                <a href="index.php?controller=order&action=delete&id=<?=$pro['id_order'] ?>" class="btn btn-outline-danger">Delete</a>
                            </td>
                            
                        </tr>
                    <?php } ?>

     
                </tbody>
            </table>

        </div>
        <div v-if="myModel">
            <transition name="model">
            <div class="modal-mask">
            <div class="modal-wrapper">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" @click="myModel=false"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Mã hóa đơn: {{ allData.id_order }}</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                        <label>Tên: {{allData.ho_ten}}</label>
                        <br>
                        <label>Tổng tiền: {{allData.total_money}}</label>
                        <br>
                        <label>Số điện thoại: {{allData.so_dt}}</label>
                        </div>
                        <div class="form-group">
                        <label>Mã giỏ hàng: {{allData.id_cart}}</label>
                        <table class="table table-bordered table-striped mb-0 table-hover">
                            <thead class="thead-dark">
                            
                            <tr>
                                <th scope="col">Id item</th>
                                <th scope="col">Id Pro</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Số Lượng</th>
                            </tr>
                            </thead>
                            <tbody >
                                    <tr v-for='data in allData["ds"]'> 
                                        <th scope="row">{{data.id_cartitem}}</th>
                                        <td>{{data.id_pro}}</td>
                                        <td>{{data.name}}</td>
                                        <td>{{data.quantity}}</td>                                   
                                    </tr>
                            </tbody>
                        </table>
                        </div>
                        <br />
                        <div align="center">
                        <a :href="linkcom(allData.id_order)" class="btn btn-outline-success">Xác nhận đã mua hàng</a>
                        <a :href="linkdelete(allData.id_order)" class="btn btn-outline-danger">Xóa</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </transition>
        </div>
    </div>
    
</div>


<script>
    var app = new Vue ({
    el: '#crudApp',
    data:{
        allData:'',
        myModel:false,
        link: "index.php?controller=order&action=edit&id=",
        delete: "index.php?controller=order&action=delete&id="
    },

    methods: {    
        fetchData:function(id){
            axios.get('index.php?controller=order&action=searchvue&id='+id)
            .then(function(response){
                app.myModel = true,
                app.allData = response.data,
                app.link = linkcom()
                console.log(app.link),
                console.log(app.allData);
            }).catch(function(error){
                console.log(error);
            });
        },
        linkcom: function(id){
            return app.link+id;
        },
        linkdelete: function(id){
            return app.delete+id;
        }}
    });
</script>

</div>


<?php require_once 'cuoi.php' ?>