<?php 
//ini sebuah komentar
/* ini jugs sebuah komentar */
#komentar pake simbol kress

echo "Hello Cok <br>";
print_r("Nur Afif Raihan <br>");
var_dump("STT NURUL FIKRI");
echo "<hr>";

$nama = "Nur Afif Raihan";
$umur = 19;
$berat = 60.5;
$mahasiswa = true;

echo "Nama saya $nama <br>";
echo "Umur Saya sekarang menginjak $umur tahun <br>";
echo "Berat saya tahun ini mencapai $berat kg";
echo "<hr>";


//Membuat array
$programs = [" php ", " javascript ", " html ", " css "];
echo $programs[0];
foreach ($programs as $program){
    echo $program;
}



?>