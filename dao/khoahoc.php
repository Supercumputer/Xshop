<?php

function khoa_hoc_insert($ten_khoa_hoc, $hinh_anh, $gia, $id_danh_muc){
    $sql = "INSERT INTO khoa_hoc(ten_khoa_hoc, hinh_anh, gia, id_danh_muc) VALUES(?, ?, ?, ?)";
    pdo_execute($sql, $ten_khoa_hoc, $hinh_anh, $gia, $id_danh_muc);
}

function khoa_hoc_update($ten_khoa_hoc, $hinh_anh, $gia, $id_danh_muc, $id){
    $sql = "UPDATE khoa_hoc SET ten_khoa_hoc=?, hinh_anh=?, gia=?, id_danh_muc=? WHERE id=?";
    pdo_execute($sql, $ten_khoa_hoc, $hinh_anh, $gia, $id_danh_muc, $id);
}

function khoa_hoc_delete($id){
    $sql = "DELETE FROM khoa_hoc WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function khoa_hoc_select_all(){
    $sql = "SELECT kh.*, dmkh.ten_danh_muc FROM khoa_hoc kh JOIN danh_muc_khoa_hoc dmkh ON kh.id_danh_muc = dmkh.id_danh_muc ORDER BY id ASC";
    return pdo_query($sql);
}

function khoa_hoc_select_by_id($id){
    $sql = "SELECT * FROM khoa_hoc WHERE id=?";
    return pdo_query_one($sql, $id);
}

function khoa_hoc_exist($id){
    $sql = "SELECT count(*) FROM khoa_hoc WHERE id=?";
    return pdo_query_value($sql, $id);
}

?>