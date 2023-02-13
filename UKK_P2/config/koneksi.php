<?php
$koneksi = mysqli_connect("localhost","root","","ukk_yunita");
if ($koneksi){
    echo "Tersambung";
} else {
    echo "Tidak Tersambung";
}

?>