<?php
    require "../../global.php";
    require "../../dao/pdo.php";
    require "../../dao/loai.php";
    require "../../dao/hanghoa.php";
    require "../../dao/binhluan.php";

    
    extract($_REQUEST);

    $hang_hoa = hang_hoa_select_by_id($ma_hh);
    extract($hang_hoa);

    hang_hoa_tang_so_luot_xem($ma_hh);

    $hang_hoa_cung_loai = hang_hoa_select_by_loai($ma_loai);

    if(exist_param('noi_dung')){
        $ma_kh = $_SESSION['user']['ma_kh'];
        $ngay_bl = date_format(date_create(), 'Y-m-d');
        binh_luan_insert($noi_dung, $ma_hh, $ma_kh, $ngay_bl);
    }

    $listBL = binh_luan_select_by_hang_hoa($ma_hh);

    $listLH = loai_select_all();
    $listTop10 = hang_hoa_select_top10();
    $VIEW_NAME = 'hang-hoa/chi-tiet-ui.php';
    require '../layout.php';

?>