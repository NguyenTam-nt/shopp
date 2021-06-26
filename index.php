<?php 
    require_once("database.php");
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

                    <div class="container" style="margin-top: 50px">
                        <div class="row">
                            <?php 
                            $sql = "SELECT count(id) as number from Sanpham";
                                $result =  execute($sql); 
                                    $number = 0;
                                    if($result != null && count($result) > 0) {
                                            $number = $result[0]["number"];
                                    }
                                    $page = ceil($number/8);
                                    $currenPage = 1;
                                    if(isset($_GET["page"])) {
                                            $currenPage = $_GET["page"];
                                    }
                                        $index = ($currenPage - 1)*8;
                                    $sql = 'SELECT  *  FROM Sanpham LIMIT '.$index.', 8';
                                    $result = execute($sql);
                                    foreach($result as $sanpham) {
                                      echo ' <div class="col-md-3">
                                                        <img src="./Images/'.$sanpham['image'].'" alt="" style="width: 100%">
                                                        <p>'.$sanpham['title'].'</p>
                                                        <p>'.$sanpham['price'].'<del>'.$sanpham['discount'].'</del></p>
                                                </div>
                                          ';
                                    }
                            
                            ?>                          
                        </div>
                        <div class="row">
                                        <ul class="pagination">
                                            <?php
                                                for($i = 1; $i <= $page; $i++) {
                                                echo '<li><a href="?page='.$i.'" class="page-link ">'.$i.'</a></li>';
                                                }
                                            ?>
                                        </ul>
                        </div>
                    </div>
</body>
</html>