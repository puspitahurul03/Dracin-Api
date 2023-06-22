<?php
require_once('../config/koneksi.php');
$dataa = json_decode(file_get_contents("php://input"));

if($dataa->id!=null){
    $id        = $dataa->id;
    $judul     = $dataa->judul;
    $genre     = $dataa->genre;
    $cast      = $dataa->cast;
    $episode   = $dataa->episode;
    $tayang    = $dataa->tayang;
    $produser  = $dataa->produser;
    $sinopsis  = $dataa->sinopsis;
    $gambar    = $dataa->gambar;

    $sql = $conn->prepare("UPDATE drachin SET judul=?, genre=?, cast=?, episode=?, tayang=?, produser=?, sinopsis=?, gambar=? WHERE id=?");
    $sql->bind_param('ssssssssd', $judul, $genre, $cast, $episode, $tayang, $produser, $sinopsis, $gambar, $id);
    $sql->execute();
    if($sql){
        echo json_encode(array('RESPONSE' => 'SUCCESS'));
    }else{
        echo json_encode(array('RESPONSE' => 'FAILED!'));
    }
}else{
    echo "GAGAL!"; 
}
?>