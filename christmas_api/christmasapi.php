<?php

$date=$_GET['date'];
$strdate=strtotime($date);
$christmas_date='2022-12-24';
$str_christmas_date=strtotime($christmas_date);

$days= ($str_christmas_date-$strdate)/86400;

$result = [
    'date' => $date,
    'days' => $days
];

echo json_encode($result);

?>