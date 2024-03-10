<div class="box_products">

    <div class="row">
        <?php foreach($listHH as $list) : extract($list)?>
            <div class="col-4 mg_pro mb-3">
                <div class="box_pro">
                    <a href="chi-tiet.php?ma_hh=<?=$ma_hh?>">
                        <div class="box_img">
                            <img src="../../upload/<?= $hinh?>"
                                alt="">
                        </div>
                    </a>
                    <span>$ <?= number_format($don_gia, 2, '.', '')?></span>
                    <a href="chi-tiet.php?ma_hh=<?=$ma_hh?>">
                        <p class="mb-0 product-title"><?= $ten_hang_hoa?> </p>
                    </a>
                    
                </div>
            </div>
        <?php endforeach ?>
    </div>
            
</div>