<!DOCTYPE html>
<html>
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Dracin-API</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
<a class="navbar-brand" href="#">Dracin.id</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">All Series </a>
    </div>
  </div>
    </div>
</nav>

<div class="container mt-5">
    
    <a href="tambah.php" class="btn btn-dark mb-3">+Tambah</a>
    <table border="2" class="table">
        <thead>
            <tr bgcolor="grey" align="center">
                <th>Judul</th>
                <th>Genre</th>
                <th>Cast</th>
                <th>Episode</th>
                <th>Sinopsis</th>
                <th>gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $url = "http://localhost/dracin/series/series_getAll.php";
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $dracin = json_decode($response, true);

            if (!empty($dracin)) {
                foreach ($dracin as $dracin) {
                    echo "<tr>";
                    echo "<td>" . $dracin['judul'] . "</td>";
                    echo "<td>" . $dracin['genre'] . "</td>";
                    echo "<td>" . $dracin['cast'] . "</td>";
                    echo "<td>" . $dracin['episode'] . "</td>";
                    echo "<td>" . $dracin['sinopsis'] . "</td>";
                    echo "<td><img src='img/" . $dracin['gambar'] . "' alt='gambar' width='80'></td>";
                    echo "<td >
                            <a href='edit.php?id=" . $dracin['id'] . "' class='btn btn-primary btn-sm'>Edit</a><br>
                            <a href='javascript:void(0);' class='btn btn-danger btn-sm delete-btn' data-id='" . $dracin['id'] . "'>Hapus</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>Series tidak ditemukan ;(.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function() {
    $('.delete-btn').click(function() {
        var id = $(this).data('id');
        var confirmDelete = confirm("Apakah Anda yakin ingin menghapus data ini?");
        if (confirmDelete) {
            $.ajax({
                url: "series/series_delete.php?id=" + id,
                type: "DELETE",
                success: function(response) {
                    var result = JSON.parse(response);
                    if (result.RESPONSE === "SUCCESS") {
                        alert("Data berhasil dihapus");
                        location.reload();
                    } else {
                        alert("Gagal menghapus data");
                    }
                },
                error: function() {
                    alert("Terjadi kesalahan dalam menghapus data");
                }
            });
        }
    });
});
</script>
</body>
</html>
