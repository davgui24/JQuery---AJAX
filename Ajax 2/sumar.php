<?php


$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

$suma = $n1+$n2;
$resta = $n1-$n2;

// echo $suma;

echo json_encode(array("suma"=>$suma,"resta"=>$resta));