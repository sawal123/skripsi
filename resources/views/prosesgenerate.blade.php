<?php
include "public/phpqrcode/qrlib.php";
$folderTemp ="{{ asset('imgqr')}}";
$ambilid = $_POST['idtamu'];
$ambilnama = $_POST['nama'];
$ambilalamat = $_POST['alamat'];
$hasil = $ambilid;
$d = $ambilid.".png";
$qual = 'H';
$ukuran = 6;
$padding = 0;
QRCode :: png($hasil,$folderTemp.$d,$qual,$ukuran,$padding);
$sql = ->query("INSERT INTO daftartamu VALUES('$ambilid','$ambilnama','$ambilalamat','$d')");
if($sql){
    echo"Berhasil";
}else{
    echo"Gagal";
    die($con->error);
}
?>