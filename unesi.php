<?php

require 'init.php';

$ustanova = $_POST['ustanova'];
$cena = $_POST['cena'];
$decak = $_POST['decak'];
$sastojci = $_POST['sastojci'];

$uspesno = $broker->unesi($ustanova, $cena, $decak, $sastojci);

if($uspesno){
    echo "Hvala Vam, uneli ste paketic";
}else{
    echo "Neuspesan unos paketica!";
}
