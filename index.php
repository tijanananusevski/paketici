<?php

require 'init.php';

$ustanove = $broker->getUstanove();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Paketici</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo"><a href="index.php">Paketici</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Paketici</a></li>
                <li><a class="nav-link scrollto" href="#unos">Unesi</a></li>
                <li><a class="nav-link scrollto" href="#services">Izmeni</a></li>
                <li><a class="nav-link scrollto o" href="#portfolio">Obrisi</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>

<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1>Novogodisnji paketici</h1>
                <h2>Da svako dete dobije poklon za Novu godinu</h2>
            </div>
        </div>
    <hr>
        <div class="row">
            <div class="col-md-6">
                <label for="ustanovaPretraga">Ustanova</label>
                <select id="ustanovaPretraga" class="form-control">
                    <option value="-1">Sve ustanove</option>
                    <?php

                    foreach ($ustanove as $ustanova){
                        ?>
                    <option value="<?= $ustanova->ustanovaID ?>"><?= $ustanova->nazivUstanove ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="col-md-6">
                <label for="sort">Sortiranje po ceni paketica</label>
                <select id="sort" class="form-control">
                    <option value="asc">Od manje cene ka vecoj</option>
                    <option value="desc">Od vece cene ka manjoj</option>
                </select>
            </div>

            <div class="col-md-12" style="padding-top: 15px;">
                <button class="btn btn-primary" onclick="pronadji()">Pronadji paketice</button>
            </div>
        </div>

        <div class="row icon-boxes" id="box">

        </div>
    </div>
</section>

<main id="main">

    <section id="unos" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Novi paketic</h2>
                <p id="porukaUnos"></p>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="ustanova">Ustanova</label>
                    <select id="ustanova" class="form-control">
                        <?php

                        foreach ($ustanove as $ustanova){
                            ?>
                            <option value="<?= $ustanova->ustanovaID ?>"><?= $ustanova->nazivUstanove ?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-12">
                    <label for="cena">Cena paketica</label>
                    <input type="number" id="cena" class="form-control">
                </div>
                <div class="col-md-12">
                    <label for="decak">Pol</label>
                    <select id="decak" class="form-control">
                        <option value="1">Paketic za decake</option>
                        <option value="0">Paketic za devojcice</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="sastojci">Sastojci paketica</label>
                    <textarea id="sastojci" rows="5" class="form-control"></textarea>
                </div>
                <hr>
                <div class="col-md-12">
                    <button class="btn btn-primary" onclick="unesi()">Unesi paketic</button>
                </div>
            </div>

        </div>
    </section>

</main>

<footer id="footer">

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Tijaniji paketici</span></strong>. Spremljeni sa ljubavlju &#10084;
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/jquery.js"></script>

<script src="assets/js/main.js"></script>

<script>
    function pronadji(){
        let ustanova = $("#ustanovaPretraga").val();
        let sort = $("#sort").val();

        $.ajax({
            url: 'pronadji.php',
            type: 'get',
            data: {
                ustanova: ustanova,
                sort: sort
            },
            success: function (podaciSaPronadjiStranice){
                $("#box").html(podaciSaPronadjiStranice);
            }
        })
    }

    pronadji();

    function unesi(){
        let ustanova = $("#ustanova").val();
        let cena = $("#cena").val();
        let sastojci = $("#sastojci").val();
        let decak = $("#decak").val();

        $.ajax({
            url: 'unesi.php',
            type: 'post',
            data: {
                ustanova: ustanova,
                cena: cena,
                sastojci: sastojci,
                decak: decak
            },
            success: function (poruka){
                $("#porukaUnos").html(poruka);
                pronadji();
            }
        })

    }
</script>

</body>

</html>