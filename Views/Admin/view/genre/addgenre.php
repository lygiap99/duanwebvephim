
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Danh mục </h1>

<!-- Content Row -->
<div class="row">

    <!-- Table column -->
    <div class="col-lg-12">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Sửa danh mục</h6>
            </div>
            <div class="card-body">
            
                <div class="input-group mb-3 w-50">
               <form class="input-group mb-3 w-50"   action="index.php?act=update_danh_muc" method="post" >
               <input name="ten_danh_muc" type="text" class="form-control" id="inputCategoryName"  >
                    <div class="input-group-append">
                       
                        <input class="btn btn-success" id="btnAddCategory" type="submit" name="add_btn" value="Thêm mới">
                           
                       
                    </div>
             
               </form>
         
                </div>
                <span style="color:red;"><?php if(isset($thongbao)){
                  echo $thongbao;
                }else {
                  $thongbao = "";
                }
                  ?></span>
            </div>
        </div>

    </div>

</div>
<?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <ul>
            <?php foreach ($errors as $error): ?>
                <?= $error ?>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
</div>