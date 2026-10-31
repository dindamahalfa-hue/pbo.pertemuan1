<?php

require_once "Produk/Produk.php";

use Produk\produk;

// Membuat object
$produk = new produk("P0001", "Laptop", 10000000, 5);

// Hasil
echo "Kode Produk: " . $produk->kode;
echo "<br>";
echo "Produk: " . $produk->nama;
echo "<br>";
echo "Harga: Rp. " . $produk->harga;
echo "<br>";
echo "Stok: " . $produk->stok;
echo "<br>";
echo "Pajak: " . $produk->pajak() . "%";
echo "<br><br>";
echo "Total Harga Setelah Pajak: Rp. " . $produk->total();

?>