function tampilkanSemua(){
    $.getJSON('http://localhost/dracin/series/series_getAll.php', function (drama){
    
    $.each(drama, function(i, data){
        $('#series-list').append('<div class="col-md-4"><div class="card ml-3 mb-3"><img src="img/'+ data.gambar +'" class="card-img-fluid"><div class="card-body"><h5 class="card-title">'+ data.judul +'</h5><h5 class="card-text">Genre: '+ data.genre +'</h5><p class="card-text">'+ data.sinopsis+'</p><a href="#" </div></div></div>');
    
    });
    });

}
tampilkanSemua();
