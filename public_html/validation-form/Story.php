<?php
    $title = filter_var(trim($_POST['title']),
    FILTER_SANITIZE_STRING);
    $text = filter_var(trim($_POST['text']),
    FILTER_SANITIZE_STRING);

   

    
    $mysql = new mysqli('localhost','a916351s_users','Rjnbqwasd2003','a916351s_users');
    $mysql->query("INSERT INTO `Stories` (`title`, `text`)
    VALUES('$title','$text')");
    
    
    $mysql->close();
    
    header('Location: /')
?>