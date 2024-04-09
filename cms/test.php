<?php

include '../backend/cms/cms-includes/config.php';

$arrlist = $_POST['arrcout'];
$lenght = strlen($arrlist);

for($i=0; $i<$lenght; $i+=2){
    echo "Data for " . $arrlist[$i] . " \r\n\n";
    $gcd = getSpecificCourseData($arrlist[$i]);
    echo $gcd[1];
}

$gcd = getSpecificCourseData(6);
echo $gcd[1];
