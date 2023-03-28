<?php
//PHP Multidimensional Arrays
//dimensi arry lebih dari satu dimensi (bisa dua dimensi,tiga dimensi,atau lebih)
$mhs = array (
    array("ardika","2234725","denpasar"),
    array("wahyu hidayat","22347067","malang"),
    array("santi Kirana","22347342","surabaya"),
    array("zizi","22347112","flores")
);
header('Content-Type: application/json; charset=utf-8');
echo json_encode($mhs);