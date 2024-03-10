<?php

function binh_luan_insert($noi_dung, $ma_hh, $ma_kh, $ngay_bl){
    $sql = "INSERT INTO binh_luan(noi_dung, ma_hh, ma_kh, ngay_bl) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $noi_dung, $ma_hh, $ma_kh, $ngay_bl);
}

// function binh_luan_update($ma_loai, $ten_loai){}

function binh_luan_delete($ma_bl){
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
    if(is_array($ma_bl)){
        foreach ($ma_bl as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_bl);
    }
}

// function binh_luan_select_all(){
    
// }

function binh_luan_select_by_id($ma_bl){
    $sql = "SELECT * FROM binh_luan WHERE ma_bl=?";
    return pdo_query($sql, $ma_bl);
}

// function binh_luan_exist($ma_loai){}

function binh_luan_select_by_hang_hoa($ma_hh){
    $sql = "SELECT bl.*, hh.ten_hang_hoa FROM binh_luan bl 
    JOIN hang_hoa hh ON hh.ma_hh = bl.ma_hh WHERE bl.ma_hh=? ORDER BY ngay_bl DESC";
    return pdo_query($sql, $ma_hh);
}
?>