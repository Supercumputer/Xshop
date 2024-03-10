<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">QUẢN LÝ HÀNG HÓA</span>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center mt-3">
    <li class="m"><a href="index.php?btn_list&page_no=0">|&lt;</a></li>
    <li class="m"><a href="index.php?btn_list&page_no=<?=$_SESSION['page_no']-1?>">&lt;&lt;</a></li>
    <li class="m"><a href="index.php?btn_list&page_no=<?=$_SESSION['page_no']+1?>">&gt;&gt;</a></li>
    <li class="m"><a href="index.php?btn_list&page_no=<?=$_SESSION['page_count']-1?>">&gt;|</a></li>
  </ul>
</nav>

<table class="table mt-3 align-middle">
    <thead class="table-success">
        <tr>
            <th scope="col"></th>
            <th scope="col">MÃ HH</th>
            <th scope="col">TÊN HH</th>
            <th scope="col">ĐƠN GIÁ</th>
            <th scope="col">GIẢM GIÁ</th>
            <th scope="col">LƯỢT XEM</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listHH as $list) : extract($list) ?>
        <tr>
            <th scope="row"><input class="form-check-input" name="selected_items[]" type="checkbox" value="<?= $ma_hh?>"></th>
            <td><?= $ma_hh?></td>
            <td><?= $ten_hang_hoa?></td>
            <td><?= number_format($don_gia, 2, '.', '')?></td>
            <td><?= $giam_gia * 100?>%</td>
            <td><?= $so_luot_xem?></td>

            <td>
                <div class="d-flex gap-2 align-items-center">
                    <button type="button" class="btns"><a href="index.php?btn_edit=<?= $ma_hh?>">Sửa</a></button>
                    <button type="button" class="btns"><a href="index.php?btn_delete=<?= $ma_hh?>">Xóa</a></button>
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