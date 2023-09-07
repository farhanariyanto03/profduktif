<?php
$menu = "Nasi Goreng";
switch ($menu) {
    case "Nasi Goreng":
        echo "<h1>";
        echo "Anda memesan Nasi Goreng. Harganya Rp 12.000";
        echo "</h1>";
        break;
    case "Nasi Pecel":
        echo "<h1>";
        echo "Anda memesan Nasi Pecel. Harganya Rp 10.000";
        echo "</h1>";
        break;
    case "Bakso":
        echo "<h1>";
        echo "Anda memesan Bakso. Harganya Rp 10.000";
        echo "</h1>";
        break;
    case "Mie Ayam":
        echo "<h1>";
        echo "Anda memesan Mie Ayam. Harganya Rp 8.000";
        echo "</h1>";
        break;
    case "Ayam Bakar":
        echo "<h1>";
        echo "Anda memesan Ayam. Harganya Rp 15.000";
        echo "</h1>";
        break;
    default:
        echo "<h1>";
        echo "Masukkan angka sesuai dengan menu yang ada";
        echo "</h1>";
        break;
}
