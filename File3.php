<!DOCTYPE html>
<head>

<title>Membuat rumus bangun datar persegi</title>
</head>

<body>
    <h1> Bangun datar persegi </h1>

    <form method="POST">
        <table>
            <tr>
                <td>Sisi 1</td>
                <td>
                    <input type="text" name="sisi1" require>
                </td>
            </tr>
            <tr>
                <td>Sisi 2</td>
                <td>
                <input type="text" name="sisi2" require>
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
        $sisi1 = $_POST['sisi1'];
        $sisi2 = $_POST['sisi2'];

        $luaspersegi = $sisi1 * $sisi2;
        echo 'Hasil perhitungan luas persegi';
        echo '<br> Diketahui : ';
        echo '<br> sisi pertama : '.$sisi1;
        echo '<br> sisi Kedua : '.$sisi2;
        

        echo '<br> Maka luasnya = '.$luaspersegi;
    }
    ?>
</body>
</html>