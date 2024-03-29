<?php

function loai_insert($ten_loai){
    $sql = "INSERT INTO loai_hang(ten_loai) VALUES(?)";
    pdo_execute($sql, $ten_loai);
}

function loai_update($ma_loai, $ten_loai){
    $sql = "UPDATE loai_hang SET ten_loai=? WHERE ma_loai=?";
    pdo_execute($sql, $ten_loai, $ma_loai);
}


function loai_delete($ma_loai){
    $sql = "DELETE FROM loai_hang WHERE ma_loai=?";
    if(is_array($ma_loai)){
        foreach ($ma_loai as $ma) {
            pdo_execute($sql, $ma);
        }
    }
    else{
        pdo_execute($sql, $ma_loai);
    }
}

function loai_select_all(){
    $sql = "SELECT * FROM loai_hang";
    return pdo_query($sql);
}

function loai_select_by_id($ma_loai){
    $sql = "SELECT * FROM loai_hang WHERE ma_loai=?";
    return pdo_query_one($sql, $ma_loai);
}

function loai_exist($ma_loai){
    $sql = "SELECT count(*) FROM loai_hang WHERE ma_loai=?";
    return pdo_query_value($sql, $ma_loai) > 0;
}

function loai_exist1($ten_loai){
    $sql = "SELECT count(*) FROM loai_hang WHERE ten_loai=?";
    return pdo_query_value($sql, $ten_loai) > 0;
}
?>