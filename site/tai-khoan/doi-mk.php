<?php
    require "../../global.php"; 
    require "../../dao/pdo.php";
    require "../../dao/khachhang.php";
    require "../../dao/loai.php";
    require "../../dao/hanghoa.php";
    
    extract($_REQUEST);

    if(exist_param('btn_change')){
        if($mat_khau_moi != $xac_nhan_mat_khau){
            $MESSAGER = "Xác nhận mật khẩu mới không đúng.";
        }else{
            $user = khach_hang_select_by_id($ma_kh);
            if($user){
                if($user['mat_khau'] == $mat_khau){
                    try{
                        khach_hang_change_password($ma_kh, $mat_khau_moi);
                        $MESSAGER = "Đổi mật khẩu thành công.";
                    }catch(Exception $exc){
                        $MESSAGER = "Đổi mật khẩu thất bại.";
                    }
                }else{
                    $MESSAGER = "Mật khẩu sai.";
                }
            }else{
                $MESSAGER = "Sai mã đăng nhập.";
            }
        }
    }      
        
    $VIEW_NAME = 'tai-khoan/doi-mk-form.php';
    $listLH = loai_select_all();
    $listTop10 = hang_hoa_select_top10();
    require '../layout.php';
?>