<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
    if($text==""){
        $message = "Je kunt geen lege berrichten verzenden";
    }
    if($text!=""){
        $text_message = "<div class='msgln'><span class='chat-time'>".date("H:i")."</span> <b class='user-name'>".ucfirst($_SESSION['name'])."</b> ".stripslashes(htmlspecialchars($text))."<br></div>";
        file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);
    }

}
?>