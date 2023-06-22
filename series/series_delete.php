<?php
    require_once('../config/koneksi.php');

    // Periksa apakah parameter "id" ada
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Persiapkan pernyataan DELETE
        $sql = $conn->prepare("DELETE FROM drachin WHERE id = ?");
        $sql->bind_param('i', $id);

        // Jalankan pernyataan DELETE
        $result = $sql->execute();

        if ($result) {
            echo json_encode(array('RESPONSE' => 'SUCCESS'));
        } else {
            echo json_encode(array('RESPONSE' => 'FAILED'));
        }
    } else {
        echo "GAGAL";
    }
?>
