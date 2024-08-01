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
           $harga,
           $durasi,
           $waktuMain,
           $tipe;
    //Constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0, $durasi = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->durasi = $durasi;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }
    
    //Method 
    public function getData(){
        return "$this->penulis, $this->penerbit";
    }
    
    //Method Untuk Mencetak Info Lengkap produk
    public function getInfoLengkap(){
    //Game : Mobile Legend | Moonton, Game com (Rp.100000) - 2000 jam
        $data = "{$this->tipe} : {$this->judul} | {$this->getData()} (Rp. {$this->harga}) ";
        if ($this->tipe == "Game")
        {
            $data .= " - {$this->waktuMain} JAM";
        }elseif($this->tipe == "Musik")
        {
            $data .= " - {$this->durasi} Menit";
        }
        return $data;
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

$produk1 = new Produk("MARS CYBER","UST MUIN", "Cyber Musicality", 100000,5);
$produk2 = new Produk("Mobile Legend", "Moonton", "Game com" , 100000);



//Musik : MARS CYBER | UST MUIN, Cyber Musicality (Rp.100000)- 3 menit
//Game : Mobile Legend | Moonton, Game com (Rp.100000) - 2000 jam

