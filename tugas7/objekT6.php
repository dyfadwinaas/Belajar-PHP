<center>
<table align="center" width="70%" bgcolor="black">
    <thead>
        <br>
        <h2>Menghitung Luas dan Keliling Bangun Datar</h2><br>
    </thead>

    <tbody>
        <tr>
            <?php
            require_once 'lingkaran.php';
            require_once 'Persegipanjang.php';
            require_once 'segitiga.php';

            $l = new Lingkaran(5);
            $p = new Persegipanjang(10, 15);
            $s = new Segitiga(6, 9, 10);

            $ar_data = [$l, $p, $s];

            foreach($ar_data as $data){
                ?>
                <tr>
                    <td colspan="2" align="left" bgcolor="khaki"><b><?= $data->namaBidang(). '<br>'?></b></td>
                </tr>
                <tr bgcolor="white" align="left">
                    <td>Luas</td>
                    <td><?= $data->luasBidang(). '<br>'?></td>
                </tr>
                <tr bgcolor="khaki" align="left">
                    <td>Keliling</td>
                    <td><?= $data->kelilingBidang(). '<br>'?></td>
                </tr>
            <?php } ?>
        </tr>
    </tbody>
</table>
</center>