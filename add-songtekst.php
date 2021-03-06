<?php session_start(); ?>

<?php
require_once 'backend/config.php';
if(!isset($_SESSION['user_id']))
{
	header("Location: $base_url/login.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Songtekst toevoegen</title>
    <link rel="icon" href="img/logo/logo-nobg.png">
</head>
<body>
    <?php include_once('header.php') ?>

    <div class="form-style">
        <h2>Songtekst toevoegen</h2>
        <form action="backend/songtekstenController.php" method="POST">
            <input type="hidden" name="action" value="add">

            <div class="form-group">
                <label for="titel">Titel</label>
                <input type="text" name="titel" id="titel" required>
            </div>
            <div class="form-group">
                <label for="artiest">Artiest</label>
                <input type="text" name="artiest" id="artiest">
            </div>
            <div class="form-group">
                <label for="songtekst">Songtekst</label>
                <input type="text" name="songtekst" id="songtekst" required>
            </div>
            <input type="submit" value="Toevoegen">
        </form>
    </div>
</body>
</html>