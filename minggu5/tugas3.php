<?php
    class Tablet {
        protected $merk;
        protected $camera;
        protected $memory;
    
        public function __construct($merk, $camera, $memory) {
            $this->merk = $merk;
            $this->camera = $camera;
            $this->memory = $memory;
        }
    
        protected function getInfo() {
            return "Merk: {$this->merk}, Kamera: {$this->camera} MP, Memory: {$this->memory} GB";
        }
    }
    
    class Handphone extends Tablet {
        private $handphone_baru;
    
        public function __construct($merk, $camera, $memory, $handphone_baru) {
            parent::__construct($merk, $camera, $memory);
            $this->handphone_baru = $handphone_baru;
        }
    
        public function beli_handphone() {
            return "Beli Handphone {$this->handphone_baru}";
        }
    
        public function showTabletInfo() {
            return $this->getInfo();
        }
    }
    
    $tablet = new Tablet("Samsung", 12, 64);
    $handphone = new Handphone("Apple", 16, 128, "iPhone 13");
    
    // Ini akan menghasilkan error karena getInfo() adalah protected.
    // echo $tablet->getInfo() . "<br>";
    
    // Namun, kita dapat mengaksesnya melalui metode di kelas anak.
    echo $handphone->showTabletInfo() . "<br>";
    
    echo $handphone->beli_handphone() . "<br>";

    
    // class Tablet {
    //     private $merk;
    //     private $camera;
    //     private $memory;
    
    //     public function __construct($merk, $camera, $memory) {
    //         $this->merk = $merk;
    //         $this->camera = $camera;
    //         $this->memory = $memory;
    //     }
    
    //     private function getInfo() {
    //         return "Merk: {$this->merk}, Kamera: {$this->camera} MP, Memory: {$this->memory} GB";
    //     }
    
    //     public function showTabletInfo() {
    //         return $this->getInfo();
    //     }
    // }
    
    // class Handphone extends Tablet {
    //     private $handphone_baru;
    
    //     public function __construct($merk, $camera, $memory, $handphone_baru) {
    //         parent::__construct($merk, $camera, $memory);
    //         $this->handphone_baru = $handphone_baru;
    //     }
    
    //     public function beli_handphone() {
    //         return "Beli Handphone {$this->handphone_baru}";
    //     }
    // }
    
    // $tablet = new Tablet("Samsung", 12, 64);
    // $handphone = new Handphone("Apple", 16, 128, "iPhone 13");
    
    // // Ini akan menghasilkan error karena getInfo() adalah private.
    // // echo $tablet->getInfo() . "<br>";
    
    // // Namun, kita dapat mengaksesnya melalui metode di kelas anak.
    // echo $tablet->showTabletInfo() . "<br>";
    
    // echo $handphone->beli_handphone() . "<br>";
    
    // class Tablet {
    //     public $merk;
    //     public $camera;
    //     public $memory;
    
    //     public function __construct($merk, $camera, $memory) {
    //         $this->merk = $merk;
    //         $this->camera = $camera;
    //         $this->memory = $memory;
    //     }
    
    //     public function getInfo() {
    //         return "Merk: {$this->merk}, Kamera: {$this->camera} MP, Memory: {$this->memory} GB";
    //     }
    // }
    
    // class Handphone extends Tablet {
    //     public $handphone_baru;
    
    //     public function __construct($merk, $camera, $memory, $handphone_baru) {
    //         parent::__construct($merk, $camera, $memory);
    //         $this->handphone_baru = $handphone_baru;
    //     }
    
    //     public function beli_handphone() {
    //         return "Beli Handphone {$this->handphone_baru}";
    //     }
    // }
    
    // $tablet = new Tablet("Samsung", 12, 64);
    // $handphone = new Handphone("Apple", 16, 128, "iPhone 13");
    
    // echo $tablet->getInfo() . "<br>";
    // echo $handphone->getInfo() . "<br>";
    // echo $handphone->beli_handphone() . "<br>";
?>