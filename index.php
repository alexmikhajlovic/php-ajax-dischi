<?php 
    include 'includes/db-music.php'; // Music DataBase
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music | @alexmikhajlovic</title>
    <link rel="stylesheet" href="dist/app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="icon" href="img/spotify.png" sizes="16x16 24x24 32x32 48x48 64x64 128x128">
</head>
<body>

    <!-- HEADER -->
    <header>

        <img src="img/spotify.png" alt="Logo">

        <input type="text" placeholder="Search">

    </header>

    <!-- MAIN -->
    <main>

        <?php
            foreach ($music as $music) { ?>
                <div class="music-box">

                    <!-- Cover -->
                    <img src="<?php echo $music['cover_path'] ?>" alt="Cover">

                    <!-- Title -->
                    <h3><?php echo $music['title'] ?></h3>

                    <!-- Author -->
                    <p><?php echo $music['author'] ?></p>

                    <!-- Year of release -->
                    <p><small><?php echo $music['year'] ?></small></p>

                </div>
        <?php } ?>
            
    </main>
    

    <script src="dist/app.js"></script>
</body>
</html>