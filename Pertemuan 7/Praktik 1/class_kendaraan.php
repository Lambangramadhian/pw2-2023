<?php
CLASS Kendaraan {
    PROTECTED $jenis;
    PROTECTED $bahanBakar;

    PROTECTED FUNCTION __CONSTRUCT ($jenis, $bahanBakar) {
        $this->jenis = $jenis;
        $this->bahanBakar = $bahanBakar;
    }

    PROTECTED FUNCTION getInfo () {
        echo "Jenis Kendaraan: " . $this->jenis . "<br>";
        echo "Bahan Bakar: " . $this->bahanBakar . "<br>";
    } 
}

CLASS Motor EXTENDS Kendaraan {
    PUBLIC $roda;

    PUBLIC FUNCTION __CONSTRUCT ($jenis, $bahanBakar, $roda) {
        PARENT::__CONSTRUCT ($jenis, $bahanBakar);
        $this->roda = $roda;
    }

    PUBLIC FUNCTION getInfo () {
        PARENT::getInfo ();
        echo "Jumlah Roda: " . $this->roda . "<br>";
    }
}

CLASS Submarine EXTENDS Kendaraan {
    PUBLIC $maks_kedalaman;

    PUBLIC FUNCTION __CONSTRUCT ($jenis, $bahanBakar, $max_depth) {
        PARENT::__CONSTRUCT ($jenis, $bahanBakar);
        $this->maks_kedalaman = $max_depth;
    }

    PUBLIC FUNCTION getInfo () {
        PARENT::getInfo ();
        echo "Jumlah Kedalaman: ". $this->maks_kedalaman . " meter <br>";
    }
}
?>