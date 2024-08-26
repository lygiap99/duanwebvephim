<?php
session_start();
require_once './view/header.php';
# Xử lý Swich case.
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'genre':
            require_once './view/genre/list.php';
            break;
        case 'addGenre':
            # code...
            break;
        case 'trashCanGenre':
            require_once './view/genre/list_delete.php';
            break;
        case 'restoreGenre':
            # code...
            break;
        case 'film':
            require_once './view/film/list.php';
            break;
        case 'filmDetail':
            require_once './view/film/deltai.php';
            break;
        case 'editFilm':
            require_once './view/film/fix.php';
            break;
        case 'addFilm':
            require_once './view/film/add.php';
            break;
        case 'trashCanFilm':
            require_once './view/film/list_delete.php';
            break;
        case 'cinemaRoom':
            require_once './view/cinemaroom/list.php';
            break;
        case 'trashCanRoom':
            # code...
            break;
        case 'account':
            # code...
            break;
        case 'trashCanAccount':
            # code...
            break;
        case 'showFilm':
            # code...
            break;
        case 'trashCanShowFilm':
            # code...
            break;
        case 'ticket':
            # code...
            break;
        case 'trashCanTicket':
            # code...
            break;
        case 'comment':
            # code...
            break;
        case 'trashCanComment':
            # code...
            break;
        case 'orderTicket':
            # code...
            break;
        default:
            require_once './view/main.php';
            break;
    }
} else {
    require_once './view/main.php';
}

require_once './view/footer.php';