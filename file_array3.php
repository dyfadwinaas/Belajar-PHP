<?php 
$m1 = ['NIM' => '12222001', 'nama'=> 'Dyfa', 'nilai'=> 90];
$m2 = ['NIM' => '12222002', 'nama'=> 'Dwina', 'nilai'=> 95];
$m3 = ['NIM' => '12222003', 'nama'=> 'Sahrani', 'nilai'=> 85];
$m4 = ['NIM' => '12222004', 'nama'=> 'Dinda', 'nilai'=> 90];
$m5 = ['NIM' => '12222005', 'nama'=> 'Anayya', 'nilai'=> 100];
$m6 = ['NIM' => '12222006', 'nama'=> 'Arya', 'nilai'=> 95];
$m7 = ['NIM' => '12222007', 'nama'=> 'Daffani', 'nilai'=> 80];
$m8 = ['NIM' => '12222008', 'nama'=> 'Dapan', 'nilai'=> 75];

$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8];
$ar_judul = ['No','NIM','Nama','Nilai','Keterangan','Grade','Predikat'];

//FUNGSI
$jmlmhs = count($mahasiswa);
$jmlnilai = array_column($mahasiswa,'nilai');
$maxnilai = max ($jmlnilai);
$minnilai = min ($jmlnilai);
$rata2 = array_sum($jmlnilai);
$rata_rata = $rata2 / $jmlmhs;

$nilai = [
    'Jumlah Mahasiswa'=>$jmlmhs,
    'Nilai Tertinggi' =>$maxnilai,
    'Nilai Terendah' =>$minnilai,
    'Nilai Rata-rata'=>$rata_rata
]
?>
<table align="center" border="4px" width="100%" bgcolor="thistle">

    <thead>
    <tr>
    <?php 
    foreach($ar_judul as $judul){
    ?>
        <th>
            <?= $judul ?>
        </th>
    <?php }?>
    </tr>  
    </thead>

    <tbody>
    <?php
    $no = 1;
    foreach($mahasiswa as $mhs){

        $ket = ($mhs['nilai']>= 60) ? 'Lulus' : 'Tidak Lulus';

        // grade
        if($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) $grade ='A';
        else if($mhs['nilai'] >= 75 && $mhs['nilai'] <= 80) $grade ='B';
        else if($mhs['nilai'] >= 60 && $mhs['nilai'] <= 74) $grade ='C';
        else if($mhs['nilai'] >= 30 && $mhs['nilai'] <= 59) $grade ='D';
        else if($mhs['nilai'] >= 0 && $mhs['nilai'] <= 29) $grade ='E';
        else $grade = '';

        // Predikat Nilai
        switch ($grade){
            case "A" :$predikat="Sangat Baik"; 
            break;
            case "B" :$predikat="Baik"; 
            break;
            case "C" :$predikat="Cukup Baik"; 
            break;
            case "D" :$predikat="Kurang"; 
            break;
            case "E" :$predikat="Sangat Kurang"; 
            break;
            default: $predikat="";
        }
    ?>

        <tr>
            <td><?= $no ?></td>
            <td><?= $mhs ['NIM'] ?></td>
            <td><?= $mhs ['nama'] ?></td>
            <td><?= $mhs ['nilai'] ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
        </tr>

    <?php $no++; } ?>
    </tbody>

    <tfoot>
        <?php
        foreach($nilai as $angka => $hasil){
        ?>

        <tr>
            <td colspan="6"><?= $angka ?></td>
            <td colspan="1"><?= $hasil ?></td>
        </tr>
    </tfoot>
    
    <?php 
}?>
<div style>
    h1{
  font-family: sans-serif;
}
 
table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}
 
table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}
 
table th:first-child{  
  border-left:none;  
}
 
table tr {
  text-align: center;
  padding-left: 20px;
}
 
table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}
 
table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
 
table tr:last-child td {
  border-bottom: 0;
}
 
table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
 
table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
 
table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
</style>

</table>
</body>
</html>