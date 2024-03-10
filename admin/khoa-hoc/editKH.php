<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">QUẢN LÝ KHÓA HỌC</span>
</div>

<form action="index.php?btn_update" method="post" id="form" enctype="multipart/form-data" class="row mt-3">
    <div class="col-md-12 mb-3">
        <label for="inputEmail4" class="form-label">MÃ KHÓA HỌC</label>
        <input class="form-control" type="text" name="id" value="<?= $id ?>" readonly>
    </div>

    <div class="col-md-12 mb-3">
        <label for="inputPassword4" class="form-label">TÊN KHÓA HỌC</label>
        <input type="text" class="form-control" name="ten_khoa_hoc" value="<?= $ten_khoa_hoc ?>">
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">HÌNH ẢNH</label><span>(<?= $hinh_anh?>)</span>
        <input class="form-control" type="file" name="hinh_new" id="formFile">
    </div>

    <input type="hidden" name="hinh_anh" value="<?= $hinh_anh ?>">

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">ĐƠN GIÁ</label>
        <input type="text" class="form-control" name="gia" value="<?= $gia ?>">
    </div>
   
    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">DANH MỤC</label>
        <select class="form-select" aria-label="Default select example" name="id_danh_muc">
            <option value="">--chọn danh mục khoa học--</option>
            <?php foreach($listDMKH as $list) : ?>
                <option value="<?= $list['id_danh_muc']?>" <?= $list['id_danh_muc'] === $id_danh_muc ? 'selected' : "" ?> ><?= $list['ten_danh_muc']?></option>
            <?php endforeach?>
        </select>
    </div>

    <div class="d-flex gap-2 align-items-center">
        <button class="btns" name='update'>Cập nhật</button>
        <button type="reset" class="btns btn_resset">Nhập lại</button>
        <button type="button" class="btns"><a href="index.php">Thêm mới</a></button>
        <button type="button" class="btns"><a href="index.php?btn_list">Danh sách</a></button>
    </div>
    
</form>
<script>
    
    $().ready(function() {
        $("#form").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "ten_khoa_hoc": {
                    required: true,
                },
                "gia": {
                    required: true,
                    number: true,
                    min: 0
                },
                "id_danh_muc": {
                    required: true,
                }
            },

            messages: {
                "ten_khoa_hoc": {
                    required: "Tên khóa học không được trống.",
                },

                "gia": {
                    required: "Đơn giá không được trống.",
                    number: "Bạn phải nhập số.",
                    min: "Đơn giá phải là số dương."
                },

                "id_danh_muc": {
                    required: "Bạn chưa chọn danh mục khóa học.",
                }
            }
        });
    });
</script>