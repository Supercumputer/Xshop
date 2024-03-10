<section class="intro">
    <h2 class="text_in">Đóng góp ý kiến</h2>
    <p>Chào mừng bạn đến với trang góp ý của chúng tôi. Chân thành cảm ơn sự đóng góp và ý kiến đánh giá của quý khách. Hãy để lại góp ý của bạn để chúng tôi ngày càng hoàn thiện và mang đến dịch vụ tốt nhất.</p>
</section>

<form class="row g-3">
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Họ và tên</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
 
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Danh mục</label>
    <select id="inputState" class="form-select">
        <?php foreach($listLH as $list) : extract($list)?>
            <option selected><?= $ten_loai?></option>
        <?php endforeach ?>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">Quốc gia</label>
    <select id="inputState" class="form-select">
    <option selected>Việt Nam</option>
      <option>Thái Lan</option>
      <option>Lào</option>
      <option>Campuchia</option>
      <option>Trung Quốc</option>
    </select>
  </div>

  <div class="col-12">
    <label for="inputAddress2" class="form-label">Sản phẩm</label>
    <select id="inputState" class="form-select">
    <?php foreach($listHH as $list) : extract($list)?>
        <option selected><?= $ten_hang_hoa?></option>
    <?php endforeach ?>
    </select>
  </div>
  
  <div class="col-12 ">
    <label for="inputAddress" class="form-label">Góp ý</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Gửi</button>
  </div>
</form>