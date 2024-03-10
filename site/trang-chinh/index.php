<?php
    ob_start(); 
    require "../../global.php"; 
    require "../../dao/pdo.php";
    require "../../dao/loai.php";
    require "../../dao/hanghoa.php";

    extract($_REQUEST);
    if(exist_param('gioi_thieu')){
        $VIEW_NAME = 'trang-chinh/gioi-thieu.php';
    }else if(exist_param('lien_he')){
        $VIEW_NAME = 'trang-chinh/lien-he.php';
    }else if(exist_param('gop_y')){
        $listLH = loai_select_all();
        $listHH = hang_hoa_select_all();
        $VIEW_NAME = 'trang-chinh/gop-y.php';
    }else if(exist_param('hoi_dap')){
        $VIEW_NAME = 'trang-chinh/hoi-dap.php';
    }else{
        // $slide = hang_hoa_select_dac_biet();
        $listHH = hang_hoa_select_all_home();
        $VIEW_NAME = 'trang-chinh/home.php';
    }
    $listLH = loai_select_all();
    $listTop10 = hang_hoa_select_top10();
    require '../layout.php';

    ob_end_flush();
?>