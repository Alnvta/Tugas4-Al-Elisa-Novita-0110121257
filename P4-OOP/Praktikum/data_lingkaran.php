<?php
    require_once ("class_lingkaran.php");

    $lingkar1 = new Lingkaran( 5 );
    $lingkar2 = new Lingkaran( 10 );

    echo "Luas Lingkaran 1: " .$lingkar1->getLuas() ."<br>";
    echo "Luas Lingkaran 2: " .$lingkar2->getLuas() ."<br>";
    
    echo "Keliling Lingkaran 1: " .$lingkar1->getKeliling() ."<br>";
    echo "Keliling Lingkaran 2: " .$lingkar2->getKeliling() ."<br>";
?>