<?php
    require "../../global.php"; 
    require "../../dao/pdo.php";
    require "../../dao/khachhang.php";
    require "../../dao/loai.php";
    require "../../dao/hanghoa.php";
    
    extract($_REQUEST);

    if(exist_param('btn_login')){

        $user = khach_hang_select_by_id($ma_kh);

        if($user){
            if($user['kich_hoat'] == 1){
                if($user['mat_khau'] == $mat_khau){
                    $MESSAGER = "Đăng nhập thành công.";
                    if(exist_param('ghi_nho')){
                        set_cookie("ma_kh", $ma_kh, 30);
                        set_cookie("mat_khau", $mat_khau, 30);
    
                    }else{
                        delete_cookie("ma_kh");
                        delete_cookie("mat_khau");
                    }
    
                    $_SESSION['user'] = $user;
                    
                    if(isset($_SESSION['request_url'])){
                        header('location: '.$_SESSION['request_url']);
                    }
                }else{
                    $MESSAGER = "Tên đăng nhập hoặc mật khẩu không đúng.";
                }
            }else{
                $MESSAGER = "Tài khoản của bạn chưa được kích hoạt.";
            }
            
        }else{
            $MESSAGER = "Tên đăng nhập hoặc mật khẩu không đúng.";
        }
    }else{
        if(exist_param('log_out')){
            session_unset();
        }
        $ma_kh = get_cookie('ma_kh');
        $mat_khau = get_cookie('mat_khau');
    }
    $VIEW_NAME = 'tai-khoan/dang-nhap-form.php';
    $listLH = loai_select_all();
    $listTop10 = hang_hoa_select_top10();
    require '../layout.php';
?>