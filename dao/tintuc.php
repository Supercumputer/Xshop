<?php

function tin_tuc_insert($tieu_de, $noi_dung, $hinh_anh, $id_danhmuc){
    $sql = "INSERT INTO tin_tuc(tieu_de, noi_dung, hinh_anh, id_danhmuc) VALUES(?, ?, ?, ?)";
    pdo_execute($sql, $tieu_de, $noi_dung, $hinh_anh, $id_danhmuc);
}

function tin_tuc_update($tieu_de, $noi_dung, $hinh_anh, $id_danhmuc, $id){
    $sql = "UPDATE tin_tuc SET tieu_de=?, noi_dung=?, hinh_anh=?, id_danhmuc=? WHERE id=?";
    pdo_execute($sql, $tieu_de, $noi_dung, $hinh_anh, $id_danhmuc, $id);
}

function tin_tuc_delete($id){
    $sql = "DELETE FROM tin_tuc WHERE id=?";
    if(is_array($id)){
        foreach ($id as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $id);
    }
}

function tin_tuc_select_all(){
    $sql = "SELECT tt.*, dmtt.ten_danhmuc FROM tin_tuc tt JOIN danh_muc_tin_tuc dmtt ON tt.id_danhmuc = dmtt.id_danhmuc ORDER BY id ASC";
    return pdo_query($sql);
}

function tin_tuc_select_by_id($id){
    $sql = "SELECT * FROM tin_tuc WHERE id=?";
    return pdo_query_one($sql, $id);
}

function tin_tuc_exist($id){
    $sql = "SELECT count(*) FROM tin_tuc WHERE id=?";
    return pdo_query_value($sql, $id);
}

?>