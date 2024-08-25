<?php
session_start();
require_once './Models/pdo.php';
require_once './Globals.php';

# Xử lý Swich case.
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'value':
            # code...
            break;

        default:
            # code...
            break;
    }
}