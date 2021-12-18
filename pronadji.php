<?php

require 'init.php';

$ustanova = $_GET['ustanova'];
$sort = $_GET['sort'];

$ustanove = $broker->pronadji($ustanova, $sort);

foreach ($ustanove as $ustanova){

    $fill = ((bool) $ustanova->paketicZaDecake) ? 'fill' : 'line';

    ?>

    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box">
            <div class="icon"><i class="ri-gift-<?= $fill ?>"></i></div>
            <h4 class="title"><a href=""><?= $ustanova->nazivUstanove ?></a></h4>
            <h6><?= $ustanova->cenaPaketica ?> rsd</h6>
            <p class="description"><?= $ustanova->sastojci ?></p>
        </div>
    </div>
<?php

}