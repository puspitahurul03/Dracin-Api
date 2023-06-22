<?php

require_once('../config/koneksi.php');
header("Content-Type: application/json");

$json = file_get_contents("php://input");
$dataa = json_decode($json, true);


$judul = "";
$genre = "";
$cast = "";
$episode = "";
$tayang = "";
$produser = "";
$sinopsis = "";
$gambar = "";

if (isset($dataa['judul'])) {
    $judul = $dataa['judul'];
}
if (isset($dataa['genre'])) {
    $genre = $dataa['genre'];
}
if (isset($dataa['cast'])) {
    $cast = $dataa['cast'];
}
if (isset($dataa['episode'])) {
    $episode = $dataa['episode'];
}
if (isset($dataa['tayang'])) {
    $tayang = $dataa['tayang'];
}
if (isset($dataa['produser'])) {
    $produser = $dataa['produser'];
}
if (isset($dataa['sinopsis'])) {
    $sinopsis = $dataa['sinopsis'];
}
if (isset($dataa['gambar'])) {
    $gambar = $dataa['gambar'];
}

if ($judul != "") {
    $sql = "INSERT INTO drachin(judul,genre,cast, episode,tayang,produser,sinopsis,gambar)
				VALUES('$judul','$genre','$cast','$episode','$tayang','$produser','$sinopsis','$gambar')";


    $result = $conn->query($sql);
    if($sql){
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
    }else{
        echo "GAGAL!"; 
    }
}

?>