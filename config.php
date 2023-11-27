<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'lavajato';
    
    $connect = new mysqli($server,$user,$password,$database);
    

    //   if($connect->connect_error)
    //   {
    //       echo "Em manutenção";
    //   }
    //   else
    //   {
    //       echo "Bem vindo";
    //   }

?>