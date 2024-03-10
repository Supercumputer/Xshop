<?php

function danh_muc_tin_tuc_select_all(){
    $sql = "SELECT * FROM danh_muc_tin_tuc";
    return pdo_query($sql);
}

?>