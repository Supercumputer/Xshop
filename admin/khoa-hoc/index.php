<?php
    require '../../global.php';
    require_once '../../dao/pdo.php';
    require_once '../../dao/khoahoc.php';
    require_once '../../dao/danhmuckhoahoc.php';

    $thongBao = [];
    
    if(exist_param('btn_list')){
        $listKH = khoa_hoc_select_all();
        $VIEW_NAME = 'listKH.php';

    }else if(exist_param('btn_add')){
       
        $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
        $gia = $_POST['gia'];
        $id_danh_muc = $_POST['id_danh_muc'];
    
        $hinh_anh = save_file('hinh_anh', $UPLOAD_URL);

        khoa_hoc_insert($ten_khoa_hoc, $hinh_anh, $gia, $id_danh_muc);
        $listKH = khoa_hoc_select_all();
        $VIEW_NAME = 'listKH.php';
        
    }else if(exist_param('btn_edit')){
        $id = $_REQUEST['btn_edit'];
        $listDMKH = danh_muc_khoa_hoc_select_all();
        $khoa_hoc_infor = khoa_hoc_select_by_id($id);
        extract($khoa_hoc_infor);
        $VIEW_NAME = 'editKH.php';

    }else if(exist_param('btn_update')){
        if(!empty($_POST)){
            $id = $_POST['id'];
            $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
            $gia = $_POST['gia'];
            $id_danh_muc = $_POST['id_danh_muc'];
            $hinh = $_POST['hinh_anh'];

            $up_file = save_file('hinh_new', $UPLOAD_URL) ;
            $hinh_anh = $up_file ? $up_file : $hinh;
    
            khoa_hoc_update($ten_khoa_hoc, $hinh_anh, $gia, $id_danh_muc, $id);
            
        }
        $listKH = khoa_hoc_select_all();
        $VIEW_NAME = 'listKH.php';
        
    }else if(exist_param('btn_delete')){
        $values = $_REQUEST['btn_delete'];
        $id = explode('_', $values);
        khoa_hoc_delete($id);
        $listKH = khoa_hoc_select_all();
        $VIEW_NAME = 'listKH.php';
    }else{
        $listDMKH = danh_muc_khoa_hoc_select_all();
        $VIEW_NAME = 'addKH.php';
    }

    require '../layout.php';
?>