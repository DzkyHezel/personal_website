<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hezel's Page | @dzky.hzl_</title>
    <link rel="icon" type="image/png" href="<?= base_url()?>assets/img/icon.png" />

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Snowburst+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sniglet&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet"> <!-- cursive -->
    <link href="https://fonts.googleapis.com/css2?family=Delius&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet"> <!-- Title -->
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet"> <!-- Shizuru -->
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
    <!-- Hachi Maru Pop -->
    <link href="https://fonts.googleapis.com/css2?family=Aoboshi+One&family=Hachi+Maru+Pop&family=Shizuru&display=swap"
        rel="stylesheet"> <!-- Aoboshi One -->
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <!-- Kosugi Maru -->

    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/remixicon/remixicon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/lightbox.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/lightbox.min.css" type="text/css">
    <script src="<?= base_url() ?>assets/lightbox-plus-jquery.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="<?= base_url() ?>assets/animate.css" type="text/css">
    <script src="<?= base_url() ?>assets/wow.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.5/themes/odometer-theme-default.css"
        integrity="sha512-kMPqFnKueEwgQFzXLEEl671aHhQqrZLS5IP3HzqdfozaST/EgU+/wkM07JCmXFAt9GO810I//8DBonsJUzGQsQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="main-contents">
        <!-- header desktop -->
        <div class="container-fluid d-flex justify-content-between mb-3 p-0">
            <img class="header-frame" src="<?= base_url()?>assets/img/left-frame.png" alt="frame-left">
            <div class="d-flex justify-content-center main-header">
                <img src="<?= base_url()?>assets/img/icon-header.png">
                <a class="header-brand" href="<?=base_url('/')?>">Hezel's <span class="dark-purple">Page</span></a>
            </div>
            <img class="header-frame" src="<?= base_url()?>assets/img/right-frame.png" alt="frame-left">
        </div>

        <div class="text-center text-dark d-flex justify-content-around p-2 header-link desktop-link">
            <a class="links" href="<?= base_url('/')?>"><i class="ri-home-5-line"></i>Home</a>
            <a class="links" href="<?= base_url('about-dzkyhzl')?>"><i class="ri-user-line"></i>Me</a>
            <a class="links" href="<?= base_url('dzkyhzl-artworks')?>"><i class="ri-artboard-line"></i>Artworks</a>
            <a class="links" href="<?= base_url('dzkyhzl-commission')?>"><i class="ri-store-2-line"></i>Commission</a>
        </div>
        <!-- header desktop end -->

        <!-- header mobile -->
        <div class="d-flex pb-3 mobile-link">
            <a href="<?= base_url('/')?>"><i class="ri-home-5-line"></i></a>
            <a href="<?= base_url('about-dzkyhzl')?>"><i class="ri-user-line"></i></a>
            <a href="<?= base_url('dzkyhzl-artworks')?>"><i class="ri-artboard-line"></i></a>
            <a href="<?= base_url('dzkyhzl-commission')?>"><i class="ri-store-2-line"></i></a>
        </div>
        <!-- header mobile end -->

        <!-- back to top btn -->
        <button onclick="topFunction()" id="btn-backtoTop" class="btn btn-primary btn-toTop">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!-- back to top btn end -->

        <style>
        .navbar-toggler {
            border: none;
        }

        .navbar {
            z-index: 2;
        }

        @media (min-width: 768px) {
            .container-fluid {
                padding: 0px 50px 0px 50px;
            }

            .navbar-brand {
                padding-left: 20px;
            }
        }

        /* .navbar{
        -webkit-mask-image: linear-gradient(to bottom, rgba(0,0,0,1), rgba(0,0,0,0));
        -webkit-mask-size: 100% 50%;
        -webkit-mask-repeat: no-repeat;
        -webkit-mask-position: top;
    } */
        </style>

        <script>
        let btnToTop = document.getElementById("btn-backtoTop");

        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                btnToTop.style.display = "block";
            } else {
                btnToTop.style.display = "none";
            }
        };
        function topFunction() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        </script>