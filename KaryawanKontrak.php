<?php
// KaryawanKontrak.php
require_once 'Karyawan.php';

class KaryawanKontrak extends Karyawan {
    // 1. Properti tambahan spesifik kontrak
    private $durasiKontrakBulan;
    private $agensiPenyalur;

    // 2. Constructor untuk menerima data
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerhari, $durasiKontrakBulan, $agensiPenyalur) {
        // Memanggil constructor dari class induk (Karyawan)
        parent::__construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerhari);
        $this->durasiKontrakBulan = $durasiKontrakBulan;
        $this->agensiPenyalur = $agensiPenyalur;
    }

    // 3. Implementasi hitungGajiBersih() - Hanya ditulis 1 kali
    public function hitungGajiBersih() {
        // Gaji murni berdasarkan jumlah hari kehadiran dikali tarif harian
        return $this->hariKerjaMasuk * $this->gajiDasarPerhari;
    }

    // 4. Implementasi tampilkanProfilKaryawan()
    public function tampilkanProfilKaryawan() {
        echo "=== PROFIL KARYAWAN KONTRAK ===<br>";
        echo "ID: " . $this->id_karyawan . "<br>";
        echo "Nama: " . $this->nama_karyawan . "<br>";
        echo "Departemen: " . $this->departemen . "<br>";
        echo "Durasi Kontrak: " . $this->durasiKontrakBulan . " Bulan<br>";
        echo "Agensi Penyalur: " . $this->agensiPenyalur . "<br>";
        echo "Total Gaji Bersih: Rp " . number_format($this->hitungGajiBersih(), 0, ',', '.') . "<br><br>";
    }
}
?>