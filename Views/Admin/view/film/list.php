<style>
    .custom-img-height {
        max-height: 200px;
        /* Đặt chiều cao tối đa */
    }
</style>
<!-- main page -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Phim</h1>

    <!-- bộ lọc -->
    <div class="row mb-4">
        <div class="col-lg-12">
            <form class="form-inline" method="post" action="index.php?act=film">
                <div class="form-group mr-2">
                    <label for="filterCategory" class="mr-2">Loại phim:</label>
                    <select name="danh_muc" class="form-control" id="filterCategory">
                        <option value="0">Tất cả</option>

                        <option value="">Hành động</option>

                    </select>
                </div>
                <input name="tim_btn" type="submit" class="btn btn-primary" value="Lọc">
            </form>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Table column -->
        <div class="col-lg-12">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quản lý phim</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên phim</th>
                                    <th>Ngày thêm</th>
                                    <th>Thể loại</th>
                                    <th>Ảnh</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>1</td>
                                <td>phim 1</td>
                                <td>22/7/2002</td>
                                <td>Hành động</td>
                                <td><img src="../uploads/" class="img-fluid w-10 custom-img-height"></td>


                                <td>
                                    <!-- View details link with icon -->
                                    <a href="index.php?act=filmDetail"
                                        class="btn btn-info btn-sm viewDetails" data-id="1">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <!-- Edit link with icon -->
                                    <a href="index.php?act=editFilm"
                                        class="btn btn-primary btn-sm editCategory" data-id="1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <!-- Delete link with icon -->
                                    <a onclick="return xoa_san_pham() "
                                        href="index.php?act=xoa_san_pham&id_xoasp=<?= $sp['id_san_pham'] ?>"
                                        class="btn btn-danger btn-sm deleteCategory" data-id="1">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                                </tr>



                                <!-- Add more rows dynamically here using JavaScript -->
                            </tbody>
                        </table>



                    </div>


                </div>
            </div>

        </div>

    </div>

</div>
<!-- end main page-fluid -->