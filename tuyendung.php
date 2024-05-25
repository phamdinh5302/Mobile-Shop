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
        <div class=" page-text">
            <div class="">
                <p dir="ltr" style="line-height:1.295;text-align: center;margin-top:0pt;margin-bottom:8pt;"><span
                        style="font-size: 18pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">
                        Thông tin tuyển dụng tại Việt Nam Mobile</span></p>
                <p dir="ltr" style="line-height:1.295;text-align: justify;margin-top:0pt;margin-bottom:8pt;"><span
                        style="font-size: 14pt; font-family: Arial; color: rgb(0, 0, 0); background-color: transparent; font-weight: 700; font-style: normal; font-variant: normal; text-decoration: none; vertical-align: baseline; white-space: pre-wrap;">
                        Cảm ơn bạn đã quan tâm đến việc tuyển dụng của cửa hàng Việt Nam Mobile. Dưới đây là thông tin
                        về các vị trí tuyển dụng hiện có:

                        1. Nhân viên bán hàng:
                        <b>
                            - Mô tả công việc: Tư vấn và giới thiệu sản phẩm, phục vụ khách hàng, xử lý các giao dịch
                            mua
                            bán.
                            - Yêu cầu:
                            + Có kỹ năng giao tiếp tốt và khả năng thuyết phục khách hàng.
                            + Đam mê về công nghệ và điện thoại di động.
                            + Có khả năng làm việc nhóm và thích làm việc trong môi trường bán lẻ.
                            + Trình độ tiếng Anh cơ bản là một lợi thế.
                        </b>

                        2. Kỹ thuật viên sửa chữa điện thoại di động:
                        <b>
                            - Mô tả công việc: Kiểm tra, chẩn đoán và sửa chữa các lỗi phần cứng và phần mềm trên điện
                            thoại
                            di động.
                            - Yêu cầu:
                            + Có kiến thức và kỹ năng sửa chữa điện thoại di động.
                            + Kỹ năng phân tích và giải quyết vấn đề tốt+
                            + Cẩn thận, tỉ mỉ và kiên nhẫn trong công việc.
                            + Có kinh nghiệm trong việc sửa chữa các dòng điện thoại phổ biến là một lợi thế.
                        </b>


                        3. Quản lý cửa hàng:
                        <b>
                            - Mô tả công việc: Quản lý hoạt động hàng ngày của cửa hàng, quản lý nhân viên, đảm bảo
                            chất
                            lượng dịch vụ và tăng doanh số bán hàng.
                            - Yêu cầu:
                            + Có kinh nghiệm quản lý cửa hàng hoặc kinh doanh trong ngành điện thoại di động.
                            + Kỹ năng lãnh đạo tốt và khả năng quản lý nhân viên.
                            + Kỹ năng kinh doanh, phân tích thị trường và định hướng chiến lược.
                            + Sẵn sàng làm việc linh hoạt và có khả năng giải quyết vấn đề.
                        </b>

                        Nếu bạn quan tâm và muốn gia nhập đội ngũ của chúng tôi, vui lòng gửi CV và thư xin việc qua 
                        email: <a href="#">vietnammobile@gmail.com</a>. Chúng tôi sẽ xem xét và liên hệ lại với bạn trong thời gian sớm nhất.
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