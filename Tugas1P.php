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

    <hr>
    <h2> Keliling Bangun datar Jajar genjang </h2>

<form method="POST">
    <table>
        <tr>
            <td>LuasA</td>
            <td>
                <input type="text" name="luasA" require>
            </td>
        </tr>
        <tr>
            <td>LuasB</td>
            <td>
            <input type="text" name="luasB" require>
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
    $luasA = $_POST['luasA'];
    $luasB = $_POST['luasB'];

    $keljargen = $luasA + 2 * $luasB;
    echo 'Hasil perhitungan keliling Jajar Genjang';
    echo '<br> Diketahui : ';
    echo '<br> Luas A : '.$luasA.'cm';
    echo '<br> Luas B : '.$luasB.'cm';
    echo '<br> Rumus : 2 x (AB)';
    

    echo '<br> Maka luasnya = '.$luasjargen.'cm';
}
?>
</body>
</html>