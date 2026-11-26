<?php

namespace Produk;

class produk {

    // Property (Encapsulation)
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;

    public const PAJAK = 0.11;

    // Constructor
    public function __construct(string $kode, string $nama, int $harga, int $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    // Getter
    public function getKode() {
        return $this->kode;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getHarga() {
        return $this->harga;
    }

    public function getStok() {
        return $this->stok;
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