<div class="box_alert alert-danger" role="alert">
<span class="alert_title">ĐỔI MẬT KHẨU</span>
</div>
<?php echo isset($MESSAGER) ? '<div class="box_alert alert-warning mt-3" role="alert">
    <span class="alert_title">'.$MESSAGER .'</span></div>' : ""?>

<form class="mt-3" action="<?= $SITE_URL?>/tai-khoan/doi-mk.php" id="form" method="post">

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
        <input type="text" class="form-control" name="ma_kh">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mật khẩu cũ</label>
        <input type="password" class="form-control" name="mat_khau" >
    </div>


    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mật khẩu mới</label>
        <input type="password" class="form-control" name="mat_khau_moi" id="mat_khau_moi">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Xác nhận mật khẩu mới</label>
        <input type="password" class="form-control" name="xac_nhan_mat_khau">
    </div>

    <button type="submit" name="btn_change" class="btns">Đổi mật khẩu</button>
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
			"mat_khau_moi": {
				required: true,
				minlength: 8
			},
			"xac_nhan_mat_khau": {
                equalTo: "#mat_khau_moi",
                minlength: 8
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
			"mat_khau_moi": {
                required: "Mật khẩu mới không được trống.",
                minlength: "Hãy nhập ít nhất 8 ký tự."
			},
			"xac_nhan_mat_khau": {
                equalTo: "Mật khẩu không khớp.",
                minlength: "Hãy nhập ít nhất 8 ký tự."
            },
		}
	});
});
</script>