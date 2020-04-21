<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-ajax-dischi</title>
    <link rel="stylesheet" href="dist/css/app.css">

</head>
<body>

    <header>
        <div id="logo">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn-ssl.funkidslive.com%2Fimg%2Fpodcast%2Fdeezer_w.png" alt="Logo">
        </div>
    </header>

    <main>
        <div class="container">
            <?php // VERSIONE SOLO PHP ?>
            <?php include 'data.php' ?>
            <?php foreach ($albums as $value) { ?>
                <div class="album-wrapper">
                    <div class="album">
                        <div class="cover">
                            <img src="<? echo $value['cover']?>" alt="">
                        </div>
                        <div class="title"><? echo $value['title']?></div>
                        <div class="artist"><? echo $value['artist']?></div>
                        <div class="year"><? echo $value['year']?></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

    <!-- Album Template -->
    <script id="album-template" type="text/x-handlebars-template">
        <div class="album-wrapper">
            <div class="album">
                <div class="cover">
                    <img src="{{cover}}" alt="">
                </div>
                <div class="title">{{title}}></div>
                <div class="artist">{{artist}}</div>
                <div class="year">{{year}}</div>
            </div>
        </div>
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
    <script src="dist/js/main.js" charset="utf-8"></script>
</body>
</html>
