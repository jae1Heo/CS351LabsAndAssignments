
<?php 
    
    header("Location: /assignment8/");
    exit();
    /*
    require('../model/database.php');
    require('../model/category_db.php');
    require('../model/product_db.php');
    
    $cats = get_categories();
    // receiving category database
    
    $category_id = filter_input(INPUT_POST, 'category');
    // default category = 1
    if($category_id == null) {
        $category_id = 1;
    }
    
    $category_name = get_category_name($category_id);
    $products = get_product($category_id);
    
    //
    $cid = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
      if($cid == null) {
          $cid = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
      }
      else {
         switch($cid):
             case 1:
                 include 'guitars.php';
                 exit();
             case 2:
                 header("Location: ../index.php");
                 exit();
             case 3:
                 header("Location: ../index.php");
                 exit();
             case 4:
                 header("Location: ../index.php");
                 exit();
             default:
                 header("Location: ../index.php");
                 
         endswitch;
      }
      
      // edit, delete button part
      $act = filter_input(INPUT_GET, 'action');
      if($act == null) {
          $act = filter_input(INPUT_GET, 'action');
      }
      else {
           header("Location: /assignment8/index.php?action=".$act);
      }
      
     
      // nav bar part
     $nav = filter_input(INPUT_GET, 'nav');
      if($nav == null) {
          //include 'product_list.php';
          $nav = filter_input(INPUT_GET, 'nav');
      }
      else {
          if($nav == 'home') {
              header("Location: /assignment8/index.php?nav=home");
              exit();
          }
          else if($nav == 'products') {
              include 'product_list.php';
              exit();
          }
          else if($nav == 'support') {
              header("Location: /assignment8/index.php?nav=support");
          }
          else if($nav == 'shipping') {
              header("Location: /assignment8/index.php?nav=shipping");
          }
          else {
              header("Location: /assignment8/index.php?nav=home");
          }
          
      }
      
      include 'product_list.php';
    
    
     */

?>

