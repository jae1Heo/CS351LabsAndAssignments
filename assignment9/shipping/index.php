<?php
    header("Location: /assignment8");
    exit();
    /*
    require('../model/database.php');
    require('../model/category_db.php');
    require('../model/product_db.php');
    
    $cats = get_categories();
    
    $cid = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
      if($cid == null) {
          $cid = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
      }
      else {
          $path = "/assignment8/products/" . get_category_name($cid) . "/index.php";
          //include $path;
          header("Location: " . $path);
          exit();
      }
    
    
      $nav = filter_input(INPUT_GET, 'nav');
      if($nav == null) {
          $nav = filter_input(INPUT_GET, 'nav');
      }
      else {
          $path = "/assignment8";

          if($nav === 'products' || $nav === 'shipping' || $nav === 'support') {
              $path = $path . "/" . $nav . "/index.php";
          }
          else {
              $path = $path . "/index.php";         
          }
          
          header("Location: " . $path);
              exit();
          
      }
      
    include 'shipping.php';
     
     */