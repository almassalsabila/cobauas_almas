<?php
// KaryawanMagang.php
require_once 'Karyawan.php';

class KaryawanMagang extends Karyawan {
    // 1. Properti tambahan spesifik magang
    private $uangSakuBulanan;
    private $sertifikatKampusMerdeka;

    // 2. Constructor untuk menerima data dari database
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerhari, $uangSakuBulanan, $sertifikatKampusMerdeka) {
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerhari);
        $this->uangSakuBulanan = $uangSakuBulanan;
        $this->sertifikatKampusMerdeka = $sertifikatKampusMerdeka;
    }

    // 3. Implementasi hitungGajiBersih() dengan potongan 20% (hanya ditulis 1 kali)
    public function hitungGajiBersih() {
        return ($this->hariKerjaMasuk * $this->gajiDasarPerhari) * 0.80;
    }

    // 4. Implementasi tampilkanProfilKaryawan()
    public function tampilkanProfilKaryawan() {
        echo "--- PROFIL KARYAWAN MAGANG ---<br>";
        echo "ID: " . $this->id_karyawan . "<br>";
        echo "Nama: " . $this->nama_karyawan . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
        echo "Sertifikat: " . $this->sertifikatKampusMerdeka . "<br>";
        echo "Uang Saku Bulanan: Rp " . number_format($this->uangSakuBulanan, 0, ',', '.') . "<br>";
        echo "Total Gaji/Uang yang Diterima: Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br><br>";
    }
}
?>