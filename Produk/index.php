<?php

require_once "Produk.php";

use Produk\produk;

// Membuat object
$produk = new produk("P0001", "Laptop", 10000000, 5);

// Hasil
echo "Kode Produk: " . $produk->getKode();
echo "<br>";

echo "Produk: " . $produk->getNama();
echo "<br>";

echo "Harga: Rp. " . $produk->getHarga();
echo "<br>";

echo "Stok: " . $produk->getStok();
echo "<br>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br><br>";

echo "Total Harga Setelah Pajak: Rp. " . $produk->total();

?>