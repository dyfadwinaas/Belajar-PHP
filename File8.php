<!DOCTYPE html>
<head>
    <title>Latihan pemrosesan form</title>
</head>
<body>
    <form method="POST">
        <p>Form input nilai</p>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan nama"> <br>
        <label>MataKuliah</label>
        <select name="Matkul">
            <option>----Pilih MataKuliah----</option>
            <option value="HTML">HTML dan CSS</option>
            <option value="js">JavaScript</option>
            <option value="UI">UI/UX</option>
            <option value="php">PHP</option> 
        </select><br>
        <label>nilai</label>
        <input type="text" name="nilai" placeholder="Masukkan nilai anda">
        <button name="proses" type="submit">Simpan</button>
    </form>

    <?php
    $nama = $_POST ['nama'];
    $matakuliah = $_POST['Matkul'];
    $nilai = $_POST['nilai'];
    $tombol = $_POST['Proses'];

    $ket = ($nilai >= 60) ? "lulus" : "gagal";
    //if multi kondisi
if($nilai >= 85 && $nilai <= 100) $grade="A";
else if($nilai>= 75 && $nilai < 80) $grade="B";
else if($nilai>= 60 && $nilai < 75) $grade="C";
else if($nilai>= 30 && $$nilai < 60) $grade="D"; 
else if($nilai>= 0 && $nilai < 30) $grade="E";
else $grade = "";

//predikat dengan switch case
switch ($grade) {
    case 'A': $predikat = 'Memuaskan'; break;
    case 'B': $predikat = 'Bagus'; break;
    case 'C': $predikat = 'Cukup'; break;
    case 'D': $predikat = 'Kurang'; break;
    case 'E': $predikat = 'Buruk'; break;
    default: $predikat = '';
}
if(isset($tombol)){
    ?>
    Nama Mahasiswa : <?= $nama ?>
    <br> MataKuliah : <?= $matakuliah ?>
    <br> nilai : <?= $nilai ?>
    <br> Keterangan : <?= $keterangan ?>
    <br> Grade : <?= $grade ?>
    <br> predikat : <?= $predikat ?>

    <?php } ?>

</body>
</html>