<?php

class Produk {

     //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;

    public function pajak () {
        return  self::PAJAK * 100; //11% 
    }

    public function total(){
        return $this->harga + ($this->harga * self::PAJAK);
    }

}

//object
$product = new Produk();
$product->kode = 'P0001';
$product->nama = 'laptop';
$product->harga = '10000000';
$product->stok = '5';



//hasil
echo "Product: ". $product->nama;
echo "<br>";
echo "harga: Rp. ". $product->harga;
echo "<br>";
echo "stok: ". $product->stok;
echo "<br>";
echo "Pajak: ". $product->pajak(). "%";
echo "<br>";
echo "total harga setelah pajak: Rp.". $product->total();