<?php
//deklarasi & inisialisasi
$nama = "Dyfa Dwina Sahrani";
$totalBelanja = 150000;
$keterangan = "";

//struktur kendali if
if($totalBelanja > 100000 ){
    $keterangan = "Selamat $nama Anda dapat hadiah";
}
else{
    $keterangan = "Terima Kasih $nama sudah berbelanja";
}

?>
Nama pelanggan : <?= $nama ?>
<br> Total belanja = <?= $totalBelanja ?>
<br> Keterangan = <?= $keterangan ?>

