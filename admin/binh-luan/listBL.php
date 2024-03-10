<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">TỔNG HỢP BÌNH LUẬN</span>
</div>

<table class="table mt-3">
    <thead class="table-success">
        <tr>
            <th scope="col">HÀNG HÓA</th>
            <th scope="col">SỐ BL</th>
            <th scope="col">MỚI NHẤT</th>
            <th scope="col">CŨ NHẤT</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listBL as $list) : extract($list) ?>
            <tr>
                <td scope="row"><?= $ten_hang_hoa?></td>
                <td><?= $so_luong?></td>
                <td><?= $moi_nhat?></td>
                <td><?= $cu_nhat?></td>
                <td>
                    <button type="button" class="btns"><a href="index.php?btn_detail=<?= $ma_hh?>">Chi tiết</a></button>
                </td>
            </tr>
        <?php endforeach ?>
        
    </tbody>
</table>

