<?php 
//jika tidak menggunakan looping
echo '<hr>looping manual<hr>';
echo 'Bilangan 1';
echo '<br>bilangan 2';
echo '<hr>';

//contoh looping increment
echo '<hr>looping increment<hr>';
for($x=1; $x <= 10; $x++){
    echo '<br/>Bilangan '.$x;
    }

//contoh looping decrement
echo '<hr>looping decrement<hr>';
    for($y=10; $y >= 1; $y--){
    echo '<br/>Angka '.$y;
    }
    
//looping menggunakan while
    echo '<hr>looping menggunakan while<hr>';
    $xz=1;
    while($xz <= 5){
        echo '<br>Bilangan '.$xz;
        $xz++;
    }
    echo '<hr>looping while (dibalik) <hr>';
    $yz=5;
    while($yz >= 1){
        echo '<br>Angka '.$yz;
        $yz--;
    }

    //looping do while
    echo '<hr>looping do while<hr>';
    $x=1;
    do{
        echo '<br>'.$x;
        $x++; 
    }
    
    while($x<=10);
?>


