<?php
require 'Pegawai.php';

$pegawai1 = new Pegawai('000011', 'Dyfa', 'Manager', 'Islam', 'Menikah');
$pegawai2 = new Pegawai('000021', 'Dwina', 'Asisten Manager', 'Kristen', 'Belum Menikah');
$pegawai3 = new Pegawai('000032', 'Sahrani', 'Kepala Bagian', 'Buddha', 'Belum Menikah');
$pegawai4 = new Pegawai('000043', 'Dinda', 'Staff', 'Hindu', 'Menikah');
$pegawai5 = new Pegawai('000054', 'Anayya', 'Staff', 'Islam', 'Belum Menikah');
$pegawai6 = new Pegawai('000065', 'Sahrani', 'Staff', 'Kristen', 'Menikah');

$ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5, $pegawai6];

foreach ($ar_pegawai as $pegawai) {
    $pegawai -> cetak();
}

?>