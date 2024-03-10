<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">QUẢN LÝ HÀNG HÓA</span>
</div>

<form action="index.php?btn_add" method="post" id="form" enctype="multipart/form-data" class="row mt-3">
    <div class="col-md-4 mb-3">
        <label for="inputEmail4" class="form-label">MÃ HÀNG HÓA</label>
        <input class="form-control" type="text" name="" value="auto number" readonly>
    </div>
    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">TÊN HÀNG HÓA</label>
        <input type="text" class="form-control" name="tenhh" >
        <span class="tb_red"><?= $thongBao['th'] ?? ""?></span>

    </div>
    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">ĐƠN GIÁ</label>
        <input type="text" class="form-control" name="dongia" >
        <span class="tb_red"><?= $thongBao['dg'] ?? ""?></span>
    </div>
    <div class="col-md-4 mb-3">
        <label for="inputEmail4" class="form-label">GIẢM GIÁ</label>
        <input type="text" class="form-control" name="giamgia" >
    </div>
    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">HÌNH ẢNH</label>
        <input class="form-control" type="file" name="hinh" id="formFile">
        <span class="tb_red"><?= $thongBao['h'] ?? ""?></span>

    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">LOẠI HÀNG</label>
        <select class="form-select" aria-label="Default select example" name="maloai">
            <?php foreach($loaiHH as $list) : extract($list) ?>
                <option value="<?= $ma_loai?>"><?= $ten_loai?></option>
            <?php endforeach?>
        </select>
        <span class="tb_red"><?= $thongBao['ml'] ?? ""?></span>

    </div>

    <div class="col-md-4 mb-3">
        <label for="inputEmail4" class="form-label">HÀNG ĐẶC BIỆT</label>
        <div class="box_db">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="dacbiet" value="0">
                <label class="form-check-label" for="inlineRadio1">Đặc biệt</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" checked name="dacbiet" value="1">
                <label class="form-check-label" for="inlineRadio2">Bình thường</label>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">NGÀY NHẬP</label>
        <input type="date" class="form-control" name="ngaynhap" id="inputPassword4">
        <span class="tb_red"><?= $thongBao['nn'] ?? ""?></span>

    </div>
    <div class="col-md-4 mb-3">
        <label for="inputPassword4" class="form-label">SỐ LƯỢT XEM</label>
        <input class="form-control" type="text" name="soluotxem" value="0" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">MÔ TẢ</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="mota" rows="3"></textarea>
        <span class="tb_red"><?= $thongBao['mt'] ?? ""?></span>

    </div>

    <div class="d-flex gap-2 align-items-center">
        <button class="btns">Thêm mới</button>
        <button type="reset" class="btns btn_resset">Nhập lại</button>
        <button type="button" class="btns"><a href="index.php?btn_list">Danh sách</a></button>
    </div>
    
</form>
<script>
    // let inputAll = document.querySelectorAll('input');
    // let textarea = document.querySelector('textarea');
    // let btnReset = document.querySelector('.btn_resset');

    // btnReset.addEventListener('click', ()=>{
    //     textarea.value = ""
    //     inputAll.forEach((item)=>{
    //         console.log(item);
    //         item.value = "";
    //     })
    // })
    $().ready(function() {
        $("#form").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "tenhh": {
                    required: true,
                    maxlength: 50
                },
                "dongia": {
                    required: true,
                    number: true,
                    min: 0
                },
                "giamgia": {
                    number: true,
                    range: [0, 1] 
                },
                "ngaynhap": {
                    required: true,
                    date: true,
                },
                "mota": {
                    required: true,
                },
                "hinh": {
                    required: true,
                }
            },

            messages: {
                "tenhh": {
                    required: "Tên đăng nhập không được trống.",
                    maxlength: "Hãy nhập tối đa 50 ký tự."
                },

                "dongia": {
                    required: "Đơn giá không được trống.",
                    number: "Bạn phải nhập số.",
                    min: "Đơn giá phải là số dương."
                },
                "giamgia": {
                    number: "Vui lòng nhập một số.",
                    range: "Giảm giá phải nằm trong khoảng từ 0 đến 1."
                },
                "ngaynhap": {
                    required: "Bạn chưa nhập ngày nhập hàng.",
                    date: "Bạn phải nhập đúng định dạng ngày.",
                },

                "mota": {
                    required: "Mô tả không được trống.",
                },

                "hinh": {
                    required: "Bạn chưa chon hình ảnh.",
                }
            }
        });
    });
</script>