<ul class="list-group">
<li type="button" class="list-group-item active_list_group" aria-current="true">
    TÀI KHOẢN
</li>
<li type="button" class="list-group-item">
    <form action="<?= $SITE_URL?>/tai-khoan/dang-nhap.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên đăng nhập</label>
            <input type="text" class="form-control" name="ma_kh" value="<?= $ma_kh?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
            <input type="password" class="form-control" name="mat_khau" value="<?= $mat_khau?>">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="ghi_nho">
            <label class="form-check-label">Ghi nhớ mật khẩu</label>
        </div>
        <button type="submit" name="btn_login" class="btns">Đăng nhập</button>
    </form>

    <div class="d-flex align-items-center mt-3">
        <span style="padding: 3px; background: #000000; border-radius: 50%;"></span>
        <a style="text-decoration: none; padding-left: 10px;" href="<?= $SITE_URL?>/tai-khoan/quen-mk.php">Quên mật khẩu</a>
    </div>
    <div class="d-flex align-items-center mb-3">
        <span style="padding: 3px; background: #000000; border-radius: 50%;"></span>
        <a style="text-decoration: none; padding-left: 10px;" href="<?= $SITE_URL?>/tai-khoan/dang-ki.php">Đăng kí thành viên</a>
    </div>
</li>
</ul>
