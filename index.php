<?php

$string=$_GET['string'];
$palindrome='';

if ($string == strrev($string)){
    $palindrome = 'TRUE';
}

else{
    $palindrome = 'FALSE';
}

$result = [
    'string' => $string,
    'palindrome' => $palindrome
];

echo json_encode($result);

?>