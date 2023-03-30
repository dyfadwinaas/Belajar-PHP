<?php
//fungsi define by user => void (tidak mengembalikan nilai)
//tanpa parameter/argument
function salam(){
echo 'Selamat Pagi';
}
salam();

function hailow($nama,$umur){
    echo "<br> Halo $nama, dan umur $umur tahun";
    }
    
    hailow("Dyfa", 21);
    hailow("Dwina", 21);
    hailow("Sahrani", 21);

    //fungsi mengembalikan nilai/fungsi return
    function tambah($a, $b) {
        $c = $a + $b;
        return $c;
        }

    //memanggil fungsi return
        $x = 10;
        $y = 20;
        echo '<br> Hasil 50 + 30 = '.tambah(50,30);
        echo "<br> Hasil $x + $y = ". tambah($x,$y);

    //rumus cek bilangan prima
    function prima($bilangan){
        $prima = true;
        for($i=2; $i<$bilangan; $i++){
            if($bilangan % $i == 0){
                $prima = false;
                break;
            }
        }
        return $prima;
    }
    if(prima(10)){
        echo "<br> bilangan prima ";
    } else {
        echo "<br> Bukan Bilangan prima";
    }
?>