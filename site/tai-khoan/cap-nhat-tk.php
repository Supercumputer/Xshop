<?php
    require "../../global.php"; 
    require "../../dao/pdo.php";
    require "../../dao/khachhang.php";
    require "../../dao/loai.php";
    require "../../dao/hanghoa.php";
    
    extract($_REQUEST);
    if(exist_param('btn_update')){
        $up_file = save_file('hinh_new', $UPLOAD_URL) ;
        $hinh = $up_file ? $up_file : $hinh;
        
        try{
            khach_hang_update($mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro, $ma_kh);
            $MESSAGER = "Cập nhật tài khoản thành công.";
            $_SESSION['user'] = khach_hang_select_by_id($ma_kh);
        }catch(Exception $exc){
            $MESSAGER = "Cập nhật tài khoản thất bại.";
        }

    }else{
        extract($_SESSION['user']);
    }
    $VIEW_NAME = 'tai-khoan/cap-nhat-tk-form.php';
    $listLH = loai_select_all();
    $listTop10 = hang_hoa_select_top10();
    require '../layout.php';
?>