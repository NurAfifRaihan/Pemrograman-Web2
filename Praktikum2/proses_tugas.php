<?php 

$customer = $_GET['customer'];
$jumlah = $_GET['jumlah'];
$produk = $_GET['produk'];
switch ($produk){
    case "tv":
        $total = $jumlah * 4200000; 
        break;
    case "kulkas":
        $total = $jumlah * 3100000; 
        break;
    case "mesin cuci":
        $total = $jumlah * 3800000;
        break;
    default:
        $total = "eror";
}

?>