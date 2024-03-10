<?php
    require "../../global.php"; 
    require "../../dao/pdo.php";
    require "../../dao/khachhang.php";
    require "../../dao/loai.php";
    require "../../dao/hanghoa.php";

    
    extract($_REQUEST);
    if(exist_param('btn_register')){
        if($mat_khau != $mat_khau_2){
            $MESSAGER = "Mật khẩu phải trùng nhau.";
        }else if(khach_hang_exist($ma_kh)){
            $MESSAGER = "Mã khách hàng đã được sử dụng.";
        }else{
            try{
                $hinh = save_file('hinh', $UPLOAD_URL);
                khach_hang_insert($ma_kh, $mat_khau, $ho_ten, 1, $hinh, $email, 0);
                $MESSAGER = "Đăng kí tài khoản thành công.";
            }catch(Exception $exc){
                $MESSAGER = "Đăng kí tài khoản thất bại.";
            }
        }
    }else{
        global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $mat_khau_2;
    }

    $VIEW_NAME = 'tai-khoan/dang-ki-form.php';
    $listLH = loai_select_all();
    $listTop10 = hang_hoa_select_top10();
    require '../layout.php';
?>