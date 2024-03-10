<div class="box_alert alert-danger" role="alert">
    <span class="alert_title">ĐĂNG NHẬP</span>
</div>

<?php echo isset($MESSAGER) ? '<div class="box_alert alert-warning mt-3" role="alert">
    <span class="alert_title">'.$MESSAGER .'</span></div>' : ""?>

<form class="mt-3" action="<?= $SITE_URL?>/tai-khoan/dang-nhap.php" id="form" method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
        <input type="text" class="form-control" name="ma_kh" value="<?= $_SESSION['user']['ma_kh'] ?? $ma_kh ?>">    
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" name="mat_khau" value="<?= $_SESSION['user']['mat_khau'] ?? $mat_khau ?>">
    </div>
    <div class="mb-3 box_db">
        <input type="checkbox" class="form-check-input" name="ghi_nho">
        <label class="form-check-label" for="exampleCheck1">Ghi nhớ tài khoản</label>
    </div>
    <button type="submit" name="btn_login" class="btns">Đăng nhập</button>
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
		}
	});
});
</script>
