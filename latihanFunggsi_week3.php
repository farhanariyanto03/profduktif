<?php
    echo "MEMBUAT FUNGSI <br>";
    function berhasil() { 
        echo "SELAMAT ANDA BERHASIL";
    };
    function gagal() {
        echo "MAAF ANDA GAAL";
    }
    $nilai = 90;
    if($nilai>=75) {
        berhasil();
    } else {
        gagal();
    };
    echo "<br>";
    echo "FUNGSI DENGAN PARAMETER ";
    function jumlah($a,$b) { //FUNGSI DENGAN 2 PARAMETER
        return $a+$b; //NILAI KEMBALI(RETURN VALUE)
    }
    $nilai1 = 10;
    $nilai2 = 15;
    echo jumlah($nilai1,$nilai2);//PASSING PARAMETER
    echo "<br>";

    echo "FUNGSI BAWAAN";
    $sekarang = getdate();
    print_r($sekarang);//HASILNYA BERUPA ARRAY
    echo "<br>";//AMBIL ELEMEN UNTUK MENAMPILKAN TANGGAL
    echo "Sekarang Tanggal :" .$sekarang["mday"];
?>