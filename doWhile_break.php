<?php
    $i = 1;
    while($i <= 10){
        echo "<h1>Ini Mahasiswa ke-" .$i;
        if($i==5){
            break;
        }
        $i++;
    }
?>