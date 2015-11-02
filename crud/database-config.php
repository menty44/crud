<?php
   // define database related variables
   $database = 'pdo';
   $host = 'localhost';
   $user = 'root';
   $pass = 'root';

   // try to conncet to database
   $db = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

   if(!$db){

      echo "unable to connect to database";
   }
   
?>