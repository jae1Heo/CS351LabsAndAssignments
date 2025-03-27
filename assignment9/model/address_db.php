<?php

function get_address($address_id) {
    global $db;
    // sql statement
    $query = 'SELECT *
              FROM addresses
              WHERE address_id  = :address_id
              ';
    
    // preparing query to db
    $statement = $db->prepare($query);
    
    // binding value
    $statement->bindValue(':address_id', $address_id);
    $statement->execute(); // executing query
    $address = $statement->fetchAll(); // getting address info
    $statement->closeCursor(); // closing cursor
    return $address; // returning address information
}

function update_address($address_id, $addr_info_arr) {
    global $db;
    // sql statement
    $query = 'UPDATE addresses
              SET line1         = :line1,
                  line2         = :line2,
                  city          = :city,
                  state         = :state,
                  zip_code      = :zip_code,
                  phone         = :phone
              WHERE address_id = :address_id';
    
    $statement = $db->prepare($query); // preparing query to db
    $size = count($addr_info_arr); // variable size to get size of array address
    $col_arr = array('line1', 'line2', 'city', 'state', 'zip_code', 'phone'); // array for binding values
    for($i = 0; $i < $size; $i++) {
        $statement->bindValue(":".$col_arr[$i], $addr_info_arr[$i]); // binding values
    }
    
    // binding address id 
    $statement->bindValue(':address_id', $address_id);
    $statement->execute(); // executing query
    
    $statement->closeCursor(); // closing cursor
    
    
}

function get_states() { 
    global $db;
    // sql query
    $query = 'SELECT state
              FROM state_tax_rates
              ORDER BY state
             ';
    // preparing query for db
    $statement = $db->prepare($query);
    $statement->execute(); // executing statement
    $tax_rates = $statement->fetchAll(); // getting state info
    $statement->closeCursor(); // closing cursor
    
    return $tax_rates; // returning state info
    
}