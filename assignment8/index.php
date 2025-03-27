<?php 
    //set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\wamp64\www\assignment8\model');
    require('model/database.php');
    require('model/category_db.php');
    require('model/product_db.php');
    
     // require_once "../model/database.php";
     // require_once "../model/category_db.php";
    
    $cats = get_categories();
    

    // aside
    $cname = filter_input(INPUT_GET, 'category_name');
    // if user didn't press aside buttons, try receive it again
    if($cname == null || $cname == false) {
          $cname = filter_input(INPUT_GET, 'category_name', FILTER_VALIDATE_INT);
    }
    else {
        // for now, the only page working is guitars so every other pages except guitars should redirect to the home page
        if($cname === "guitars") {
              include "products/" . $cname . ".php";
              exit(); 
        }
        else {
              include 'home.php';
              exit();
        }
          
    }
    
    // initializing for product_list
    $category_id = filter_input(INPUT_GET, 'choose', FILTER_VALIDATE_INT);
    $category_name;
    $products;
    // default category = 1
    if($category_id == null || $category_id == false) {
        $category_id = 1;
        $category_name = get_category_name($category_id);
        $products = get_product($category_id);

    }
    else {
        // if the variable category_id is not null, then it have to show the updated product_list page
        $category_name = get_category_name($category_id);
        $products = get_product($category_id);
        include 'products/product_list.php';
        exit();
    }
    
    
    // nav bar and every working pages will send the action.
    $action = filter_input(INPUT_GET, 'action');
    if($action == null) {
         $action = filter_input(INPUT_GET, 'action');
     }
    // it includes the page that user selects.
    if($action == 'home') {
        include 'home.php';
    }
    else if($action == 'shipping') {
        include 'shipping.php';
    }
    else if($action == 'support') {
        include 'support.php';
    }
    else if($action == 'products') {
        
        // codes for the buttons
        $act = filter_input(INPUT_GET, 'button');
        if($act == null) {
            $act = filter_input(INPUT_GET, 'button');
        }
        else {
            include "index.php?button=".$act;
        }
        
        include 'products/product_list.php';
        
    }
    else {
        include 'home.php';
    }

    
    
      
 ?>