<?php
    require '../../global.php';
    require_once '../../dao/pdo.php';
    require_once '../../dao/hanghoa.php';
    require_once '../../dao/loai.php';
    $thongBao = [];
    extract($_REQUEST);
    
    if(exist_param('btn_list')){
        // $listHH = hang_hoa_select_all();
        $listHH = hang_hoa_select_page();
        $VIEW_NAME = 'listHH.php';

    }else if(exist_param('btn_add')){
        if(empty($_POST['tenhh'])){
            $thongBao['th'] = "Bạn chưa nhập tên hàng hóa.";
        }

        if(empty($_POST['dongia'])){
            $thongBao['dg'] = "Bạn chưa nhập đơn giá.";
        }
        
        if(empty($_POST['ngaynhap'])){
            $thongBao['nn'] = "Bạn chưa nhập ngày nhập.";
        }else{
            $ngayNhap = new DateTime($_POST['ngaynhap']);
            $ngayHienTai = new DateTime();

            if ($ngayNhap <= $ngayHienTai) {
                $thongBao['nn'] = "Ngày nhập phải là ngày và giờ tương lai.";
            }
        }

        if(empty($_POST['mota'])){
            $thongBao['mt'] = "Bạn chưa nhập mô tả.";
        }

        if(empty($_POST['maloai'])){
            $thongBao['ml'] = "Bạn chưa chọn loại hàng.";
        }
       
        if(empty($_FILES['hinh']['name'])){
            $thongBao['h'] = "Bạn chưa chọn hình ảnh.";
        }

        if(empty($thongBao)){
            $ten_hang_hoa = $_POST['tenhh'];
            $don_gia = $_POST['dongia'];
            $giam_gia = $_POST['giamgia'];
            $ngay_nhap = $_POST['ngaynhap'];
            $mo_ta = $_POST['mota'];
    
            $dac_biet = $_POST['dacbiet'];
            $so_luot_xem = $_POST['soluotxem'];
            $ma_loai = $_POST['maloai'];
            $hinh = save_file('hinh', $UPLOAD_URL);
    
            hang_hoa_insert($ten_hang_hoa, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai);
            $listHH = hang_hoa_select_all();
            $VIEW_NAME = 'listHH.php';
        }else{
            $loaiHH = loai_select_all();
            $VIEW_NAME = 'addHH.php';
        }
        
    }else if(exist_param('btn_edit')){
        $ma_hh = $_REQUEST['btn_edit'];
        $loaiHH = loai_select_all();
        $hang_hoa_infor = hang_hoa_select_by_id($ma_hh);
        extract($hang_hoa_infor);
        $VIEW_NAME = 'editHH.php';

    }else if(exist_param('btn_update')){
        if(!empty($_POST)){
        $ma_hh = $_POST['mahh'];
        $ten_hang_hoa = $_POST['tenhh'];
        $don_gia = $_POST['dongia'];
        $giam_gia = $_POST['giamgia'];
        $ngay_nhap = $_POST['ngaynhap'];
        $mo_ta = $_POST['mota'];

        $up_file = save_file('hinh_new', $UPLOAD_URL) ;
        $hinh = $up_file ? $up_file : $hinh;

        $dac_biet = $_POST['dacbiet'];
        $so_luot_xem = $_POST['soluotxem'];
        $ma_loai = $_POST['maloai'];
        
        hang_hoa_update($ten_hang_hoa, $don_gia, $giam_gia, $hinh, $ngay_nhap, $mo_ta, $dac_biet, $so_luot_xem, $ma_loai, $ma_hh);
        
        }
        $listHH = hang_hoa_select_all();
        $VIEW_NAME = 'listHH.php';
        
    }else if(exist_param('btn_delete')){
        $values = $_REQUEST['btn_delete'];
        $ma_hh = explode('_', $values);
        hang_hoa_delete($ma_hh);
        $listHH = hang_hoa_select_all();
        $VIEW_NAME = 'listHH.php';
    }else{
        $loaiHH = loai_select_all();
        $VIEW_NAME = 'addHH.php';
    }


    require '../layout.php';
?>