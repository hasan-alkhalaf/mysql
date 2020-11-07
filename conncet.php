<?php 
$dsn = 'mysql:host=localhost;dbname=shop';
$username = 'root';
$pass = '';
$option =  array(
    
    PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'")
;
    try {
        $conn = new PDO($dsn, $username, $pass, $option);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Successfully" ;
    } 
    
    
    catch (PDOException $e) {
        echo 'faild' . $e->getMessage();
    }


?>