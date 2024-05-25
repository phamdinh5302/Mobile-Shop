<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thế giới điện thoại</title>
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <!-- Jquery -->
    <script src="lib/Jquery/Jquery.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <!-- our files -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/topnav.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/taikhoan.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/huongdan.css">
    <!-- js -->
    <script src="js/dungchung.js"></script>
    <script src="js/chitietsanpham.js"></script>

    <?php
    require_once "php/echoHTML.php";
    ?>
</head>

<body>
    <?php
    addHeader();
    addTopNav();
    ?>

    <section>
        <div class="betwween__instruct">
            <h2 class="betwween__instruct-title">Hướng dẫn đặt hàng:</h2>
            <p class="betwween__instruct-content">Bước 1: Click vào mặt hàng bạn muốn mua (ví dụ như hình dưới)</p>
            <img src="./img/construct/huongdan1.png" alt="hướng dẫn 1" width="70%" height="400px" >

            <p class="betwween__instruct-content">Bước 2: Click vào thêm giỏ hàng (ví dụ như hình dưới bên)</p>
            <img src="./img/construct/huongdan2.png" alt="hướng dẫn 2" width="70%" height="400px">

            <p class="betwween__instruct-content">Lúc đó giỏ hàng sẽ có 1 mặt hàng, ta sẽ click vào giỏ hàng luôn </p>
            <img src="./img/construct/huongdan3.png" alt=""width="70%" height="400px">
            <p class="betwween__instruct-content">Bước 3: Ta sẽ thấy nhiều lựa chọn trong này như tăng giảm số lượng mua, rồi ta sẽ nhấn thanh toán, hay k muốn mua nữa ta có thể xóa hết</p>
            <img src="./img/construct/huongdan4.png" alt=""width="70%" height="400px">
            <p class="betwween__instruct-content">Ta đã hoàn thành xong các bước mua hàng, cảm ơn các bạn đã đặt hàng của chúng tôi</p>
        </div>
    </section>

    <?php addContainTaiKhoan(); ?>

    <div class="footer">
        <?php addFooter(); ?>
    </div>

    <i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>
    <i class="fa fa-arrow-down" id="goto-bot-page" onclick="gotoBot()"></i>

</body>

</html>