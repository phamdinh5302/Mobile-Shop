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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
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

                <p dir="ltr" style="line-height:1.295;text-align: justify;margin-top:0pt;margin-bottom:8pt;"><span style="font-size: 14pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">
                        Cảm ơn bạn đã quan tâm đến chính sách bảo hành của cửa hàng Việt Nam Mobile.
                        Dưới đây là một tóm tắt về chính sách bảo hành của chúng tôi:

                        1. Thời gian bảo hành: Chúng tôi cung cấp thời gian bảo hành cho các sản phẩm điện thoại di động mua tại
                        cửa hàng Việt Nam Mobile hoặc trên trang web của cửa hàng .
                        Thời gian bảo hành có thể khác nhau cho từng sản phẩm, vui lòng kiểm tra thông tin cụ thể trên hóa đơn mua hàng của bạn.

                        2. Điều kiện bảo hành: Để được hưởng chính sách bảo hành, sản phẩm phải đáp ứng các điều kiện sau:
                        - Sản phẩm không bị hư hỏng do sử dụng không đúng cách, rơi vỡ, va đập hoặc ngâm nước.
                        - Sản phẩm không bị sửa chữa bởi các bên thứ ba không được ủy quyền bởi Việt Nam Mobile.
                        - Sản phẩm phải có phiếu bảo hành hoặc hóa đơn mua hàng.

                        3. Quy trình bảo hành: Nếu sản phẩm của bạn cần được bảo hành, vui lòng làm theo các bước sau:
                        - Đem sản phẩm và các giấy tờ liên quan (phiếu bảo hành, hóa đơn mua hàng) đến cửa hàng Việt Nam Mobile gần nhất.
                        - Nhân viên chúng tôi sẽ kiểm tra sản phẩm và xác nhận điều kiện bảo hành.
                        - Nếu sản phẩm được xác định là hợp lệ cho bảo hành, chúng tôi sẽ tiến hành sửa chữa hoặc thay thế miễn phí cho bạn.

                        4. Đặc biệt, chúng tôi cũng cung cấp các dịch vụ bảo hành mở rộng để bảo vệ sản phẩm của bạn sau
                        thời gian bảo hành chính thức.
                        Vui lòng liên hệ với nhân viên của chúng tôi để biết thêm thông tin chi tiết về các gói bảo hành mở rộng.

                        Chúng tôi cam kết đảm bảo chất lượng sản phẩm và dịch vụ của chúng tôi. Nếu bạn có bất kỳ câu hỏi hoặc
                        cần hỗ trợ về chính sách bảo hành, vui lòng liên hệ với chúng tôi qua số điện thoại hoặc email
                        được cung cấp trên trang web của chúng tôi.

                        Lưu ý: Chính sách bảo hành chi tiết có thể khác nhau cho từng sản phẩm, vui lòng tham khảo thông tin cụ thể trên trang web
                        hoặc tại cửa hàng của chúng tôi.
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