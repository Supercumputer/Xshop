<div class="box_sp">
    <img src="../../upload/<?= $hinh?>" class="rounded mx-auto d-block" alt="..." style="height: 200px" >
    <ul class="mt-1">
        <li>MÃ HH: <?= $ma_hh?></li>
        <li>TÊN HH: <?= $ten_hang_hoa?></li>
        <li>ĐƠN GIÁ: $<?= number_format($don_gia, 2, '.', '') ?></li>
        <li>GIẢM GIÁ: <?= $giam_gia?>%</li>
    </ul>
    <p style="text-align: justify;"><?= $mo_ta ?></p>
</div>

<ul class="list-group mt-3">
    <li class="list-group-item active_list_group" aria-current="true">BÌNH LUẬN</li>
    <li class="list-group-item">

    <?php foreach($listBL as $list) : extract($list)?>
        <div class="d-flex align-items-center">
            <span style="padding: 3px; background: #000000; border-radius: 50%;"></span>
            <div class="d-flex justify-content-between align-items-center col-12">
                <p class="mb-0
                " style="text-decoration: none; padding-left: 10px;" href=""><?= $noi_dung?></p>
                <div class="d-flex">
                    <b class="mb-0"><?= $ma_kh?>, </b>
                    <span class="mb-0"><?= $ngay_bl?></span>
                </div>
            </div>
        </div>
    <?php endforeach ?>
        
    </li>
    
    <li class="list-group-item active_list_group">
        <?= isset($_SESSION['user']) ? 
        '<form action="chi-tiet.php?ma_hh='.$ma_hh.'" method="post" class="d-flex gap-2">
        <input type="text" name="noi_dung" class="form-control" placeholder="Nhập bình luận tại đây.">
        <button class="btns col-2">Gửi</button>
        </form>' : "Đăng nhập để bình luận về sản phẩm này." ?>
        
    </li>
</ul>

<ul class="list-group mt-3">
    <li class="list-group-item active_list_group" aria-current="true">HÀNG CÙNG LOẠI</li>
    <li class="list-group-item">

        <?php foreach($hang_hoa_cung_loai as $list) : extract($list) ?>
            <div class="d-flex align-items-center">
                <span style="padding: 3px; background: #000000; border-radius: 50%;"></span>
                <a style="text-decoration: none; padding-left: 10px;" href="chi-tiet.php?ma_hh=<?=$ma_hh?>"><?= $ten_hang_hoa?></a>
            </div>
        <?php endforeach ?>
        
    </li>
    
</ul>