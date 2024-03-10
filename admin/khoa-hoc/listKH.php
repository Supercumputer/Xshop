<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">QUẢN LÝ KHÓA HỌC</span>
</div>

<table class="table mt-3 align-middle">
    <thead class="table-success">
        <tr>
            <th scope="col"></th>
            <th scope="col">MÃ KHÓA HỌC</th>
            <th scope="col">TÊN KHÓA HỌC</th>
            <th scope="col">HÌNH ẢNH</th>
            <th scope="col">ĐƠN GIÁ</th>
            <th scope="col">DANH MỤC</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listKH as $list) : extract($list) ?>
        <tr>
            <th scope="row"><input class="form-check-input" name="selected_items[]" type="checkbox" value="<?= $id?>"></th>
            <td><?= $id?></td>
            <td><?= $ten_khoa_hoc?></td>
            <td><img src="../../upload/<?= $hinh_anh?>" width="150" alt=""></td>
            <td><?= number_format($gia, 2, '.', '')?></td>
            <td><?= $ten_danh_muc?></td>

            <td>
                <div class="d-flex gap-2 align-items-center">
                    <button type="button" class="btns"><a href="index.php?btn_edit=<?= $id?>">Sửa</a></button>
                    <button type="button" class="btns"><a onclick="return confirm('Bạn có muốn xóa không.')" href="index.php?btn_delete=<?= $id?>">Xóa</a></button>
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