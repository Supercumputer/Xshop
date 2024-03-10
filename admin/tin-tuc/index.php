<?php
    require '../../global.php';
    require_once '../../dao/pdo.php';
    require_once '../../dao/danhmuctintuc.php';
    require_once '../../dao/tintuc.php';

    $thongBao = [];
    
    if(exist_param('btn_list')){
        $listTT = tin_tuc_select_all();
        $VIEW_NAME = 'listTT.php';

    }else if(exist_param('btn_add')){
       
        $tieu_de = $_POST['tieu_de'];
        $noi_dung = $_POST['noi_dung'];
        $id_danhmuc = $_POST['id_danhmuc'];
    
        $hinh_anh = save_file('hinh_anh', $UPLOAD_URL);

        tin_tuc_insert($tieu_de, $noi_dung, $hinh_anh, $id_danhmuc);
        $listTT = tin_tuc_select_all();
        $VIEW_NAME = 'listTT.php';
        
    }else if(exist_param('btn_edit')){
        $id = $_REQUEST['btn_edit'];
        $listDMTT = danh_muc_tin_tuc_select_all();
        $tin_tuc_infor = tin_tuc_select_by_id($id);
        extract($tin_tuc_infor);
        $VIEW_NAME = 'editTT.php';

    }else if(exist_param('btn_update')){
        if(!empty($_POST)){
            $id = $_POST['id'];
            $tieu_de = $_POST['tieu_de'];
            $noi_dung = $_POST['noi_dung'];
            $id_danhmuc = $_POST['id_danhmuc'];
            $hinh = $_POST['hinh_anh'];

            $up_file = save_file('hinh_new', $UPLOAD_URL) ;
            $hinh_anh = $up_file ? $up_file : $hinh;
    
            tin_tuc_update($tieu_de, $noi_dung, $hinh_anh, $id_danhmuc, $id);
            
        }
        $listTT = tin_tuc_select_all();
        $VIEW_NAME = 'listTT.php';
        
    }else if(exist_param('btn_delete')){
        $values = $_REQUEST['btn_delete'];
        $id = explode('_', $values);
        tin_tuc_delete($id);
        $listTT = tin_tuc_select_all();
        $VIEW_NAME = 'listTT.php';
    }else{
        $listDMTT = danh_muc_tin_tuc_select_all();
        $VIEW_NAME = 'addTT.php';
    }

    require '../layout.php';
?>