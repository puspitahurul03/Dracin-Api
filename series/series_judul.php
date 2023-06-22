<?php
require_once('../config/koneksi.php');
$series = array();
if(isset($_GET['judul'])){
    $id=$_GET['judul'];
}
if($result  = mysqli_query($conn, "SELECT * FROM drachin WHERE judul=$judul")){
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        $series[] = $row;
    }
    mysqli_close($conn);
    echo json_encode($series);
}
?>