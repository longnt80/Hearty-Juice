<?php
switch ($page) {
        case 'home':
                $title = 'Hearty Juice';
                $language = 'trang-chu/';
                break;
        case 'about-hearty-juice':
                $title = 'Hearty Juice - About Us';
                $language = 've-hearty-juice/';
                break;
        case 'about-the-founder':
                $title = 'Hearty Juice - About Our Founder';
                $language = 'nguoi-sang-lap/';
                break;
        case 'our-difference':
                $title = 'Hearty Juice - Our Difference';
                $language = 'diem-khac-biet/';
                break;
        case 'our-promise':
                $title = 'Hearty Juice - Our Promise';
                $language = 'cam-ket/';
                break;
        case 'testimonials':
                $title = 'Hearty Juice - Testimonials';
                $language = 'chia-se-khach-hang/';
                break;
        case 'careers':
                $title = 'Hearty Juice - Careers';
                $language = 'co-hoi-nghe-nghiep/';
                break;
        default:
                $title = 'Hearty juice';
}
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/main.css">
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
