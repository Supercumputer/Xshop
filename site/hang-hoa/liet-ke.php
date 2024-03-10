<?php
     require "../../global.php";
     require "../../dao/pdo.php";
     require "../../dao/loai.php";
     require "../../dao/hanghoa.php";
     
     extract($_REQUEST);

     if(exist_param('ma_loai')){
        $listHH = hang_hoa_select_by_loai($ma_loai); 
     }else if(exist_param('kyw')){
        $listHH = hang_hoa_select_keyword($kyw);
     }else{
        $listHH = hang_hoa_select_all(); 
     }

     $VIEW_NAME = 'liet-ke-ui.php';

     $listLH = loai_select_all();
     $listTop10 = hang_hoa_select_top10();
     require '../layout.php';

?>