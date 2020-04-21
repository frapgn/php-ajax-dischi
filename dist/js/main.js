
ajaxAlbums();
printAlbums();

function ajaxAlbums() {
    $.ajax({
        url: 'server.php',
        method: 'GET',
        success: function(albums) {
            console.log(albums);
            printAlbums(albums);
        },
        error: function() {

        }
    });
}

var albumTemlateSrc = $('#album-template').html();
var albumTemplate = Handlebars.compile(albumTemlateSrc);

function printAlbums(albums) { // ricevo l'array con dentro gli oggetti
    $.each(albums, function(index, album) { // ciclo l'array 'albums'. Dentro 'index' passo l'indice di ogni oggetto e dentro 'album' l'oggetto
        var album = { //creo l'oggetto per Handlebars
            cover: album.cover,
            title: album.title,
            artist: album.artist,
            year: album.year
        }
        var albumTemplateHTML = albumTemplate(album);
        $('.container').append(albumTemplateHTML);
    })
}
