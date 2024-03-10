<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= $CONTENT ?>/css/style.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="box_container">
        <div class="header_top alert-success">
            <span class="top_name">SIÊU THỊ TRỰC TUYẾN</span>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php require 'trang-chinh/menu.php' ?>
            </div>
        </nav>

        <div class="box_contens mt-3 d-flex">
            <div class="conten_left col-9">
                <div class="box_conten pe-3">
                    <?php require $VIEW_NAME ?>
                </div>
            </div>
            <div class="conten_right col-3"> 
                <?php require 'trang-chinh/dang-nhap.php' ?>
                <?php require 'trang-chinh/danh-muc.php' ?>
                <?php require 'trang-chinh/top10.php' ?>
            </div>

        </div>

        <div class="alert alert-success mt-3 mb-0" role="alert">
            Copyright@ 2023
        </div>
    </div>
</body>

</html>