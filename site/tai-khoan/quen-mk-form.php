<div class="box_alert alert-danger" role="alert">
    <span class="alert_title">QUÊN MẬT KHẨU</span>
</div>

<?php echo isset($MESSAGER) ? '<div class="box_alert alert-warning mt-3" role="alert">
    <span class="alert_title">'.$MESSAGER .'</span></div>' : ""?>

<form class="mt-3" action="<?= $SITE_URL?>/tai-khoan/quen-mk.php" method="post" id="form" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
        <input type="text" class="form-control" name="ma_kh">
    </div>
  
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Địa chỉ email</label>
        <input type="email" class="form-control" name="email">
    </div>
    
    <button type="submit" name="btn_forgot" class="btns">Tìm lại mật khẩu</button>
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
			
            "email": {
				required: true,
				email: true
			},
           
		},

        messages: {
			"ma_kh": {
				required: "Tên đăng nhập không được trống.",
				maxlength: "Hãy nhập tối đa 20 ký tự."
			},
			
			"email": {
				required: "Email không được trống.",
				email: "Phải nhập đúng định dạng email."
			}
			
		}
	});
});
</script>
