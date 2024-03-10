<ul class="list-group">
    <li class="list-group-item active_list_group" aria-current="true">
        TÀI KHOẢN
    </li>
    
    <li class="list-group-item">
        <div class="text-center">
            <img src="../../upload/<?=$_SESSION['user']['hinh']?>" class="rounded imgs" alt="...">
            <p><?=$_SESSION['user']['ho_ten']?></p>
            </div>

        <div class="d-flex align-items-center mt-3">
            <span style="padding: 3px; background: #000000; border-radius: 50%;"></span>
            <a style="text-decoration: none; padding-left: 10px;" href="<?= $SITE_URL?>/tai-khoan/dang-nhap.php?log_out">Đăng xuất</a>
        </div>
        <div class="d-flex align-items-center">
            <span style="padding: 3px; background: #000000; border-radius: 50%;"></span>
            <a style="text-decoration: none; padding-left: 10px;" href="<?= $SITE_URL?>/tai-khoan/doi-mk.php">Đổi mật khẩu</a>
        </div>
        <div class="d-flex align-items-center">
            <span style="padding: 3px; background: #000000; border-radius: 50%;"></span>
            <a style="text-decoration: none; padding-left: 10px;" href="<?= $SITE_URL?>/tai-khoan/cap-nhat-tk.php">Cập nhật tài khoản</a>
        </div>


        <?php
           echo $_SESSION['user']['vai_tro'] === 1 ? "<div class='d-flex align-items-center'>
            <span style='padding: 3px; background: #000000; border-radius: 50%;'></span>
            <a style='text-decoration: none; padding-left: 10px;' href='$ADMIN_URL/trang-chu/'>Quản trị website</a>
        </div>" : ""
        ?>
        
    </li>
</ul>