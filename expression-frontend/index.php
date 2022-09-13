<?php

if (isset($_POST['submit'])){
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    $c=$_POST['num3'];
}
$res=pow($a,3) + ($b*$c) - ($a/$c);

$result = [
    'a' => $a,
    'b' => $b,
    'c' => $c,
    'result' => $res
];

echo json_encode($result);

?>