
<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">QUẢN LÝ KHÁCH HÀNG</span>
</div>

<form action="index.php?btn_update" method="post" id="form" class="row mt-3" enctype="multipart/form-data">
    <div class="col-md-6 mb-3">
        <label for="inputEmail4" class="form-label">MÃ KHÁCH HÀNG (Tên đăng nhập)</label>
        <input type="text" name="makh" value="<?= $ma_kh?>" class="form-control"  readonly>
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputPassword4" class="form-label">HỌ VÀ TÊN</label>
        <input type="text" name="hotenkh" value="<?= $ho_ten?>" class="form-control" >
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputPassword4" class="form-label">MẬT KHẨU</label>
        <input type="password" name="matkhau" value="<?= $mat_khau?>" class="form-control" id="matkhau">
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputEmail4" class="form-label">XÁC NHẬN MẬT KHẨU</label>
        <input type="password" name="xnmatkhau" value="<?= $mat_khau?>" class="form-control" >
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputEmail4" class="form-label">ĐỊA CHỈ EMAIL</label>
        <input type="email" name="email" value="<?= $email?>" class="form-control" >
    </div>
    <div class="col-md-6 mb-3">
        <label for="inputPassword4" class="form-label">HÌNH ẢNH</label>
        <input class="form-control" name="hinh_new" type="file" id="formFile">
    </div>
    <input type="hidden" class="form-control" name="hinh" value="<?= $hinh?>" >
    <div class="col-md-6 mb-3">
        <label for="inputEmail4" class="form-label">KÍCH HOẠT</label>
        <div class="box_db">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?= $kich_hoat === 0 ? 'checked' : ''?>  name="kichhoat" id="inlineRadio1"
                    value="0">
                <label class="form-check-label" for="inlineRadio1">Chưa kích hoạt</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?= $kich_hoat === 1 ? 'checked' : ''?> name="kichhoat" id="inlineRadio2"
                    value="1">
                <label class="form-check-label" for="inlineRadio2">Kích hoạt</label>
            </div>
        </div>

    </div>
    <div class="col-md-6 mb-3">
        <label for="inputEmail4" class="form-label">VAI TRÒ</label>
        <div class="box_db">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?= $vai_tro === 0 ? 'checked' : ''?> name="vaitro" id="inlineRadio1"
                    value="0">
                <label class="form-check-label" for="inlineRadio1">Khách hàng</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" <?= $vai_tro === 1 ? 'checked' : ''?> name="vaitro" id="inlineRadio2"
                    value="1">
                <label class="form-check-label" for="inlineRadio2">Nhân viên</label>
            </div>
        </div>

    </div>

    <div class="d-flex gap-2 align-items-center">
        <button class="btns" name='update'>Cập nhật</button>
        <button type="reset" class="btns btn_resset">Nhập lại</button>
        <button type="button" class="btns"><a href="index.php">Thêm mới</a></button>
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
                
            },

            messages: {
               
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
                
            }
        });
    });
</script>