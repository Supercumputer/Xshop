<div class="list-group mt-3">
    <a href="#" class="list-group-item active_list_group" aria-current="true">
        DANH MỤC
    </a>

    <?php foreach($listLH as $list) : extract($list) ?>
        <a href="../hang-hoa/liet-ke.php?ma_loai=<?=$ma_loai?>" class="list-group-item list-group-item-action"><?= $ten_loai?></a>
    <?php endforeach ?>

    <a href="#" class="list-group-item list-group-item-action"></a>
    <button type="submit" class="list-group-item active_list_group" aria-current="true">
        <form action="../hang-hoa/liet-ke.php" method="post">
            <input type="text" name="kyw" class="form-control" placeholder="Từ khóa tìm kiếm">
        </form>
    </button>
</div>