<?php 
     $url =  "localhost";
     $servername = "root";
     $passwd  =  "";
     $database = "banhang";

    $connect = mysqli_connect($url, $servername, $passwd, $database);
    mysqli_set_charset($connect, "utf8");
    if($connect->connect_error){
        var_dump($connect->connect_error);
        die();
}
?>