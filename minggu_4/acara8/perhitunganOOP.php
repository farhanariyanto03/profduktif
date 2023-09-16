<?php
    class kalkulator{
        private $angka1;
        private $angka2;

        // Konstruktor untuk menginisialisasi angka1 dan angka2
        public function __construct($angka1, $angka2){
            $this->angka1 = $angka1;
            $this->angka2 = $angka2;
        }
        // Metode untuk menjumlahkan dua angka
        public function tambah(){
            return $this->angka1 + $this->angka2;
        }

        // Metode untuk mengurangkan dua angka
        public function pengurangan(){
            return $this->angka1 - $this->angka2;
        }

        // Metode untuk perkalian dua angka
        public function perkalian(){
            return $this->angka1 * $this->angka2;
        }

        //Metode untuk pembagian dua angka
        public function pembagian() {
            return $this->angka2 / $this->angka2;
        }
    }

    //Membuat object
    $kalkulator = new Kalkulator(5,10);

    //Melakukan deklarasi perhitungan
    $hasilTambah = $kalkulator->tambah();
    $hasilPengurangan = $kalkulator->pengurangan();
    $hasilPerkalian = $kalkulator->perkalian();
    $hasilPembagian = $kalkulator->pembagian();

    // Menampilkan hasil perhitungan
    echo "Hasil Penjumlahan: " . $hasilTambah . "<br>";
    echo "Hasil Pengurangan: " . $hasilPengurangan . "<br>";
    echo "Hasil Perkalian: " . $hasilPerkalian . "<br>";
    echo "Hasil Pembagian: " . $hasilPembagian . "<br>";
?>