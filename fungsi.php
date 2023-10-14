<?php

function hanyaAngka($input) {
    $filterInput = preg_replace("/[^0-9]/","",$input);

    return $filterInput;
}
function cekId($input) {
    if (ctype_digit($input)) {
        return true;
    }
    else {
        return false;
    }
}

?>