<?php

$ar_prodi = [
    "S1" => "Sistem Informasi",
    "TI" => "Teknik Informatika",
    "ILKOM" => "Ilmu Komputer",
    "TE" => "Teknik Elektron"
];

$ar_skill = [
    "HTML" => 10,
    "CSS" => 10,
    "JAVASCRIPT" => 90,
    "RWD boostrap" => 60,
    "PHP" => 20,
    "Msql" => 30,
    "Laravel" => 40
];

?>

    <fieldset style="background-color: khaki;">
        <table border="1" cellpadding="20px" width="100%">
        <thead>
        <tr>
            <th colspan="2" align="center">FORM REGISTRASI KELOMPOK BELAJAR</th>
        </tr>
    </thead>
            <tbody>
                <form action="" method="post">

                    <tr>
                        <td>Nama : </td>
                        <td>
                            <input type="text" name="nama">
                        </td>
                    </tr>

                    <tr>
                        <td>NPM : </td>
                        <td>
                            <input type="text" name="npm">
                        </td>
                    </tr><br><br>

                    <tr>
                        <td>Jenis Kelamin : </td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                        </td>
                    </tr>

                    <tr>
                        <td>Program Studi : </td>
                        <td>
                            <select name="prodi" id="">
                                <?php
                                foreach ($ar_prodi as $prodi => $i) { ?>
                                    <option value="<?php echo $prodi; ?>"> <?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                    <td>Skill Programming : </td>
                    <td>
                        <?php 
                    foreach ($ar_skill as $skill => $s){
                        ?>
                        <input type="checkbox" name="skill[]" value="<?= $skill ?>"><?= $skill ?>

                        <?php } ?>
                    </td>
                </tr>

                    <tr>
                        <td>Program Studi : </td>
                        <td>
                            <select name="domisili">
                                <?php foreach ($domisili as $domisi) { ?>
                                    <option value="<?php echo $domisi ?>"><?php echo $domisi ?> </option>
                                <?php } ?>
                        </td>
                        </select>
                    </tr>
            <tr>
                <td>Email : </td>
                <td>
                    <input type="email" name="email">
                </td>
            </tr>
    </tbody>

        <tr>
            <th colspan="2" align="justify">
                <button name="proses">Submit</button>
            </th>
        </tr>
    </tfoot>
    </form>
</table>
</fieldset>

<?php 

if(isset($_POST['proses'])){
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $email = $_POST['email'];

    $nilai = 0;
    foreach($skill as $jml) {
        if (isset($ar_skill[$jml])) {
            $nilai += $ar_skill[$jml];
        }
    }

    function kategori_skill($nilai)
    {
        if ($nilai >= 100 && $nilai <=150){
            return "Sangat Baik";
        }elseif ($nilai >= 60 && $nilai <= 100){
            return "Baik";
        }elseif ($nilai >= 40 && $nilai <= 60){
            return "Cukup";
        }elseif ($nilai >= 0 && $nilai <= 40){
            return "Kurang";
        }else{
            return "Nilai Tidak Ada";
        }
    }
?>


<fieldset>
    <table>
        <tbody>
            <form>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $nama ?></td>
                </tr>
                <tr>
                    <td>NPM</td>
                    <td>:</td>
                    <td><?= $npm ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?= $jk ?></td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td><?= $prodi ?></td>
                </tr>
                <tr>
                    <td>Skill</td>
                    <td>:</td>
                    <td><?= implode(', ', $skill) ?></td>
                </tr>
                <tr>
                    <td>Skor Skill</td>
                    <td>:</td>
                    <td><?= $nilai ?></td>
                </tr>
                <tr>
                    <?php
                    $katskill = kategori_skill($nilai);
                    ?>
                    <td>Kategori Skill</td>
                    <td>:</td>
                    <td><?= $katskill ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $email ?></td>
                </tr>
            </form>
        </tbody>
    </table>
</fieldset>
<?php } ?>