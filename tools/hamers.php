<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/logo/logo-nobg.png">
    <title>C2 CodeCamp - Haners</title>
</head>
<body>
    <?php 
        require_once('../header.php');
    ?>

    <main>
    <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="gereedschappen.php" class="link-substructure"> Gereedschappen</a>  > <a href="hamers.php" class="link-substructure">Hamers</a> 
        <div class="wrapper">
            <div class="layout-pages">
                <h1>Hamers</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../tools-textfiles/hamers.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../tools-textfiles/hamers.txt"));
                        fclose($myfile);
                    ?>
                </div>
                <img src="../img/information-pictures/Hamer.png" alt="Hamer" width="300rem" height="auto">
            </div>
        </div>
    </main>
</body>
</html>