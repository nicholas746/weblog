<?php

   $servername='localhost';
   $username='root';
   $password='12345678';
   $dbname='webblog';

   $connect=mysqli_connect($servername, $username, $password, $dbname);
   mysqli_close($connect);


   if(!$connect){
      die("conection: failed".    
      mysqli_connect_error());
  }else{
      echo "connection : OK";
  }
  


?>