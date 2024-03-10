<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">CHI TIẾT BÌNH LUẬN</span>
</div>

<p class="ct_title mt-3">HÀNG HÓA: <?=$listBLCT[0]['ten_hang_hoa'] ?? ""?></p>

<table class="table">
    <thead class="table-success">
        <tr>
            <th scope="col"></th>
            <th scope="col">NỘI DUNG</th>
            <th scope="col">NGÀY BL</th>
            <th scope="col">NGƯỜI BL</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listBLCT as $list) : extract($list)?>
            <tr>
                <th scope="row"><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></th>
                <td><?= $noi_dung?></td>
                <td><?= $ngay_bl?></td>
                <td><?= $ma_kh?></td>
                <td>
                    <button type="button" class="btns"><a href="index.php?btn_delete=<?= $ma_bl?>&ma_hh=<?= $ma_hh?>">Xóa</button>
                </td>
            </tr>
        <?php endforeach ?>
        
    </tbody>
</table>
<div class="d-flex gap-2 align-items-center">
    <button type="button" class="btns select-all">Chọn tất cả</button>
    <button type="button" class="btns deselect-all">Bỏ chọn tất cả</button>
    <button type="button" class="btns delete-selected"><a class="ta">Xóa các mục chọn</a></button>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var checkboxes = document.querySelectorAll('.form-check-input');
        var selectAllButton = document.querySelector('.btns.select-all');
        var deselectAllButton = document.querySelector('.btns.deselect-all');
        var deleteSelectedButton = document.querySelector('.btns.delete-selected');
        var ta = document.querySelector('.ta');

        selectAllButton.addEventListener('click', function() {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = true;
            });
        });

        deselectAllButton.addEventListener('click', function() {
            checkboxes.forEach(function(checkbox) {
                checkbox.checked = false;
            });
        });

        deleteSelectedButton.addEventListener('click', function() {
            var selectedCheckboxes = document.querySelectorAll('.form-check-input:checked');
            let href = "";
            selectedCheckboxes.forEach(function(checkbox) {
                href += "_" + checkbox.value;
            });
            href = href.substring(1);
            ta.href = "index.php?btn_delete="+ href
            ta.click()
        });
    });
</script>
