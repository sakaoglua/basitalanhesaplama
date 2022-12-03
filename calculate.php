<?php 
class Calculate{
    public $kenar1;
    public $kenar2;
    public $kenar3;
    public $yukseklik;
    

    
}
class Dikdortgen extends Calculate{
    public function AlanD($kenar1,$kenar2){
        return $kenar1 * $kenar2;
    }
    public function CevreD($kenar1,$kenar2){
        return ((2 * $kenar1) + (2 * $kenar2));
    }

}
class Ucgen extends Calculate{
    public function AlanU($kenar3,$yukseklik){
        return (($kenar3*$yukseklik) / 2);
    }
    public function CevreU($kenar1,$kenar2,$kenar3){
        return $kenar1+$kenar2+$kenar3;
    }

}
class Kare extends Calculate{
    public function AlanK($kenar1){
        return $kenar1*$kenar1;
    }
    public function CevreK($kenar1){
        return $kenar1*4;
    }
}
$hesapD = new Dikdortgen();
echo $hesapD->AlanD(5, 10);
echo "<br>";
echo $hesapD->CevreD(5,10);
echo "<br>";
$hesapU = new Ucgen();
echo $hesapU->AlanU(12, 2);
echo "<br>";
echo $hesapU->CevreU(3, 4, 5);
echo "<br>";
$hesapK = new Kare();
echo $hesapK->AlanK(5);
echo "<br>";
echo $hesapK->CevreK(5);
?>
