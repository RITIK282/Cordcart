<?php

include '../cms/cms-includes/config.php';

if(isset($_POST['finalCheckout'])){
    $arrc = $_POST['arrc'];
    $len = strlen($arrc);
    for($j=0; $j<$len; $j+=2){
        $uid = $_SESSION['userId'];
        echo entryCourse($arrc[$j], $uid);
    }
    header("Location: ../../cms/mycourses.php?err=&success=purchaseSuccess");
    exit();
}else{
    header("Location: ../../test.html?err=unauthorized");
    exit();
}