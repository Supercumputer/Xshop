<?php

function danh_muc_khoa_hoc_select_all(){
    $sql = "SELECT * FROM danh_muc_khoa_hoc";
    return pdo_query($sql);
}

?>