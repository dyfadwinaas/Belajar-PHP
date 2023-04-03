<?php 
//array scalar
$b1 = ['kode'=>'a1', 'buah'=>'Apel', 'harga'=>25000, 'jml' => 5];
$b2 = ['kode'=>'a2', 'buah'=>'Anggur', 'harga'=>45000, 'jml' => 7];
$b3 = ['kode'=>'b1', 'buah'=>'Belimbing', 'harga'=>15000, 'jml' => 10];
$b4 = ['kode'=>'b2', 'buah'=>'Bangkuang', 'harga'=>10000, 'jml' => 15];
$b5 = ['kode'=>'c1', 'buah'=>'Cerry', 'harga'=>35000, 'jml' => 2];


//fungsi-fungsi sederhana
$jumlah_data = count($buah2an);
$jml_kg = array_column($buah2an, 'jml');
$total_kg = array_sum($jml_kg);
$harga_total = array_sum($jml_kg);
$max_kg = max($jml_kg);
$min_kg = min($jml_kg);
$keterangan = [
   'Jumlah data' => $jumlah_data,
    'Total Kg'=> $total_kg,
    'Jumlah tertinggi'=> $max_kg,
    'Jumlah Terendah' => $min_kg,
]
?>
<table border="1" cellpadding="10px" width="100%">
    <thead>
        <tr>
            <?php
            foreach ($ar_judul as $j){
                ?>
                <th> <?= $j ?> </th>
            <?php } ?>
        </tr>
    </thead>
<tbody>
    <?php
    $no = 1;
    foreach($buah2an as $b){
        $warna = $no % 2 == 1 ? 'khaki' : 'beige';
?>

<tr bgcolor="<?= $warna; ?>">
<td><?= $no ?></td>
<td><?= $b['kode'] ?></td>
<td><?= $b['buah'] ?></td>
<td><?= $b['harga'] ?></td>
<td><?= $b['jml'] ?></td>
</tr>

<?php
 $no++;
}
?>

</tbody>
<tfoot>
    <?php 
    foreach($keterangan as $ket =>$hasil){
    ?>
    <tr>
        <th Colspan="4"><?= $ket ?></th>
        <th><?= $hasil ?></th>

    </tr>
    <?php } ?>
</tfoot>
</table>