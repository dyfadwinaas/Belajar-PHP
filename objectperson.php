<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
require_once 'Staff.php';
$d1 = new Dosen ('Bibi','P','111','M.Kom');
$d2 = new Dosen ('Wulan','P','112','M.Kom');
$m1 = new Mahasiswa('Valdy','L','3','Teknik Informatika');
$m2 = new Mahasiswa('Aruna','P','3','Teknik Informatika');
$s = new Staff('Akira','P','01120','Staff Waket 3',10000000);

$ar_data = [$d1,$d2, $m1,$m2, $s];


foreach ($ar_data as $data){
    $data->cetak();
}


?>