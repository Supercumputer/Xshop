<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">QUẢN LÝ TIN TỨC</span>
</div>

<form action="index.php?btn_add" method="post" id="form" enctype="multipart/form-data" class="row mt-3">
    <div class="col-md-12 mb-3">
        <label for="inputEmail4" class="form-label">MÃ TIN TỨC</label>
        <input class="form-control" type="text" name="" value="auto number" readonly>
    </div>

    <div class="col-md-12 mb-3">
        <label for="inputPassword4" class="form-label">TIÊU ĐỀ</label>
        <input type="text" class="form-control" name="tieu_de" >
    </div>

    <div class="col-md-6 mb-3">
        <label for="inputPassword4" class="form-label">DANH MỤC</label>
        <select class="form-select" aria-label="Default select example" name="id_danhmuc">
            <?php foreach($listDMTT as $list) : extract($list) ?>
                <option value="<?= $id_danhmuc?>"><?= $ten_danhmuc?></option>
            <?php endforeach?>
        </select>
    </div>

    <div class="col-md-6 mb-3">
        <label for="inputPassword4" class="form-label">HÌNH ẢNH</label>
        <input class="form-control" type="file" name="hinh_anh" id="formFile">
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">NỘI DUNG</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="noi_dung" rows="3"></textarea>
    </div>

    <div class="d-flex gap-2 align-items-center">
        <button class="btns">Thêm mới</button>
        <button type="reset" class="btns btn_resset">Nhập lại</button>
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
                "tieu_de": {
                    required: true,
                },
                
                "noi_dung": {
                    required: true,
                },

                "hinh_anh": {
                    required: true,
                }
            },

            messages: {
                "tieu_de": {
                    required: "Tiêu đề không được trống.",
                },

                "noi_dung": {
                    required: "Nội dung không được trống.",
                },

                "hinh_anh": {
                    required: "Bạn chưa chon hình ảnh.",
                }
            }
        });
    });
</script>