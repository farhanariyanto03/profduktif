<?php
    interface BangunDatar {
        public function hitungLuas();
    }
    
    class Persegi implements BangunDatar {
        private $sisi;
    
        public function __construct($sisi) {
            $this->sisi = $sisi;
        }
    
        public function hitungLuas() {
            return $this->sisi * $this->sisi;
        }
    }
    
    class Segitiga implements BangunDatar {
        private $alas;
        private $tinggi;
    
        public function __construct($alas, $tinggi) {
            $this->alas = $alas;
            $this->tinggi = $tinggi;
        }
    
        public function hitungLuas() {
            return 0.5 * $this->alas * $this->tinggi;
        }
    }
    
    class Lingkaran implements BangunDatar {
        private $jari;
    
        public function __construct($jari) {
            $this->jari = $jari;
        }
    
        public function hitungLuas() {
            return M_PI * $this->jari * $this->jari;
        }
    }
    
    function hitungLuasBangunDatar(BangunDatar $bangunDatar) {
        return $bangunDatar->hitungLuas();
    }
    
    $persegi = new Persegi(5);
    $segitiga = new Segitiga(4, 6);
    $lingkaran = new Lingkaran(3);
    
    echo "Luas Persegi: " . hitungLuasBangunDatar($persegi) . "<br>";
    echo "Luas Segitiga: " . hitungLuasBangunDatar($segitiga) . "<br>";
    echo "Luas Lingkaran: " . hitungLuasBangunDatar($lingkaran) . "<br>";    
?>