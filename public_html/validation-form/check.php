<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);
   
    
    
    if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
        echo "ytljgecnbvfz lkbyyf kjubyf";
        exit ();
        
    } else  if(mb_strlen($name) < 3 || mb_strlen($name) > 50){
        echo "ytljgecnz";
        exit ();
        
    } else  if(mb_strlen($pass) < 7 || mb_strlen($pass) > 30){
        echo "ytljgecnbvfz dshhfj";
        exit ();
        
    }
    
    
    $pass = md5($pass."ghjsfkld2345");
    
    $mysql = new mysqli('localhost','a916351s_users','Rjnbqwasd2003','a916351s_users');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
    VALUES('$login','$pass','$name')");
    
    
    $mysql->close();
    
    header('Location: /')
?>