<div class="box_alert alert-success mt-3 " role="alert">
    <span class="alert_title">QUẢN LÝ LOẠI HÀNG</span>
</div>

<?php echo (isset($MESSAGER) && strlen($MESSAGER) > 0) ? '<div class="box_alert alert-warning mt-3" role="alert">
    <span class="alert_title">'.$MESSAGER .'</span></div>' : ""?>
<?php ?>

<form action="index.php?btn_update"  method="post" id="form" class="mt-3">
    <div class="mb-3"> 
        <label class="form-label">Mã loại</label>
        <input class="form-control" type="text" name="maLoai" value="<?= $ma_loai?>" readonly>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tên loại</label>
        <input type="text" name="tenLoai" value="<?= $ten_loai?>" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="d-flex gap-2 align-items-center">
        <button class="btns">Cập nhật</button>
        <button type="reset" class="btns btn_resset">Nhập lại</button>
        <button type="button" class="btns"><a href="index.php">Thêm mới</a></button>
        <button type="button" class="btns"><a href="index.php?btn_list">Danh sách</a></button>
    </div>
</form>
<script>
    // let inputAll = document.querySelectorAll('input');
    // let btnReset = document.querySelector('.btn_resset');

    // btnReset.addEventListener('click', ()=>{
        
    //     inputAll.forEach((item)=>{
    //         console.log(item);
    //         item.value = "";
    //     })
    // })
    $().ready(function() {
        $("#form").validate({
            onfocusout: false,
            onkeyup: false,
            onclick: false,
            rules: {
                "tenLoai": {
                    required: true,
                    maxlength: 50
                }
            },

            messages: {
                "tenLoai": {
                    required: "Tên loại không được trống.",
                    maxlength: "Hãy nhập tối đa 50 ký tự."
                },
               
            }
        });
    });
</script>