<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form tambah data</title>
</head>
<body>
<div class="container">
    <br>
    <h2 align="center">Form Tambah Data</h2>
    <br>
    <br>
    <form id="Formtambah" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>
        <div class="form-group">
            <label for="cast">Cast:</label>
            <input type="text" class="form-control" id="cast" name="cast" required>
        </div>
        <div class="form-group">
            <label for="episode">Episode</label>
            <input type="text" class="form-control" id="episode" name="episode" required>
        </div>
        <div class="form-group">
            <label for="tayang">Tayang:</label>
            <input type="text" class="form-control" id="tayang" name="tayang" required>
        </div>
        <div class="form-group">
            <label for="produser">Produser:</label>
            <input type="text" class="form-control" id="produser" name="produser" required>
        </div>
        <div class="form-group">
            <label for="sinopsis">Sinopsis:</label>
            <input type="text" class="form-control" id="sinopsis" name="sinopsis" required>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar:</label>
            <input type="text" name="gambar" id ="gambar" class="form-control" required> 
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="admin.php" class="btn btn-primary">Back</a>
    </form>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
document.getElementById("Formtambah").addEventListener("submit", function(event) {
    event.preventDefault(); // Mencegah form submit secara default

    // Menggunakan Fetch API untuk mengirim data ke API
    fetch("series/series_post.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({
            judul: document.getElementById("judul").value,
            genre: document.getElementById("genre").value,
            cast: document.getElementById("cast").value,
            episode: document.getElementById("episode").value,
            tayang: document.getElementById("tayang").value,
            produser: document.getElementById("produser").value,
            sinopsis: document.getElementById("sinopsis").value,
            gambar: document.getElementById("gambar").value
        })
    })
    .then(response => response.json())
    .then(dataa => {
        if (dataa.RESPONSE === "SUCCESS") {
            alert("Data berhasil disimpan!"); // Tampilkan popup sukses
            // Reset form
            document.getElementById("Formtambah").reset();
            // Arahkan ke halaman admin.php
            window.location.href = "admin.php";
        } else {
            alert("Data gagal disimpan!"); // Tampilkan popup gagal
        }
    })
    .catch(error => {
        alert("Terjadi kesalahan dalam menyimpan data!");
        console.error(error);
    });
});
</script>
</body>
</html>
