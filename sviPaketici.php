<?php

require 'init.php';

$paketici = $broker->pronadji(-1, 'asc');

foreach ($paketici as $paketic){
    ?>
    <option value="<?= $paketic->paketicID ?>"><?= $paketic->nazivUstanove . " " . $paketic->cenaPaketica . " rsd"  ?></option>
<?php
}