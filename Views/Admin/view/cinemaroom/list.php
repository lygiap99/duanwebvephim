<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Phòng chiếu</h1>

<!-- Content Row -->
<div class="row">

    <!-- Table column -->
    <div class="col-lg-12">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Quản lý danh sách phòng</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Phòng</th>
                                <td>Sức chứa</td>
                                <th>Thao tác</th>

                            </tr>
                        </thead>
                        <tbody>
                          
 <tr>
                                <td>1</td>
                                <td>phòng 1</td>
                               <td>20 người</td>
                                <td>
                                    <!-- View details link with icon -->
                               
                                    <!-- Edit link with icon -->
                                    <a href="index.php?act=sua_size&idssz=<?=$sz['id_size']?>" class="btn btn-primary btn-sm editCategory" data-id="1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- Delete link with icon -->
                                    <a onclick="return xoa_size()" href="index.php?act=xoa_size&idsz=<?=$sz['id_size']?>" class="btn btn-danger btn-sm deleteCategory" data-id="1">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                         
                           
                            
                            <!-- Add more rows dynamically here using JavaScript -->
                        </tbody>
                    </table>

                    
                    
                </div>
                <div class="input-group mb-3 w-50">
               <form class="input-group mb-3 w-50"   action="index.php?act=them_size" method="post" >
               <input name="ten_size" type="text" class="form-control" id="inputCategoryName" placeholder="Nhập size...">
                    <div class="input-group-append">
                       
                        <input class="btn btn-success" id="btnAddCategory" type="submit" name="them_btn" value="Thêm">
                           
                       
                    </div>
             
               </form>
         
                </div>
           
            </div>
        </div>

    </div>

</div>

</div>