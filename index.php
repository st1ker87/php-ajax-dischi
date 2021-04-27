<?php 
    include __DIR__."/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>
<body>
    <header>
        <img src="img/Spotify_logo.png" alt="">
    </header>

    <main>
        <?php foreach ($database as $album) { ?>
            
            <div class="album">
                <img src="<?php echo $album['poster']; ?>" alt="">
                <h2><?php echo $album['title']; ?></h2>
                <p class="author"><?php echo $album['author']; ?></p>
                <h3><?php echo $album['year']; ?></h3>
            </div>

        <?php } ?>

    </main>
   

</body>
</html>