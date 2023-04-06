<?php 
//memanggil dan memproses file bagian atas
include_once 'top.php';

//memanggil dan memproses file bagian menu
include_once 'menu.php';
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
                        <?php 
                        //algortima menangkap url agar masuk ke dalam index
                        $url = $_GET['url'];
                        if($url == 'dashboard'){
                            include_once 'dashboard.php';

                        }
                        elseif (!empty($url)){
                            include_once ''.$url.'.php';
                        } else { 'dashboard.php';
                        }
                        
                        ?>
                    </div>
                </main>
</div>

<?php
//memanggil dan memproses file bagian bottom
include_once 'bottom.php';
?>