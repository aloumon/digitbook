<?php
         $dbhost = 'localhost:3308';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'filter';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

         if(! $conn ) {
            die('Connection Failed!. ' . mysqli_connect_error());
         }
         else{
                echo "Connected Established";
         }
?>
