<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/logo/logo-nobg.png">
    <title>C2 CodeCamp - Timonty Dalton</title>
</head>
<body class="green-bg">
    <?php 
        require_once('../header.php');
    ?>

    <main>
        <a href="<?php echo $base_url; ?>/index.php" class="link-substructure">Home</a> > <a href="<?php echo $base_url; ?>/information/informatie.php" class="link-substructure"> Informatie</a>  > <a href="timontydalton.php" class="link-substructure">Timonty Dalton</a> 
        <div class="wrapper">
            <div class="layout-pages">
                <h1>Timonty Dalton</h1>

                <div class="fontsize-18">
                    <?php
                        $myfile = fopen("../information-textfiles/timontydalton.txt", "r") or die("Unable to open file!");
                        echo fread($myfile,filesize("../information-textfiles/timontydalton.txt"));
                        fclose($myfile);
                    ?>
                </div>
                <img src="../img/information-pictures/timonty%20Dalton.jpg" alt="Timonty Dalton" width="300rem" height="auto">
            </div>
        </div>
    </main>
</body>
</html>