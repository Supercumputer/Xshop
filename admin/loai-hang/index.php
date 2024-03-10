<?php
    require '../../global.php';
    require_once '../../dao/pdo.php';
    require_once '../../dao/loai.php';
    extract($_REQUEST);
    $thongbao = [];

    if(exist_param('btn_list')){
        $listLH = loai_select_all();
        $VIEW_NAME = "listLH.php";

    }else if(exist_param('btn_add')){
       
        if(empty($_POST['tenLoai'])){
            $thongBao['tl'] = "Bạn chưa nhập tên loai.";
        }

        if(empty($thongBao)){

            if(loai_exist1($tenLoai)){
                $MESSAGER = "Tên loại đã tồn tại.";
                $VIEW_NAME = "addLH.php";
            }else{
                $ten_loai = $_POST['tenLoai'];
                loai_insert($ten_loai);
                $listLH = loai_select_all();
                $VIEW_NAME = "listLH.php";
            }
            
        }else{
            $VIEW_NAME = "addLH.php";
        }
        
        
    }else if(exist_param('btn_edit')){
        $ma_loai = $_REQUEST['btn_edit'];
        $loai_infor = loai_select_by_id($ma_loai);
        extract($loai_infor);
        $VIEW_NAME = "editLH.php";

    }else if(exist_param('btn_delete')){
        $values = $_REQUEST['btn_delete'];
        $ma_loai = explode('_', $values);
        loai_delete($ma_loai);
        $listLH = loai_select_all();
        $VIEW_NAME = "listLH.php";
    
    }else if(exist_param('btn_update')){
        
        $ma_loai = $_POST['maLoai'];
        $ten_loai = $_POST['tenLoai'];
        $loai_infor = loai_select_by_id($ma_loai);
        if($ten_loai === $loai_infor['ten_loai'] || loai_exist1($tenLoai) < 1){
            loai_update($ma_loai, $ten_loai);
            $listLH = loai_select_all();
            $VIEW_NAME = "listLH.php";
        }else{
            extract($loai_infor);
            $MESSAGER = "Tên loại đã tồn tại.";
            $VIEW_NAME = "editLH.php";
        }
        
    }else{
        $VIEW_NAME = "addLH.php";
    }

   
    require '../layout.php';

?>