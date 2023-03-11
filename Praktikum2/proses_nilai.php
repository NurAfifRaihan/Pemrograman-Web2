<?php 

$nama = $_GET['nama'];  
$Matkul = $_GET['Matkul'];
$Tugas = $_GET['Tugas'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$total_nilai = ($Tugas + $uts + $uas) / 3;

if($total_nilai > 75){
    $keterangan = "LULUS";
} else {
    $keterangan = "TIDAK LULUS";

}

?>