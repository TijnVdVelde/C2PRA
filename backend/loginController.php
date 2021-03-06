<?php 
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

require_once ("conn.php");
$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute([
    ":username" => $_POST['username']

]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if($statement->rowCount() < 1)
{
    die("Error, dit account bestaat niet");
}
if(!password_verify($password, $user['password']))
{
    die("Error, dit wachtwoord is niet juist");
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['username'];
header("Location: $base_url/admin.php");
?>