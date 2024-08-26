<?php
session_start();
require_once './Models/pdo.php';
require_once './Globals.php';
require_once './Views/header.php';
# Xử lý Swich case.
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'register':
            require_once './Views/Account/register.php';
            break;
        case 'logIn':
            require_once './Views/Account/login.php';
            break;
        case 'logOut':
            # chức năng đăng xuất
            break;
        case 'genre':
            # loại phim
            break;
        case 'film':
            # phim
            break;
        case 'showTimes':
            # lịch chiếu
            break;
        case 'moviesShowing':
            # phim đang chiếu
            break;
        case 'upcomingMovies':
            # phim sắp chiếu
            break;
        case 'cinema':
            # rạp chiếu 
            break;
        case 'movieReview':
            # review phim
            break;
        case 'topMovies':
            # top phim
            break;
        case 'movieBlog':
            # blog phim
            break;
        case 'search':
            # tim kiếm
            break;
        case 'movieDetails':
            # chi tiết phim
            break;
        default:
        require_once './Views/main.php';
            break;
    }
}else{
    require_once './Views/main.php';
}
require_once './Views/footer.php';