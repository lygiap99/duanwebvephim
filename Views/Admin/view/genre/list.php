<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Quản lý danh mục phim</h1>

    <!-- Content Row -->
    <div class="row">

        <!-- Table column -->
        <div class="col-lg-12">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Danh mục phim</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Loại phim</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Hành động</td>
                                    <td>
                                        <!-- View details link with icon -->
                                        <!-- Edit link with icon -->
                                        <a href="index.php?act=editGenre&idGenre"
                                            class="btn btn-primary btn-sm editCategory" data-id="1">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <!-- Delete link with icon -->
                                        <a onclick="return xoa_danh_muc()" href="index.php?act=deleteGenre&idGenre"
                                            class="btn btn-danger btn-sm deleteCategory" data-id="1">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="input-group mb-3 w-50">
                        <form class="input-group mb-3 w-50" action="index.php?act=addGenre" method="post">
                            <input name="ten_danh_muc" type="text" class="form-control" id="inputCategoryName"
                                placeholder="Nhập tên thể loại phim...">
                            <div class="input-group-append">

                                <input class="btn btn-success" id="btnAddCategory" type="submit" name="addBtn"
                                    value="Thêm mới">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>