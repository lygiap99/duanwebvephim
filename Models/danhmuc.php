<?php
function getdanhmuc(){
    $sql="select*from danhmuc where trang_thai=0 order by id_danh_muc desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function checkdanhmuc($ten_danh_muc){
    $sql="select*from danhmuc where ten_danh_muc='$ten_danh_muc'";
    $check=pdo_query_one($sql);
    return $check;
}
function insertdanhmuc($ten_danh_muc){
    $sql="insert into danhmuc(ten_danh_muc) values('$ten_danh_muc')";
    pdo_execute($sql);
}
function deletedanhmuc($id_danh_muc){
    $sql="update danhmuc set trang_thai=1 where id_danh_muc=$id_danh_muc";
    pdo_execute($sql);
}
function getonedanhmuc($id_danh_muc){
    $sql="select*from danhmuc where id_danh_muc=$id_danh_muc";
    $one_danh_muc=pdo_query_one($sql);
    return $one_danh_muc;
}
function updatedanhmuc($id_danh_muc,$ten_danh_muc){
    $sql="update danhmuc set ten_danh_muc='$ten_danh_muc' where id_danh_muc=$id_danh_muc";
    pdo_execute($sql);
}
function restoredanhmuc($id_danh_muc){
    $sql="update danhmuc set trang_thai=0 where $id_danh_muc";
    pdo_execute($sql);
}
function getdanhmucdelete(){
    $sql="select *from danhmuc where trang_thai=1";
    $listdelete=pdo_query($sql);
    return $listdelete;
}
function restoreAlldanhmuc(){
    $sql="update danhmuc set trang_thai=0 where trang_thai=1";
    pdo_execute($sql);
}