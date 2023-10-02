<?php
    abstract class BangunDatar{
        abstract public function hitungLuas();
    }

    class Persegi extends BangunDatar{
        private $sisi;

        public function __construct($sisi)
        {
            $this->sisi = $sisi;
        }

        public function hitungLuas(){
            return $this->sisi * $this->sisi;
        }
    }

    function hitungLuasBangunDatar(BangunDatar $bangunDatar){
        return $bangunDatar->hitungLuas();
    }

    $persegi = new Persegi(9);

    echo "Luas Persegi adalah : " . hitungLuasBangunDatar($persegi);
?>