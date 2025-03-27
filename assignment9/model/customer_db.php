<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


    function get_customer_info($customer_id) {
        global $db;
        $query = 'SELECT *
                 FROM customers
                 WHERE customer_id = :customer_id
                ';
        $statement = $db->prepare($query);
        $statement->bindValue(':customer_id', $customer_id);
        $statement->execute();
        $customer_info = $statement->fetch();
        $statement->closeCursor();
        return $customer_info;
    }
    
    // used for assignment 9
    function get_customer_info_by_email_address($email_address) {
        global $db;
        $query = '
                 SELECT *
                 FROM customers
                 WHERE email_address = :email_address';
        $statement = $db->prepare($query);
        $statement->bindValue(':email_address', $email_address);
        $statement->execute();
        $customer_info = $statement->fetch();
        $statement->closeCursor();
        return $customer_info;
        
    }
    
    function update_first_name($customer_id, $first_name) {
        global $db;
        // sql query
        $query = 'UPDATE customers
                  SET first_name     = :first_name
                  WHERE customer_id  = :customer_id';
        $statement = $db->prepare($query); // preparing query to db
        
        // binding values
        $statement->bindValue(':first_name', $first_name);
        $statement->bindValue(':customer_id', $customer_id);
        
        $statement->execute(); // executing query
        $statement->closeCursor();
        // echo $statement->rowCount() // update success messgage
    }
    
    function update_last_name($customer_id, $first_name) {
        global $db;
        // sql query
        $query = 'UPDATE customers
                  SET last_name    = :last_name
                  WHERE customer_id = :customer_id
                 ';
        // preparing query to db
        $statement = $db->prepare($query);
        // binding values
        $statement->bindValue(':last_name', $first_name);
        $statement->bindValue(':customer_id', $customer_id);
        
        $statement->execute(); // executing query
        $statement->closeCursor();
        // echo $statement->rowCount() // update success message
    }
    
  function update_email_address($customer_id, $email_address) {
      global $db;
      // sql query
      $query = 'UPDATE customers
                SET email_address   = :email_address
                WHERE customer_id   = :customer_id
                ';
      // preparing query to db
      $statement = $db->prepare($query);
      $statement->bindValue(':email_address', $email_address);
      $statement->bindValue(':customer_id', $customer_id);
      
      $statement->execute(); // executing query
      $statement->closeCursor();
      // echo $statement->rowCount(); // update success message
      
  }
  
  function update_password($customer_id, $password) {
      global $db;
      // sql query
      $query = 'UPDATE customers
                SET password        = :password
                WHERE customer_id   = :customer_id
                ';
      // preparing query to db
      $statement = $db->prepare($query);
      // binding value for query
      $statement->bindValue(':password', $password);
      $statement->bindValue(':customer_id', $customer_id);
      
      $statement->execute(); // executing query
      $statement->closeCursor();
      // echo $statement->rowCount() // update success message?
  }