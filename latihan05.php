<?php
    $age =array("peter"=>"35","Ben"=>37,"joe"=>"45");
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($age);