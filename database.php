<?php 
                function execute($sql) {
                    $url =  "localhost";
                    $servername = "root";
                    $passwd  =  "";
                    $database = "banhang";
               
                   $connect = mysqli_connect($url, $servername, $passwd, $database);
                   mysqli_set_charset($connect, "utf8");
                    $result = mysqli_query($connect, $sql);            
                    $data = [];
                        while($row = mysqli_fetch_array($result,1)){
                                $data[] = $row;
                        }
                        $connect->close();
                        return $data;
                    }
?>