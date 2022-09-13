<?php

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];

$res=pow($a,3) + ($b*$c) - ($a/$c);

$result = [
    'a' => $a,
    'b' => $b,
    'c' => $c,
    'result' => $res
];

echo json_encode($result);

?>