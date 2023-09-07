<?php
    $jumlahStok = 10;
    $pembelian = 5;

    if($jumlahStok <= 0) {
        echo "<h1>Stok sudah habis</h1>";
    }else if($jumlahStok <= $pembelian) {
        echo "<h1>Jumlah stok kurang</h1>";
    }else {
        echo "<h1>Stok masih aman</h1>";
    }
?>
