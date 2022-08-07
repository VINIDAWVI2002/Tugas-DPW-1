<?php

echo "Hewan";
echo "<hr>";

class Hewan {
    public $jumlah_kaki,$bisa_terbang;
}

class Kucing extends Hewan {
    function bersuara()
    {
        return "meong meong meong";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Anjing extends Hewan {
    function bersuara()
    {
        return "guk guk guk";
    }
    function bisa_terbang()
    {
        return "Tidak Bisa Terbang";
    }
}

class Elang extends Hewan {
    function bersuara()
    {
        return "miiip miiip miiip";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

class Angsa extends Hewan {
    function bersuara()
    {
        return "kwaak kwaak kwaak";
    }
    function bisa_terbang()
    {
        return "Bisa Terbang";
    }
}

$Miming = new Kucing;
$Miming->jumlah_kaki = 4;
echo "Miming adalah Kucing <br>";
echo "Punya Kaki Sebanyak: " .$Miming->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Miming->bisa_terbang()."<br>";
echo "Bersuara: " .$Miming->bersuara()."<br>";

echo "<hr>";

$Memei = new Anjing;
$Memei->jumlah_kaki = 4;
echo "Memei Adalah Anjing <br>";
echo "Punya Kaki Sebanyak: " .$Memei->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Memei->bisa_terbang()."<br>";
echo "Bersuara: " .$Memei->bersuara()."<br>";

echo "<hr>";

$Coco = new Elang;
$Coco->jumlah_kaki = 2;
echo "Coco Adalah Elang <br>";
echo "Punya Kaki Sebanyak: " .$Coco->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Coco->bisa_terbang()."<br>";
echo "Bersuara: " .$Coco->bersuara()."<br>";

echo "<hr>";

$Bubu = new Angsa;
$Bubu->jumlah_kaki = 2;
echo "Bubu Adalah Angsa <br>";
echo "Punya Kaki Sebanyak: " .$Bubu->jumlah_kaki."<br>";
echo "Bisa Terbang: " .$Bubu->bisa_terbang()."<br>";
echo "Bersuara: " .$Bubu->bersuara()."<br>";

echo "<hr>";

?>