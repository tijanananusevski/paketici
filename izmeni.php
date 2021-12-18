<?php

require 'init.php';

$paketic = $_POST['paketic'];
$sastojci = $_POST['sastojci'];

$uspesno = $broker->izmeni($paketic, $sastojci);

if($uspesno){
    echo "Hvala Vam, izmenili ste paketic";
}else{
    echo "Neuspesana izmena paketica!";
}
