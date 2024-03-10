<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">THỐNG KÊ HÀNG HÓA TỪNG LOẠI</span>
</div>

<table class="table mt-3 align-middle">
    <thead class="table-success">
        <tr>
            <th scope="col">LOẠI HÀNG</th>
            <th scope="col">SỐ LƯỢNG</th>
            <th scope="col">GIÁ CAO NHẤT</th>
            <th scope="col">GIÁ THẤP NHẤT</th>
            <th scope="col">GIÁ TRUNG BÌNH</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach($listTK as $list) : extract($list) ?>
        <tr>
            <td scope="row"><?= $ten_loai?></td>
            <td><?= $so_luong ?></td>
            <td>$<?= number_format($gia_max, 2, '.', '') ?></td>
            <td>$<?= number_format($gia_min, 2, '.', '') ?></td>
            <td>$<?= number_format($gia_avg, 2, '.', '') ?></td>
        </tr>

    <?php endforeach ?>
        
    </tbody>
</table>
<div class="d-flex gap-2 align-items-center">
    <button type="button" class="btns"><a href="index.php?btn_chart">Xem biểu đồ</a></button>
</div>
