<?php
    require '../../global.php';
    require_once '../../dao/pdo.php';
    require_once '../../dao/binhluan.php';
    require_once '../../dao/thongke.php';

    
    extract($_REQUEST);
    
    if(exist_param('btn_detail')){
        $ma_hh = $_REQUEST['btn_detail'];
        $listBLCT = binh_luan_select_by_hang_hoa($ma_hh);
        $VIEW_NAME = 'detailBL.php';

    }else if(exist_param('btn_delete')){
        $values = $_REQUEST['btn_delete'];
        $ma_bl = explode('_', $values);
        
        $ma_hh = $_REQUEST['ma_hh'];
        binh_luan_delete($ma_bl);
        header("location: index.php?btn_detail=$ma_hh");
    }else{
        $listBL = thong_ke_binh_luan();
        $VIEW_NAME = 'listBL.php';
    }

    require '../layout.php';
?>