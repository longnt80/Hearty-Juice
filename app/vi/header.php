<?php
$page = $_SERVER['PHP_SELF'];
switch ($page) {
        case '/vi/index.php':
                $title = 'Thức uống Hearty';
                $language = 'home/';
                break;
        case '/vi/about-hearty-juice.php':
                $title = 'Thức uống Hearty - Về chúng tôi';
                $language = 'about-hearty-juice/';
                break;
        case '/vi/about-the-founder.php':
                $title = 'Thức uống Hearty - Về người sáng lập';
                $language = 'about-the-founder/';
                break;
        case '/vi/our-difference.php':
                $title = 'Thức uống Hearty - Sự khác biệt của chúng tôi';
                $language = 'our-difference/';
                break;
        case '/vi/our-promise.php':
                $title = 'Thức uống Hearty - Cam kết của chúng tôi';
                $language = 'our-promise/';
                break;
        case '/vi/testimonials.php':
                $title = 'Thức uống Hearty - Chia sẻ từ khách hàng';
                $language = 'testimonials/';
                break;
        case '/vi/careers.php':
                $title = 'Thức uống Hearty - Cơ hội nghề nghiệp';
                $language = 'careers/';
                break;
        default:
                $title = 'Thức uống Hearty';
}
?>
<!doctype html>
<html class="no-js" lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/main.min.css">
        <script src="../../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
