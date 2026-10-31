<?php

class produk {
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    // Constructor
    public function __construct(string $kode, string $nama, int $harga, int $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Method pajak
    public function pajak() {
        return self::PAJAK * 100;
    }

    // Method total harga
    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

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