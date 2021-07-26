<?php
    require('connect.php');
    
    $category = 'คอม';
    $type = "hp";
    $amount = "10";



    $sql =" INSERT INTO gooods(category,type,amount)  VALUES ('$category','$type', '$amount')";
    $result=mysqli_query($sql, $connect);
    
    if($result){
        echo ได้;
    }else{
        ไม่รู้ๆๆๆๆๆๆๆ;
    }

?>