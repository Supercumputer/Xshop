<div id="carouselExampleCaptions" class="box_slide carousel slide mb-3" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
            class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="<?= $CONTENT ?>/images/bn2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= $CONTENT ?>/images/bn3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= $CONTENT ?>/images/bn1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="box_products">

    <div class="row">

        <?php foreach($listHH as $list) : extract($list)?>
            <div class="col-4 mg_pro mb-3">
                <div class="box_pro">
                    <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$ma_hh?>">
                            <div class="box_img">
                            <img src="../../upload/<?= $hinh?>"
                                alt="">
                        </div>
                    </a>
                    <span>$ <?= number_format($don_gia, 2, '.', '');?></span>
                    <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$ma_hh?>">
                        <p class="mb-0 product-title"><?= $ten_hang_hoa?> </p>
                    </a>
                </div>
            </div>
        <?php endforeach ?>
    </div>

</div>

