<?php
    class itemProduk{
        protected $ukuran;
        protected $warna;
        protected $nama;

        public function setUkuran($ukuran) {
            $this->ukuran = $ukuran;
        }
        public function getUkuran($ukuran) {
            return $this->ukuran;
        }
        public function setWarna($warna) {
            $this->warna = $warna;
        }
        public function getWarna($warna) {
            return $this->warna;
        }
        public function setNama($nama) {
            $this->nama = $nama;
        }
        public function getnama($nama) {
            return $this->nama;
        }
    }

    class topi extends itemProduk{
        private $model;

        public function setModel($model) {
            $this->model = $model;
        }
        public function getModel($model) {
            return $this->model;
        }
        public function getInfo() {
            return "Topi: <br> Model = {$this->model} <br> Ukuran = {$this->ukuran} <br> Warna = {$this->warna} <br> Nama = {$this->nama} <br><br>";
        }
    }

    class celana extends itemProduk{
        private $tipe;
        private $model;

        public function setTipe($tipe) {
            $this->tipe = $tipe;
        }
        public function getTipe($tipe) {
            return $this->$tipe;
        }
        public function setModel($model) {
            $this->model = $model;
        }
        public function getModel($model) {
            return $this->model;
        }

        public function getInfo(){
            return "Celana: <br> Tipe = {$this->tipe} <br> Model = {$this->model} <br> Ukuran = {$this->ukuran} <br> Warna = {$this->warna} <br> Nama = {$this->nama} <br><br>";
        }
    }

    class baju extends itemProduk{
        private $tipe;

        public function setTipe($tipe) {
            $this->tipe = $tipe;
        }

        public function getTipe($tipe) {
            return $this->tipe;
        }

        public function getInfo(){
            return "Baju <br> Tipe = {$this->tipe} <br> Ukuran = {$this->ukuran} <br> Warna = {$this->warna} <br> Nama = {$this->nama}";
        }
    }

    // Contoh penggunaan kelas-kelas di atas
    $topi  = new topi();
    $topi->setUkuran('L');
    $topi->setWarna('Merah');
    $topi->setNama('Topi Olahraga');
    $topi->setModel('Snapback');
    echo $topi->getInfo();

    $celana = new celana();
    $celana->setTipe("Jeans");
    $celana->setModel("Slim Fit");
    $celana->setUkuran("30");
    $celana->setWarna("Biru");
    $celana->setNama("Celana Santai");
    echo $celana->getInfo();

    $baju = new Baju();
    $baju->setTipe("Kemeja");
    $baju->setUkuran("L");
    $baju->setWarna("Putih");
    $baju->setNama("Kemeja Formal");
    echo $baju->getInfo();
?>