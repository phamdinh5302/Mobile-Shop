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
        <div class="container page-text">
            <div class="container">
                <p dir="ltr" style="line-height:1.295;text-align: center;margin-top:0pt;margin-bottom:8pt;"><span
                        style="font-size: 18pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">
                        Giới thiệu Việt Nam Mobile</span></p>
                <p dir="ltr" style="line-height:1.295;text-align: justify;margin-top:0pt;margin-bottom:8pt;"><span
                        style="font-size: 14pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">
                        "Việt Nam Mobile - Kết nối cuộc sống di động"

                            Chào mừng bạn đến với Việt Nam Mobile, nơi mang đến sự kết nối cuộc sống di động tốt nhất.
                        Với tầm nhìn là trở thành cửa hàng hàng đầu trong ngành điện thoại di động tại Việt Nam, chúng
                        tôi cam kết mang đến cho khách hàng những sản phẩm và dịch vụ chất lượng, đáp ứng mọi nhu 
                        cầu của bạn.

                            Tại Việt Nam Mobile, chúng tôi tự hào là địa chỉ tin cậy để mua sắm điện thoại di động. Chúng
                        tôi cung cấp một loạt các sản phẩm từ các thương hiệu hàng đầu như Apple, Samsung, Xiaomi, Oppo,
                        và nhiều hãng khác. Bạn có thể tìm thấy những mẫu điện thoại mới nhất, từ smartphone cao cấp đến
                        các dòng giá rẻ, đảm bảo sự đa dạng và lựa chọn phong phú cho mọi người.

                            Ngoài ra, chúng tôi cũng mang đến cho khách hàng một dịch vụ chăm sóc khách hàng tận tâm và
                        chuyên nghiệp. Đội ngũ nhân viên của chúng tôi sẽ luôn sẵn sàng lắng nghe và tư vấn cho bạn về
                        các sản phẩm và dịch vụ mà chúng tôi cung cấp. Chúng tôi cam kết đem lại sự hài lòng tuyệt đối
                        cho khách hàng.

                            Với Việt Nam Mobile, bạn không chỉ mua sắm điện thoại di động mà còn được trải nghiệm một cuộc
                        sống di động đầy đủ và tiện ích. Chúng tôi cung cấp các phụ kiện điện thoại, dịch vụ sửa chữa,
                        bảo hành và nâng cấp phần mềm để đảm bảo điện thoại của bạn luôn hoạt động tốt nhất.

                            Hãy đến với Việt Nam Mobile và khám phá thế giới di động tuyệt vời với những sản phẩm và dịch vụ
                        tốt nhất. Chúng tôi sẽ là người bạn đồng hành đáng tin cậy trong cuộc sống di động của bạn!
                        </span></p>
            </div>
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