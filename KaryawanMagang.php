<?php
// KaryawanMagang.php
require_once 'Karyawan.php';

class KaryawanMagang extends Karyawan {
    // Properti tambahan spesifik
    private $uangSakuBulanan;
    private $sertifikatKampusMerdeka;

    // Constructor
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerhari, $uangSakuBulanan, $sertifikatKampusMerdeka) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerhari);
        $this->uangSakuBulanan = $uangSakuBulanan;
        $this->sertifikatKampusMerdeka = $sertifikatKampusMerdeka;
    }

    // Implementasi hitungGajiBersih()
    public function hitungGajiBersih() {
        // Anak magang mendapatkan akumulasi (hari kerja * gaji dasar harian) + uang saku bulanan tetap
        return ($this->hariKerjaMasuk * $this->gajiDasarPerhari) + $this->uangSakuBulanan;
    }

    // Implementasi tampilkanProfilKaryawan()
    public function tampilkanProfilKaryawan() {
        echo "=== PROFIL KARYAWAN MAGANG ===<br>";
        echo "ID: " . $this->id_karyawan . "<br>";
        echo "Nama: " . $this->nama_karyawan . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
        echo "Sertifikat: " . $this->sertifikatKampusMerdeka . "<br>";
        echo "Uang Saku Bulanan: Rp " . number_format($this->uangSakuBulanan, 0, ',', '.') . "<br>";
        echo "Total Gaji/Uang yang Diterima: Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br><br>";
    }
}
?>