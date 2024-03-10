<?php
    require '../../global.php';
    require_once '../../dao/pdo.php';
    require_once '../../dao/khachhang.php';

    extract($_REQUEST);
    $thongBaoo=[];
    if(exist_param('btn_list')){
        $listKH = khach_hang_select_all();
        $VIEW_NAME = 'listKH.php';

    }else if(exist_param('btn_add')){

        if(empty($_POST['makh'])){
            $thongBao['mkh'] = "Bạn chưa nhập mã khách hàng.";
        }

        if(empty($_POST['hotenkh'])){
            $thongBao['ht'] = "Bạn chưa nhập họ tên.";
        }

        if(empty($_POST['matkhau'])){
            $thongBao['mk'] = "Bạn chưa nhập mật khẩu.";
        }

        if(empty($_POST['xnmatkhau'])){
            $thongBao['xnmk'] = "Bạn chưa nhập mật khẩu.";
        }else if($_POST['xnmatkhau'] != $_POST['matkhau']){
            $thongBao['xnmk'] = "Mật khẩu không khớp.";
        }

        if(empty($_POST['email'])){
            $thongBao['e'] = "Bạn chưa nhập email.";
        }

        if(empty($_FILES['hinh']['name'])){
            $thongBao['h'] = "Bạn chưa chọn hình.";
        }

        if(empty($thongBao)){
            $ma_kh = $_POST['makh'];
            $ho_ten = $_POST['hotenkh'];
            $mat_khau = $_POST['matkhau'];
            $email = $_POST['email'];
            $vai_tro = $_POST['vaitro'];
            $kich_hoat = $_POST['kichhoat'];
            $hinh = save_file('hinh', $UPLOAD_URL);
            if(khach_hang_exist($ma_kh)){
                $MESSAGER = "Mã khách hàng đã tồn tại.";
                $VIEW_NAME = 'addKH.php';
            }else{
                khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro);
                $listKH = khach_hang_select_all();
                $VIEW_NAME = 'listKH.php';
            }
            
        }else{
            $VIEW_NAME = 'addKH.php';
        }
        

    }else if(exist_param('btn_edit')){
        $ma_kh = $_REQUEST['btn_edit'];
        $khach_hang_infor = khach_hang_select_by_id($ma_kh);
        extract($khach_hang_infor);
        $VIEW_NAME = 'editKH.php';

    }else if(exist_param('btn_update')){
        if(!empty($_POST)){
            $ma_kh = $_POST['makh'];
            $ho_ten = $_POST['hotenkh'];
            $mat_khau = $_POST['matkhau'];
            $email = $_POST['email'];
            $vai_tro = $_POST['vaitro'];
            $kich_hoat = $_POST['kichhoat'];
           
            $up_file = save_file('hinh_new', $UPLOAD_URL) ;
            $hinh = $up_file ? $up_file : $hinh;
            $khach_hang_infor = khach_hang_update($mat_khau, $ho_ten, $kich_hoat, $hinh, $email, $vai_tro, $ma_kh);
        }
        $listKH = khach_hang_select_all();
        $VIEW_NAME = 'listKH.php';

    }else if(exist_param('btn_delete')){
        $values = $_REQUEST['btn_delete'];
        $ma_kh = explode('_', $values);
        
        if($_SESSION['user']['ma_kh'] == $ma_kh){
            $MESSAGER = "Không được xóa chính mình.";
        }else{
            $khach_hang_infor = khach_hang_delete($ma_kh);
        }
        
        $listKH = khach_hang_select_all();
        $VIEW_NAME = 'listKH.php';
    }else{
        $VIEW_NAME = 'addKH.php';
    }


    require '../layout.php';
?>