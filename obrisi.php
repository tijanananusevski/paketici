<?php

require 'init.php';

$paketic = $_POST['paketic'];

$uspesno = $broker->obrisi($paketic);

if($uspesno){
    echo "Obrisali ste paketic";
}else{
    echo "Neuspesano brisanje paketica!";
}
