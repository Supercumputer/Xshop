<?php
    require "../../global.php"; 
    require "../../dao/pdo.php";
    require "../../dao/khachhang.php";
    require "../../dao/loai.php";
    require "../../dao/hanghoa.php";
    
    extract($_REQUEST);
    if(exist_param('btn_forgot')){

        $user = khach_hang_select_by_id($ma_kh);
        if($user){
            if($user['email'] != $email){
                $MESSAGER = "Sai địa chỉ email.";
                $VIEW_NAME = 'tai-khoan/quen-mk-form.php';

            }else{
                $MESSAGER = "Mật khẩu của bạn là: ".$user['mat_khau'];
                $VIEW_NAME = 'tai-khoan/dang-nhap-form.php';
                global $ma_kh, $mat_khau;
            }
        }else{
            $MESSAGER = "Sai tên đăng nhập.";
            $VIEW_NAME = 'tai-khoan/quen-mk-form.php';
        }
    }else{
        $VIEW_NAME = 'tai-khoan/quen-mk-form.php';
    }

    $listLH = loai_select_all();
    $listTop10 = hang_hoa_select_top10();
    require '../layout.php';
?>