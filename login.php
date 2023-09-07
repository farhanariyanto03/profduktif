<?php
    $username = "farhan";
    $password = "1234";
    $inputusername = "farhan";
    $inputpassword = "1234";

    if($inputusername === $username && $inputpassword === $password){
        echo "<h1>";
        echo "Selamat datang " .$username;
        echo "</h1>";
    }else{
        echo "<h1>";
        echo "username atau password anda salah";
        echo "</h1>";
    }
?>