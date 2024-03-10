<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">QUẢN LÝ KHÁCH HÀNG</span>
</div>
<?php echo (isset($MESSAGER) && strlen($MESSAGER) > 0) ? '<div class="box_alert alert-warning mt-3" role="alert">
    <span class="alert_title">'.$MESSAGER .'</span></div>' : ""?>
<?php ?>
<form action="index.php?btn_add" method="post" id="form" enctype="multipart/form-data" class="row mt-3" >
    <div class="col-md-6 mb-3">
        <label for="inputEmail4" class="form-label">MÃ KHÁCH HÀNG (Tên đăng nhập)</label>
        <input type="text" name="makh" class="form-control" >
        <span class="tb_red"><?= $thongBao['mkh'] ?? ""?></span>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputPassword4" class="form-label">HỌ VÀ TÊN</label>
        <input type="text" name="hotenkh" class="form-control" >
        <span class="tb_red"><?= $thongBao['ht'] ?? ""?></span>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputPassword4" class="form-label">MẬT KHẨU</label>
        <input type="password" name="matkhau" class="form-control" id="matkhau">
        <span class="tb_red"><?= $thongBao['mk'] ?? ""?></span>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputEmail4" class="form-label">XÁC NHẬN MẬT KHẨU</label>
        <input type="password" name="xnmatkhau" class="form-control" >
        <span class="tb_red"><?= $thongBao['xnmk'] ?? ""?></span>

    </div>
    <div class="col-md-6 mb-3">
        <label for="inputEmail4" class="form-label">ĐỊA CHỈ EMAIL</label>
        <input type="email" name="email" class="form-control" >
        <span class="tb_red"><?= $thongBao['e'] ?? ""?></span>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputPassword4" class="form-label">HÌNH ẢNH</label>
        <input class="form-control" name="hinh" type="file" id="formFile">
        <span class="tb_red"><?= $thongBao['h'] ?? ""?></span>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputEmail4" class="form-label">KÍCH HOẠT</label>
        <div class="box_db">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" checked name="kichhoat" value="0">
                <label class="form-check-label" for="inlineRadio1">Chưa kích hoạt</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kichhoat" value="1">
                <label class="form-check-label" for="inlineRadio2">Kích hoạt</label>
            </div>
        </div>

    </div>
    <div class="col-md-6 mb-3">
        <label for="inputEmail4" class="form-label">VAI TRÒ</label>
        <div class="box_db">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" checked name="vaitro" value="0">
                <label class="form-check-label" for="inlineRadio1">Khách hàng</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="vaitro" value="1">
                <label class="form-check-label" for="inlineRadio2">Nhân viên</label>
            </div>
        </div>

    </div>

    <div class="d-flex gap-2 align-items-center">
        <button class="btns">Thêm mới</button>
        <button type="reset" class="btns btn_resset">Nhập lại</button>
        <button type="button" class="btns"><a href="index.php?btn_list">Danh sách</a></button>
    </div>
</form>

<script>
    // let inputAll = document.querySelectorAll('input');
    // let btnReset = document.querySelector('.btn_resset');

    // btnReset.addEventListener('click', ()=>{
        
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
                "makh": {
                    required: true,
                    maxlength: 20
                },
                "matkhau": {
                    required: true,
                    minlength: 8
                },
                "xnmatkhau": {
                    equalTo: "#matkhau",
                    minlength: 8
                },
                "hotenkh": {
                    required: true,
                    maxlength: 20
                },
                "email": {
                    required: true,
                    email: true
                },
                "hinh": {
                    required: true,
                }
            },

            messages: {
                "makh": {
                    required: "Tên đăng nhập không được trống.",
                    maxlength: "Hãy nhập tối đa 20 ký tự."
                },
                "matkhau": {
                    required: "Mật khẩu không được trống.",
                    minlength: "Hãy nhập ít nhất 8 ký tự."
                },
                "xnmatkhau": {
                    equalTo: "Mật khẩu không khớp.",
                    minlength: "Hãy nhập ít nhất 8 ký tự."
                },
                "hotenkh": {
                    required: "Họ và tên không được trống.",
                    maxlength: "Hãy nhập tối đa 50 ký tự."
                },
                "email": {
                    required: "Email không được trống.",
                    email: "Phải nhập đúng định dạng email."
                },
                "hinh": {
                    required: "Bạn chưa chon hình ảnh.",
                }
            }
        });
    });
</script>
