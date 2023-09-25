<?php
    class mobilLengkap{
        
        public function nonton_tv(){
            return "TV dihidupkan";
        }
        public function cari_channel(){
            return "TV mencari channel";
        }
    }

    class mobilBWM extends mobilLengkap{

    }

    class mobilBMWberakasi extends mobilBWM{
        
        public function meonton_tv(){
            $this->nonton_tv();
            $this->cari_channel();
        }

        public function hidupkan_mobil(){
            return "Menghidupkan mobil";
        }

        public function matikan_mobil(){
            return "Matikan mobile";
        }

        public function ubah_gigi($ubah_gigi){
            return "gigi mobil bmw diubah menjadi " .$ubah_gigi;
        }
    }

    $mobil = new mobilBMWberakasi;
    echo $mobil -> nonton_tv() ."</br>";
    echo $mobil -> cari_channel() ."</br>";
    echo $mobil ->hidupkan_mobil() ."</br>";
    echo $mobil ->matikan_mobil() ."</br>";
    echo $mobil ->ubah_gigi(5) ."</br>";
?>