<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop';
    $username = 'root'; // default myphpadmin username
    $password = ''; // default myphpadmin password
    try {
        $db = new PDO($dsn, $username, $password);
    }
    catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../view/database_error.php');
        exit();
    }
    
    
    