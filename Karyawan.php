<?php
// Karyawan.php
// Representasi Abstract Class Karyawan

abstract class Karyawan {
    // Properti terenkapsulasi (protected)
    protected $id_karyawan;
    protected $nama_karyawan;
    protected $departemen;
    protected $hariKerjaMasuk;
    protected $gajiDasarPerhari;

    // Constructor untuk menginisialisasi atribut induk saat objek turunan dibuat
    public function __construct($id_karyawan, $nama_karyawan, $departemen, $hariKerjaMasuk, $gajiDasarPerhari) {
        $this->id_karyawan = $id_karyawan;
        $this->nama_karyawan = $nama_karyawan;
        $this->departemen = $departemen;
        $this->hariKerjaMasuk = $hariKerjaMasuk;
        $this->gajiDasarPerhari = $gajiDasarPerhari;
    }

    // Metode abstrak wajib (tanpa body) yang harus diimplementasikan oleh kelas turunan
    abstract public function hitungGajiBersih();
    abstract public function tampilkanProfilKaryawan();
}
?>