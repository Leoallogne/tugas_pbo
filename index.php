<?php

class LuasLingkaran {

    public const phi = 3.14;
    public int $jari;

    public function tampil() {
        $rumus = LuasLingkaran::phi * 
        ($this->jari * $this->jari);
        echo "hasil nya adalah = " . $rumus;
    }

}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 12;
$lingkaran->tampil();

?>


