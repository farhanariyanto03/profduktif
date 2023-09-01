<?php 
    echo "<h1>";
    $x = 5985;
    var_dump($x);
    echo "<br>";
    $x = -345; //negative number
    var_dump($x);
    echo "<br>";
    $x = 0x8C; //hexadecimal number
    var_dump($x);
    echo "<br>";
    $x = 047; //octal number
    var_dump($x);
    echo "<br>";
    $x = 10.365;
    var_dump($x);
    echo "<br>";
    $x = 2.4e3;
    var_dump($x);
    echo "<br>";
    $x = 8E-5;
    var_dump($x);
    echo strlen("Hello world!");
    echo strpos("Hello world!","world");
    echo "</h1>";
?>