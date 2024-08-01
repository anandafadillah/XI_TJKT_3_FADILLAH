<?php

// jualan produk
// musik
// game
// buku

class Produk{
    //property
    public $judul,
           $penulis,
           $penerbit,
           $harga;
    //Constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    
    //Method 
    public function getData(){
        return "$this->penulis, $this->penerbit";
    }  

}

//Object-type
class infoProduk{
    //method untuk mencetak info produk
    public function getInfoProduk( Produk $produk ){
        $data = "{$produk->judul} | {$produk->getData()} (Rp.{$produk->harga})";
        return $data;
    }
}

$produk1 = new Produk("MARS CYBER","UST MUIN", "Cyber Musicality", 100000);
$produk2 = new Produk("Mobile Legend", "Moonton", "Game com" , 100000);


echo "Musik : " . $produk1->getData();
echo "<br/>";
echo "Game : " . $produk2->getData();
echo "<br/>";

$infoProduk1 = new infoProduk();
echo $infoProduk1->getInfoProduk($produk1);
echo "<br/>";
echo $infoProduk1->getInfoProduk($produk2);

//Musik : MARS CYBER | UST MUIN, Cyber Musicality (Rp.100000)- 3 menit
//Game : Mobile Legend | Moonton, Game com (Rp.100000) - 2000 jam

