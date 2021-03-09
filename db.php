<?php
    define('hostname','localhost');
    define('user','root');
    define('password','');
    define('dbname','bookstore');
?>

<?php
    $mysql = new mysqli(hostname,user,password,dbname);
    if($mysql -> connect_error){
        echo "felied to connect to MySQL:".$mysqli -> connect_error;
        exit();
    }else
?>