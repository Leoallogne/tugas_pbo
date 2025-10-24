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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>