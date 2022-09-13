<?php

$password =$_POST['password'];

$length=strlen($password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

$strong=' ';

if($length <12 || !$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    $strong='no';
}

else{
    $strong='yes';
}

$pass=hash("sha256", $password);

$result = [
    'password' => $pass,
    'strong' => $strong
];

echo json_encode($result);

?>