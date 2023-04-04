<!DOCTYPE html>
<head>

<title>Membuat rumus bangun datar persegi</title>
</head>

<body>
    <h2> Luas Bangun datar Jajar genjang </h2>

    <form method="POST">
        <table>
            <tr>
                <td>Alas</td>
                <td>
                    <input type="text" name="alas" require>
                </td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td>
                <input type="text" name="tinggi" require>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Hitung">
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];

        $luasjargen = $alas * $tinggi;
        echo 'Hasil perhitungan luas Jajar Genjang';
        echo '<br> Diketahui : ';
        echo '<br> Luas alas : '.$alas.'cm';
        echo '<br> Tinggi : '.$tinggi.'cm';
        

        echo '<br> Maka luasnya = '.$luasjargen.'cm';
    }
    ?>

</body>
</html>