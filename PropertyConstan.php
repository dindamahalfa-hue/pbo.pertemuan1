<?php

class Product {

     //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    //constant
    public const PAJAK = 0.11;
}

//object
$product = new Product();
$product->kode = 'P0001';
$product->nama = 'laptop';
$product->harga = '10000000';
$product->stok = '5';

//hitung pajak 
$pajak = Product::PAJAK * 100; // 11
$jumlahPajak = $product->harga * Product::PAJAK; // 1,1 juta

//total
$total = $product->harga + $jumlahPajak;

//hasil
echo "Product: ". $product->nama;
echo "<br>";
echo "harga: Rp. ". $product->harga;
echo "<br>";
echo "stok: ". $product->stok;
echo "<br>";
echo "Pajak: ". $pajak. "%";
echo "<br>";
echo "total harga setelah pajak: Rp". $total;