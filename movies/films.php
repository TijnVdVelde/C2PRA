<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" href="../img/logo/logo-nobg.png">
    <title>C2 CodeCamp - Films</title>
</head>
<body>    
    <?php include_once('../header.php'); ?>

    <main>
        <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="films.php" class="link-substructure">Films</a>
        <h1 class="title-page">Films</h1>
    <div class="wrapper">
        <div class="img-movies">   
            <a href="https://www.imdb.com" target="_blank">
            <img alt="imdb" src="../img/imdb-logo.png" width="100" height="100">
            </a>

            <a href="https://www.videoland.nl" target="_blank">
            <img alt="imdb" src="../img/videoland-logo.jpg" width="100" height="100">
            </a>

            <a href="https://www.movies.nl" target="_blank">
            <img alt="imdb" src="../img/movies-logo.jpg" width="100" height="100">
            </a>
        </div> 
    </div>
    
    </main>
</body>
</html>