<?php

function hang_hoa_insert($ten_hang_hoa, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai){
    $sql = "INSERT INTO hang_hoa(ten_hang_hoa, don_gia, giam_gia, hinh, ngay_nhap, mo_ta, dac_biet, so_luot_xem, ma_loai) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten_hang_hoa, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai);
}

function hang_hoa_update($ten_hang_hoa, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai, $ma_hh){
    $sql = "UPDATE hang_hoa SET ten_hang_hoa=?, don_gia=?, giam_gia=?, hinh=?, ngay_nhap=?, mo_ta=?, dac_biet=?, so_luot_xem=?, ma_loai=? WHERE ma_hh=?";
    pdo_execute($sql, $ten_hang_hoa, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai, $ma_hh);
}

function hang_hoa_delete($ma_hh){
    $sql = "DELETE FROM hang_hoa WHERE ma_hh=?";
    if(is_array($ma_hh)){
        foreach ($ma_hh as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_hh);
    }
}

function hang_hoa_select_all(){
    $sql = "SELECT * FROM hang_hoa";
    return pdo_query($sql);
}

function hang_hoa_select_all_home(){
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC LIMIT 9";
    return pdo_query($sql);
}

function hang_hoa_select_by_id($ma_hh){
    $sql = "SELECT * FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_one($sql, $ma_hh);
}

function hang_hoa_exist($ma_hh){
    $sql = "SELECT count(*) FROM hang_hoa WHERE ma_hh=?";
    return pdo_query_value($sql, $ma_hh) > 0;
}

function hang_hoa_tang_so_luot_xem($ma_hh) {
    $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh=?";
    pdo_execute($sql, $ma_hh);
}

function hang_hoa_select_top10() {
    $sql = "SELECT * FROM hang_hoa WHERE so_luot_xem > 0 ORDER BY so_luot_xem DESC LIMIT 0, 10";
    return pdo_query($sql);
}

function hang_hoa_select_dac_biet() {
    $sql = "SELECT * FROM hang_hoa WHERE dac_biet=1";
    return pdo_query($sql);
}

function hang_hoa_select_by_loai($ma_loai) {
    $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
    return pdo_query($sql, $ma_loai);
}

function hang_hoa_select_keyword($keyword) {
    $sql = "SELECT * FROM hang_hoa hh JOIN loai_hang lh ON hh.ma_loai = lh.ma_loai WHERE ten_hang_hoa LIKE ? OR ten_loai LIKE ?";
    return pdo_query($sql, '%'.$keyword.'%', '%'.$keyword.'%');
}

function hang_hoa_select_page() {
    global $SL_PER_PAGE;
    if(!isset($_SESSION['page_no'])){
        $_SESSION['page_no'] = 0;
    }
    if(!isset($_SESSION['page_count'])){
        $row_count = pdo_query_value("SELECT COUNT(*) FROM hang_hoa");
        $_SESSION['page_count'] = ceil($row_count/10.0);
    }

    if(exist_param('page_no')){
        $_SESSION['page_no'] = $_REQUEST['page_no'];
    }
    if($_SESSION['page_no'] < 0){
        $_SESSION['page_no'] = $_SESSION['page_count'] - 1;
    }
    if($_SESSION['page_no'] >= $_SESSION['page_count']){
        $_SESSION['page_no'] = 0;
    }
    $sta = $SL_PER_PAGE*$_SESSION['page_no'];

    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh LIMIT ".$sta.", 10";
    return pdo_query($sql);
}
?>
