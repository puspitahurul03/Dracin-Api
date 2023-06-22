<?php
require_once('../config/koneksi.php');
$series = array();
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
if($result  = mysqli_query($conn, "SELECT * FROM drachin WHERE id=$id ")){
    while ($row = $result->fetch_array(MYSQLI_ASSOC)){
        $series[] = $row;
    }
    mysqli_close($conn);
    echo json_encode($series);
}
?>