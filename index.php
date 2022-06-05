<?php

$a = $_GET ['a'];
$b = $_GET ['b'];
$c = $a + $b;

$reply = [
    'a' => $a,
    'b' => $b,
    'hasil' => $c
];
header('Content-Type: application/json');
echo json_encode($reply);