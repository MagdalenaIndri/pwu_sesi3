<?php
    $buah =array("salak","duku","Rambutan","apel");

    print_r($buah); // untuk menampilkan pola arrray
     
    // perulangan foreach

    foreach($buah as $nval){
        echo "buah  ".$nval. "<br>";
    }
    echo "<hr>";
    echo "<o1>";
    foreach($buah as $nval){
        echo "<li>".$nval. "</li>";
    }
    echo "</o1>";