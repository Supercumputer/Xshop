<?php
    require '../../global.php';
    require_once '../../dao/pdo.php';
    require_once '../../dao/thongke.php';
    
    extract($_REQUEST);

    if(exist_param('btn_chart')){
        $listTK = thong_ke_hang_hoa();
        $VIEW_NAME = 'chart.php';
    }else{
        $listTK = thong_ke_hang_hoa();
        $VIEW_NAME = 'listTK.php';
    }
    require '../layout.php';
?>