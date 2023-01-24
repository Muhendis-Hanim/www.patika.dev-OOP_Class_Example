<?php

abstract class Sekil
{
    public $kenar1;
    public $kenar2;

    abstract public function alanHesapla($kenar1, $kenar2);

    abstract public function cevreHesapla($kenar1, $kenar2);

}

class Dikdörtgen extends Sekil
{
    public function alanHesapla($deger1, $deger2)
    {
        $this->deger1 = $deger1;
        $this->deger2 = $deger2;
        return $deger1 * $deger2;
    }

    public function cevreHesapla($deger1, $deger2)
    {
        return (($deger1 * 2) + ($deger2 * 2));
    }
}

class Kare extends Sekil
{
    public function alanHesapla($deger1, $deger2)
    {
        $this->deger1 = $deger1;
        $this->deger2 = $deger2;
        return $deger1 * $deger2;
    }

    public function cevreHesapla($deger1, $deger2)
    {
        return ($deger1 * 4);
    }
}

class Ucgen
{
    public function alanHesapla($kenar1, $kenar2, $kenar3)
    {
        return ($kenar1 * $kenar2) / 2;
    }

    public function cevreHesapla($kenar1, $kenar2, $kenar3)
    {
        return ($kenar1 + $kenar2 + $kenar3);
    }
}

$deger = new Dikdörtgen();
echo "Dikdörtgen alanı: " . $deger->alanHesapla(4, 6) . "<br>";
echo "Dikdörtgen çevresi: " . $deger->cevreHesapla(4, 6) . "<br>";

$deger = new Kare();
echo "Karenin alanı: " . $deger->alanHesapla(5, 5) . "<br>";
echo "Karenin çevresi: " . $deger->cevreHesapla(5, 5) . "<br>";

$deger = new Ucgen();
echo "Üçgenin alanı: " . $deger->alanHesapla(3, 4, 5) . "<br>";
echo "Üçgenin çevresi: " . $deger->cevreHesapla(3, 4, 5) . "<br>";


