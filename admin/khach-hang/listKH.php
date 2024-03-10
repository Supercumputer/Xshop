<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">QUẢN LÝ KHÁCH HÀNG</span>
</div>
<?php echo (isset($MESSAGER) && strlen($MESSAGER) > 0) ? '<div class="box_alert alert-warning mt-3" role="alert">
    <span class="alert_title">'.$MESSAGER .'</span></div>' : ""?>
<?php ?>
<table class="table mt-3 align-middle">
    <thead class="table-success">
        <tr>
            <th></th>
            <th>MÃ KHÁCH HÀNG</th>
            <th>HỌ VÀ TÊN</th>
            <th>ĐỊA CHỈ EMAIL</th>
            <th>HÌNH ẢNH</th>
            <th>VAI TRÒ</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listKH as $list) : extract($list) ?>
        <tr>
            <th scope="row"><input class="form-check-input" type="checkbox" value="<?= $ma_kh?>" id="flexCheckDefault"></th>
            <td><?= $ma_kh?></td>
            <td><?= $ho_ten?></td>
            <td><?= $email?></td>
            <td><img src="../../upload/<?= $hinh?>" class="img_list" alt=""></td>
            <td><?= $vai_tro === 1 ? 'Nhân viên' : 'Khách hàng'?></td>

            <td>
                <div class="d-flex gap-2 align-items-center">
                    <button type="button" class="btns"><a href="index.php?btn_edit=<?= $ma_kh?>">Sửa</a></button>
                    <button type="button" class="btns"><a href="index.php?btn_delete=<?= $ma_kh?>">Xóa</a></button>
                </div>
            </td>
        </tr>
        <?php endforeach ?>
        
    </tbody>
</table>
<div class="d-flex gap-2 align-items-center">
    <button type="button" class="btns select-all">Chọn tất cả</button>
    <button type="button" class="btns deselect-all">Bỏ chọn tất cả</button>
    <button type="button" class="btns delete-selected"><a class="ta">Xóa các mục chọn</a></button>
    <button type="button" class="btns"><a href="index.php">Nhập thêm</a></button>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var checkboxes = document.querySelectorAll('.form-check-input');
        var selectAllButton = document.querySelector('.btns.select-all');
        var deselectAllButton = document.querySelector('.btns.deselect-all');
        var deleteSelectedButton = document.querySelector('.btns.delete-selected');
        // var Button = document.querySelector('.btns a');
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