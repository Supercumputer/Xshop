<div class="box_alert alert-danger" role="alert">
    <span class="alert_title">ĐĂNG KÍ THÀNH VIÊN</span>
</div>

<?php echo (isset($MESSAGER) && strlen($MESSAGER) > 0) ? '<div class="box_alert alert-warning mt-3" role="alert">
    <span class="alert_title">'.$MESSAGER .'</span></div>' : ""?>
<?php ?>

<form class="mt-3" action="<?= $SITE_URL?>/tai-khoan/dang-ki.php" id="form" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
        <input type="text" class="form-control" name="ma_kh" value="<?= $ma_kh?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="mat_khau" name="mat_khau" value="<?= $mat_khau?>">
    </div>
    <div class="mb-3">
        <label for="inputPassword4" class="form-label">Xác nhận mật khẩu</label>
        <input type="password" name="mat_khau_2" class="form-control" value="<?= $mat_khau_2?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Họ và Tên</label>
        <input type="text" class="form-control" name="ho_ten" value="<?= $ho_ten?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Địa chỉ email</label>
        <input type="text" class="form-control" name="email" value="<?= $email?>">
    </div>
    <div class="mb-3">
        <label for="inputPassword4" class="form-label">Hình</label>
        <input class="form-control" name="hinh" type="file" id="formFile">
    </div>
   
    <button type="submit" name="btn_register" class="btns">Đăng kí</button>
</form>

<script>
$().ready(function() {
	$("#form").validate({
		onfocusout: false,
		onkeyup: false,
		onclick: false,
		rules: {
			"ma_kh": {
				required: true,
				maxlength: 20
			},
			"mat_khau": {
				required: true,
				minlength: 8
			},
			"mat_khau_2": {
                equalTo: "#mat_khau",
                minlength: 8
			},
            "ho_ten": {
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
			"ma_kh": {
				required: "Tên đăng nhập không được trống.",
				maxlength: "Hãy nhập tối đa 20 ký tự."
			},
			"mat_khau": {
				required: "Mật khẩu không được trống.",
				minlength: "Hãy nhập ít nhất 8 ký tự."
			},
			"mat_khau_2": {
                equalTo: "Mật khẩu không khớp.",
                minlength: "Hãy nhập ít nhất 8 ký tự."
			},
			"ho_ten": {
				required: "Họ và tên không được trống.",
				maxlength: "Hãy nhập tối đa 50 ký tự."
			},
			"email": {
				required: "Email không được trống.",
				email: "Phải nhập đúng định dạng email."
			},
			"hinh": {
				required: "Bạn chưa chọn hình ảnh.",
			}
		}
	});
});
</script>
