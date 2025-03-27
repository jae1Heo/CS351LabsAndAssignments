<?php 
    //set_include_path(get_include_path() . PATH_SEPARATOR . 'C:\wamp64\www\assignment8\model');
    require('model/database.php');
    require('model/category_db.php');
    require('model/product_db.php');
    require('model/customer_db.php');
    require('model/address_db.php');
    
    
    // nav bar and every working pages will send the action.
    $action = filter_input(INPUT_GET, 'action');
    if($action == null) {
         $action = filter_input(INPUT_POST, 'action');
         
         
         $cats = get_categories();
         include 'home.php';
    }
    else {
         // it includes the page that user selects.
    if($action == 'home') {
        $cats = get_categories();
        include 'home.php';
        exit();
    }
    else if($action == 'shipping') {
        $cats = get_categories();
        include 'shipping.php';
        exit();
    }
    else if($action == 'support') {
        $cats = get_categories();
        include 'support.php';
        exit();
    }
    else if($action == 'products') {
        $cats = get_categories();
        
        
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
        }
        
        // codes for the buttons
        $act = filter_input(INPUT_GET, 'button');
        if($act == null) {
            $act = filter_input(INPUT_GET, 'button');
        }
        else {
            include "index.php?button=".$act;
        }
        
        include 'products/product_list.php';
        exit();
    }
    else if($action == 'user_login') { // user login page
        $cats = get_categories();
        
        
        $email = filter_input(INPUT_GET, "email_addr");
        if($email == null || $email == false) {
            $email = "";
        }

        
        include 'customer/customer_login.php';
        
    }
    else if($action == 'Login') {
        $cats = get_categories();
        
        $email = filter_input(INPUT_GET, 'email_addr');
        
        if($email == null || $email == false) {
            $email = filter_input(INPUT_GET, 'email_addr');
        }
        
        $customer_info = get_customer_info_by_email_address($email);
        
        if($customer_info == null || $customer_info == false) {
            $customer_id = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT);
            if($customer_id == null || $customer_id == false) {
                
                echo "<script>alert(\"Invalid email\");</script>";
                include 'customer/customer_login.php';
                exit();
            }
            $customer_info = get_customer_info($customer_id);
        }
        
        
        $customer_shipping_addr_info = get_address($customer_info['shipping_address_id']);
        $customer_billing_addr_info = get_address($customer_info['billing_address_id']);
        
       
        $shipping_arr = array($customer_shipping_addr_info[0]['line1'],
            $customer_shipping_addr_info[0]['line2'],
            $customer_shipping_addr_info[0]['city'],
            $customer_shipping_addr_info[0]['state'],
            $customer_shipping_addr_info[0]['zip_code'],
            $customer_shipping_addr_info[0]['phone']);
        
        $billing_arr = array($customer_billing_addr_info[0]['line1'],
            $customer_billing_addr_info[0]['line2'],
            $customer_billing_addr_info[0]['city'],
            $customer_billing_addr_info[0]['state'],
            $customer_billing_addr_info[0]['zip_code'],
            $customer_billing_addr_info[0]['phone']);
        
        $state_list = get_states();
        $first = $customer_info['first_name'];
        $last = $customer_info['last_name'];

        
        include 'customer/customers.php';
    }
    else if($action == 'Update Customer Information') {
            $cats = get_categories();

            $customer_id = filter_input(INPUT_GET, 'cid');

            $customer_info = get_customer_info($customer_id);
            
            $first = filter_input(INPUT_GET, 'fname');
            update_first_name($customer_info['customer_id'], $first);
            $last = filter_input(INPUT_GET, 'lname');
            update_last_name($customer_info['customer_id'], $last);
            $email = filter_input(INPUT_GET, 'email_addr');
            update_email_address($customer_info['customer_id'], $email);
            
            $password = filter_input(INPUT_GET, 'password');           
            if($password != null || $password != false) {
                update_password($customer_info['customer_id'], md5($password));
            }

            $state_list = get_states();
            
            $customer_shipping_addr_info = get_address($customer_info['shipping_address_id']);
            $shipping_arr = array($customer_shipping_addr_info[0]['line1'],
                $customer_shipping_addr_info[0]['line2'],
                $customer_shipping_addr_info[0]['city'],
                $customer_shipping_addr_info[0]['state'],
                $customer_shipping_addr_info[0]['zip_code'],
                $customer_shipping_addr_info[0]['phone']);
            
            $customer_billing_addr_info = get_address($customer_info['billing_address_id']);
            $billing_arr = array($customer_billing_addr_info[0]['line1'],
                $customer_billing_addr_info[0]['line2'],
                $customer_billing_addr_info[0]['city'],
                $customer_billing_addr_info[0]['state'],
                $customer_billing_addr_info[0]['zip_code'],
                $customer_billing_addr_info[0]['phone']);
          
            
            include 'customer/customers.php';
        }
        else if($action == 'Update Billing Address') {
            $cats = get_categories();
            
            $customer_id = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT);
            $customer_info = get_customer_info($customer_id);
            
            $billing_line1 = filter_input(INPUT_GET, 'line_1_b');             
            $billing_line2 = filter_input(INPUT_GET, 'line_2_b');  
            $billing_city = filter_input(INPUT_GET, 'city_b');             
            $billing_state = filter_input(INPUT_GET, 'state_b');               
            $billing_zip = filter_input(INPUT_GET, 'zip_b');              
            $billing_phone = filter_input(INPUT_GET, 'phone_b');            
            $tempBillingArr = array($billing_line1, $billing_line2, $billing_city, $billing_state, $billing_zip, $billing_phone);
            update_address($customer_info['billing_address_id'], $tempBillingArr);
            
            $customer_billing_addr_info = get_address($customer_info['billing_address_id']);
            $billing_arr = array($customer_billing_addr_info[0]['line1'],
                $customer_billing_addr_info[0]['line2'],
                $customer_billing_addr_info[0]['city'],
                $customer_billing_addr_info[0]['state'],
                $customer_billing_addr_info[0]['zip_code'],
                $customer_billing_addr_info[0]['phone']);
            
            $customer_shipping_addr_info = get_address($customer_info['shipping_address_id']);
            $shipping_arr = array($customer_shipping_addr_info[0]['line1'],
                $customer_shipping_addr_info[0]['line2'],
                $customer_shipping_addr_info[0]['city'],
                $customer_shipping_addr_info[0]['state'],
                $customer_shipping_addr_info[0]['zip_code'],
                $customer_shipping_addr_info[0]['phone']);
            $state_list = get_states();
            
            include 'customer/customers.php';
        }
        else if($action == 'Update Shipping Address') {
            $cats = get_categories();
        
            
            $customer_id = filter_input(INPUT_GET, 'cid', FILTER_VALIDATE_INT);
            $customer_info = get_customer_info($customer_id);
        
            $shipping_line1 = filter_input(INPUT_GET, 'line_1_s');
            $shipping_line2 = filter_input(INPUT_GET, 'line_2_s');
            $shipping_city = filter_input(INPUT_GET, 'city_s');
            $shipping_state = filter_input(INPUT_GET, 'state_s');
            $shipping_zip = filter_input(INPUT_GET, 'zip_s');
            $shipping_phone = filter_input(INPUT_GET, 'phone_s');
                
            $tempShippingArr = array($shipping_line1, $shipping_line2, $shipping_city, $shipping_state, $shipping_zip, $shipping_phone);
            update_address($customer_info['shipping_address_id'], $tempShippingArr);
            
            $customer_shipping_addr_info = get_address($customer_info['shipping_address_id']);
            $shipping_arr = array($customer_shipping_addr_info[0]['line1'],
                $customer_shipping_addr_info[0]['line2'],
                $customer_shipping_addr_info[0]['city'],
                $customer_shipping_addr_info[0]['state'],
                $customer_shipping_addr_info[0]['zip_code'],
                $customer_shipping_addr_info[0]['phone']);
        
            $customer_billing_addr_info = get_address($customer_info['billing_address_id']);
            $billing_arr = array($customer_billing_addr_info[0]['line1'],
                $customer_billing_addr_info[0]['line2'],
                $customer_billing_addr_info[0]['city'],
                $customer_billing_addr_info[0]['state'],
                $customer_billing_addr_info[0]['zip_code'],
                $customer_billing_addr_info[0]['phone']);
            $state_list = get_states();
            
            include 'customer/customers.php';
        }
    else if($action == 'guitars') {
        $cats = get_categories();
        include 'products/guitars.php';
        exit();
    }
    else {
        $cats = get_categories();
        include 'home.php';
            exit();
    }
 }
    
    
      
 ?>