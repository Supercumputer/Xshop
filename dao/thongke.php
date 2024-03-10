<?php
    require_once 'pdo.php';
    function thong_ke_hang_hoa(){
        $sql = "SELECT lh.ma_loai, lh.ten_loai, COUNT(*) so_luong, 
        MIN(hh.don_gia) gia_min, MAX(hh.don_gia) gia_max, 
        AVG(hh.don_gia) gia_avg FROM hang_hoa hh JOIN loai_hang lh ON lh.ma_loai = hh.ma_loai 
        GROUP BY lh.ma_loai, lh.ten_loai";
        return pdo_query($sql);
    }
    function thong_ke_binh_luan(){
        $sql = "SELECT hh.ma_hh, hh.ten_hang_hoa, COUNT(*) so_luong, 
        MIN(bl.ngay_bl) cu_nhat, MAX(bl.ngay_bl) moi_nhat
        FROM binh_luan bl JOIN hang_hoa hh ON hh.ma_hh = bl.ma_hh
        GROUP BY hh.ma_hh, hh.ten_hang_hoa HAVING so_luong > 0";
        return pdo_query($sql);
    }
?>