function searchmovie(){
    $('#movie-list').html('');

    $.ajax({
        url: 'http://omdbapi.com',
        type: 'get',
        dataType: 'json',  //data pengembalian
        data: {
            'apikey': '8839c023',
            's': $('#search-input').val() 
        },
        success: function(result){
            if(result.Response == "True"){
                let movies = result.Search;
                
                $.each(movies, function(i, data){
                    $('#movie-list').append(`
                        <div class="col-md-4 mt-3">
                            <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="`+ data.Poster +`" >
                            <div class="card-body">
                            <center>
                                 <h6 class="card-subtitle mb-2 text-muted"  style="font-size:20px;">`+ data.Title +`</h6>
                                <h6 class="card-subtitle mb-2 text-muted">`+ data.Year +`</h6>
                                <a href="#" class="btn btn-primary see-detail center"  data-toggle="modal" data-target="#exampleModal" data-id="`+ data.imdbID +`">See Detail</a></center>
                            </div>
                            </div>
                        </div>
                    `);
                });

                $('#search-input').val('');

            }else{
                $('#movie-list').html(`
                    <div class="col">
                        <h1 class="text-center">` + result.Error + ` </h1>
                    </div>
                `)
            }
        } 
    });
}

$('#search-button').on('click', function(){
    searchmovie();
});

$('#search-input').on('keyup', function(e){
    if(e.keyCode === 13){
        searchmovie();
    }
});

$('#movie-list').on('click','.see-detail',function(){
    
    $.ajax({
        url: 'http://omdbapi.com',
        dataType: 'json',
        type: 'get',
        data: {
            'apiKey': '8839c023',
            'i': $(this).data('id')
        },
        success: function (movie){
            if(movie.Response === "True"){

                $('.modal-body').html(`
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="`+ movie.Poster +`" class="img-fluid">
                            </div>

                            <div class="col-md-8">
                                <ul class="list-group">
                                    <li class="list-group-item disabled"><h3>`+ movie.Title +`</h3></li>
                                    <li class="list-group-item disabled"><b>Year :</b> `+ movie.Year +`</li>
                                    <li class="list-group-item disabled"><b>Released :</b> `+ movie.Released +`</li>
                                    <li class="list-group-item disabled"><b>Genre :</b> `+ movie.Genre +`</li>
                                    <li class="list-group-item disabled"><b>Director :</b> `+ movie.Director +`</li>
                                    <li class="list-group-item disabled"><b>Actors :</b> `+ movie.Actors +`</li>
                                    <li class="list-group-item disabled"><b>Language</b> : `+ movie.Language +`</li>
                                    <li class="list-group-item disabled"><b>Country</b> : `+ movie.Country +`</li>
                                    <li class="list-group-item disabled"><b>Writer</b> : `+ movie.Writer +`</li>
                                    <li class="list-group-item disabled"><b>Type :</b> `+ movie.Type +`</li>
                                    <li class="list-group-item disabled"><b>Awards :</b> `+ movie.Awards +`</li>
                                    <li class="list-group-item disabled"><b>Rating :</b> `+ movie.imdbRating +`</li>
                                    <li class="list-group-item disabled"><b>Plot :</b> `+ movie.Plot +`</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                `);
            }
        }
    });
});