<?php

use Lingkaran as GlobalLingkaran;

    interface Tanah {
        public function hitungLuas();
    }

    abstract class Bibit {
        abstract public function ditanami();
    }

    class Lingkaran extends Bibit implements Tanah {
        private $jariJari;
        private $pi = 3.14;

        public function __construct($jariJari)
        {
            $this->jariJari = $jariJari;
        }

        // menhitung luas anah berbentuk lingkaran
        // implements method dari interface tanah
        public function hitungLuas()
        {
            return $this->jariJari * $this->jariJari * $this->pi;
        }

        // tanah ditanami kopi
        // extend method dari abstract class Bibit
        public function ditanami()
        {
            return "Ditanami Kopi";
        }
    }

    class PersegiPanjang extends Bibit implements Tanah {
        private $panjang;
        private $lebar;

        public function __construct($panjang, $lebar) 
        {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }

        // menghitung luas tanah berbentuk persegi panjang
        // implement method dari interface tanah
        public function hitungLuas()
        {
            return $this->panjang * $this->lebar;;
        }

        // tanah ditanami padi
        // extends ,ethod dari abstract class bibit
        public function ditanami()
        {
            return "Ditanami Padi";
        }
    }

    $tanahAgus = new Lingkaran(3);
    $tanahCandra = new PersegiPanjang(3,4);

    echo "Tanah Agus seluas " . $tanahAgus->hitungLuas() . "m2 \n";
    echo $tanahAgus->ditanami() . "\n \n <br>";

    echo "Tanah Candra seluas " . $tanahCandra->hitungLuas() . "m2 \n";
    echo $tanahCandra->ditanami() . "\n \n";
?>