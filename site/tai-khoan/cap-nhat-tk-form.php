<div class="box_alert alert-danger" role="alert">
    <span class="alert_title">CẬP NHẬT TÀI KHOẢN</span>
</div>

<?php echo isset($MESSAGER) ? '<div class="box_alert alert-warning mt-3" role="alert">
    <span class="alert_title">'.$MESSAGER .'</span></div>' : ""?>
<?php ?>

<div class="d-flex col-12 gap-3 mt-3"> 
    <figure class="figure">
        <img src="../../upload/<?=$hinh?>" class="img_avata figure-img img-fluid rounded" alt="...">
        </figure>
    <form class="w-100" action="<?= $SITE_URL?>/tai-khoan/cap-nhat-tk.php" id="form" method="post" enctype="multipart/form-data">
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
            <input class="form-control" type="text" name="ma_kh" value="<?= $ma_kh?>" readonly>
        </div>
        <div class="mb-2">
            <label for="exampleInputPassword1" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" name="ho_ten" value="<?= $ho_ten?>">
        </div>
        <div class="mb-2">
            <label for="exampleInputEmail1" class="form-label">Địa chỉ email</label>
            <input type="email" class="form-control" name="email" value="<?= $email?>">
        </div>
        <div class="mb-3">
            <label for="inputPassword4" class="form-label">Hình</label>
            <input class="form-control" type="file" name="hinh_new"  id="formFile">
        </div>
        <input type="hidden" class="form-control" name="vai_tro" value="<?= $vai_tro?>">
        <input type="hidden" class="form-control" name="kich_hoat" value="<?= $kich_hoat?>">
        <input type="hidden" class="form-control" name="mat_khau" value="<?= $mat_khau?>">
        <input type="hidden" class="form-control" name="hinh" value="<?= $hinh?>">

        <button type="submit" name="btn_update" class="btns">Cập nhật</button>
    </form>
</div>

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
			
            "ho_ten": {
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
			
			"ho_ten": {
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
