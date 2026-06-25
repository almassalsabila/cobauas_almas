<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include_once "koneksi.php";

function hitung($r){
$j=strtolower($r['jenis_karyawan']);
if($j=="tetap") return ($r['hari_kerja_masuk']*$r['gaji_dasar_per_hari'])+$r['tunjangan_kesehatan'];
if($j=="kontrak") return $r['hari_kerja_masuk']*$r['gaji_dasar_per_hari'];
return ($r['hari_kerja_masuk']*$r['gaji_dasar_per_hari'])*0.8;
}
$filter=$_GET['jenis']??'semua';
function jml($k,$j){
if($j=="semua"){ $q=mysqli_query($k,"SELECT COUNT(*) c FROM tabel_karyawan");}
else{$q=mysqli_query($k,"SELECT COUNT(*) c FROM tabel_karyawan WHERE LOWER(jenis_karyawan)=LOWER('$j')");}
return mysqli_fetch_assoc($q)['c'];
}
?>
<!doctype html><html><head><meta charset="utf-8"><title>Dashboard</title>
<style>
:root{--p:#659287;--s:#88BDA4;--t:#B1D3B9;--b:#E6F2DD}
*{margin:0;padding:0;box-sizing:border-box;font-family:Segoe UI,sans-serif}
body{background:var(--b)}
.wrap{display:flex}
.side{position:fixed;left:0;top:0;width:240px;height:100vh;background:var(--p)}
.side h2{color:#fff;text-align:center;padding:24px}
.side a{display:block;padding:15px 22px;color:#fff;text-decoration:none}
.side a:hover,.active{background:var(--s)}
.main{margin-left:240px;width:calc(100% - 240px);padding:28px}
.head{background:var(--p);color:#fff;padding:24px;border-radius:10px}
.cards{display:grid;grid-template-columns:repeat(4,1fr);gap:15px;margin:20px 0}
.card{background:#fff;border-radius:10px;padding:18px;text-align:center}
.card h2{color:var(--p)}
table{width:100%;background:#fff;border-collapse:collapse;border-radius:10px;overflow:hidden}
th{background:var(--s);color:#fff;padding:10px}
td{padding:10px;border-bottom:1px solid #ddd;text-align:center}
tr:hover{background:#f5faf4}
.badge{padding:5px 10px;border-radius:15px;color:#fff}
.tetap{background:var(--p)}.kontrak{background:var(--s)}.magang{background:var(--t);color:#000}
h3{margin:20px 0}
</style></head><body>
<div class="wrap">
<div class="side">
<h2>Dashboard</h2>
<a class="<?=($filter=='semua')?'active':''?>" href="?jenis=semua">📋 Semua Karyawan</a>
<a class="<?=($filter=='tetap')?'active':''?>" href="?jenis=tetap">🏢 Karyawan Tetap</a>
<a class="<?=($filter=='kontrak')?'active':''?>" href="?jenis=kontrak">📄 Karyawan Kontrak</a>
<a class="<?=($filter=='magang')?'active':''?>" href="?jenis=magang">🎓 Karyawan Magang</a>
</div>
<div class="main">
<div class="head"><h1>Sistem Informasi Data Karyawan</h1><p>Object Oriented Programming</p></div>
<div class="cards">
<div class="card"><h2><?=jml($koneksi,'tetap')?></h2><p>Tetap</p></div>
<div class="card"><h2><?=jml($koneksi,'kontrak')?></h2><p>Kontrak</p></div>
<div class="card"><h2><?=jml($koneksi,'magang')?></h2><p>Magang</p></div>
<div class="card"><h2><?=jml($koneksi,'semua')?></h2><p>Total</p></div>
</div>
<h3>
<?php
echo $filter=="semua"?"Semua Karyawan":"Data Karyawan ".ucfirst($filter);
?>
</h3>
<table>
<tr><th>ID</th><th>Nama</th><th>Departemen</th><th>Jenis</th><th>Hari Kerja</th><th>Gaji/Hari</th><th>Gaji Bersih</th></tr>
<?php
$sql="SELECT * FROM tabel_karyawan";
if($filter!="semua") $sql.=" WHERE LOWER(jenis_karyawan)=LOWER('$filter')";
$sql.=" ORDER BY id_karyawan";
$res=mysqli_query($koneksi,$sql);
while($r=mysqli_fetch_assoc($res)){
$j=strtolower($r['jenis_karyawan']);
echo "<tr>
<td>{$r['id_karyawan']}</td>
<td>{$r['nama_karyawan']}</td>
<td>{$r['departemen']}</td>
<td><span class='badge $j'>".ucfirst($j)."</span></td>
<td>{$r['hari_kerja_masuk']}</td>
<td>Rp ".number_format($r['gaji_dasar_per_hari'],0,',','.')."</td>
<td>Rp ".number_format(hitung($r),0,',','.')."</td>
</tr>";
}
?>
</table>
</div></div></body></html>
