<ul class="list-group mt-3">
    <li class="list-group-item active_list_group">TOP 10 YÊU THÍCH</li>

    <li class="list-group-item item_text py-2">
        <?php foreach($listTop10 as $list) : extract($list)?>
            <a href="../hang-hoa/chi-tiet.php?ma_hh=<?=$ma_hh?>" class="top_ten_item list-group-item-action">
                <img src="../../upload/<?=$hinh?>"
                    alt="">
                <span class="product-title"><?= $ten_hang_hoa?></span>
            </a>
        <?php endforeach ?>
        
    </li>


</ul>