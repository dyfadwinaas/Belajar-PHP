<?php

echo 'Dokumen PHP saya ada di '.$_SERVER['DOCUMENT_ROOT'];
echo '<br> Nama file '.$_SERVER['SCRIPT_FILENAME'];
echo 'Hallo world';
//pemanggilan di PHP


//belajar variabel
$namaSiswa = "Dyfa Dwina Sahrani";
$umur = 21;
$berat_badan = 56.5;
$_pekerjaan = 'Mahasiswa';
$tes = "coba";

echo '<hr>';
echo 'Nama Siswa : '.$namaSiswa;
echo '<br> Umur : '.$umur.'thn';
echo '<br> Berat badan : '.$berat_badan.'kg';
echo '<br> Pekerjaan : '.$_pekerjaan;

?>

<!--- ini adalah pemanggilan dengan menggunakan html doc -->
<!--- jika diluar tag php, maka dibaca html -->

<hr>
Nama Siswa 1: <?= $namaSiswa ?>
<br />Umur: <?= $umur ?> tahun
<br />Berat Badan : <?= $berat_badan; ?> kg
<br />Pekerjaan: <?= $_pekerjaan; ?>
