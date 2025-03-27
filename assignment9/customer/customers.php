<!DOCTYPE html>
<html>
    <head>
        <title>The Guitar Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/customer.css">
    </head>
    <body>
        <?php include 'view/header.php'; ?>
        <?php include 'view/horizontal_nav_bar.php'; ?>
        <main>
            <?php include 'view/aside.php'; ?>
            <section>
                <form action="?" method="get">
                    <input type="hidden" value="Login" name="action">
                    <input type="hidden" value="<?php echo htmlspecialchars($customer_info['customer_id']); ?>" name="cid">
                </form>
                
                <form action="?" method="get">
                    <input type="hidden" value="<?php echo htmlspecialchars($customer_info['customer_id']); ?>" name="cid">
                    <div class="customer_info">
                        <h2>Customer Information</h2>
                        <p>
                            <label>First name:</label>
                            <input type="text" value="<?php echo htmlspecialchars($customer_info['first_name'] ); ?>" name="fname" class="fn">
                        </p>
                        <p>
                            <label>Last name:</label>
                            <input type="text" value="<?php echo htmlspecialchars($customer_info['last_name']); ?>" name="lname" class="ln">
                            <span class="success"></span>
                        </p>
                        <p>
                            <label>Email:</label>
                            <input type="text" value="<?php echo htmlspecialchars($customer_info['email_address']); ?>" name="email_addr" class="email">
                        </p>
                        <p>
                            <label>Password:</label>
                            <input type="password" value="" name="password" class="pw">
                        </p>
                        <p>
                            <label class="cf_label">Confirm Password:</label>
                            <input type="password" value="" name="confirm_p" class="cf">
                        </p>
                        
                        <input type="submit" value="Update Customer Information" name="action" class="c_info_submit">
                    </div>
                </form>

                    <div class="container">
                        <form action="?" method="get">
                            <input type="hidden" value="<?php echo htmlspecialchars($customer_info['customer_id']); ?>" name="cid">
                        <div class="billing">
                             <h2>Billing Address</h2>
                             <p>
                                 <label>Address line 1:</label>
                                 <input type="text" value="<?php echo htmlspecialchars($billing_arr[0]); ?>" name="line_1_b">
                             </p>
                             <p>
                                 <label>Address line 2:</label>
                                 <input type="text" value="<?php echo htmlspecialchars($billing_arr[1]); ?>" name="line_2_b">
                             </p>
                             <p>
                                 <label>City:</label>
                                 <input type="text" value="<?php echo htmlspecialchars($billing_arr[2]); ?>" name="city_b">
                             </p>
                             <p>
                                 <label>State:</label>
                                 <select name="state_b" class="states_b">
                                     <?php foreach($state_list as $st): ?>
                                        <?php if($billing_arr[3] == $st[0]): ?>
                                     <option selected value="<?php echo htmlspecialchars($billing_arr[3]); ?>" name="state_b"><?php echo htmlspecialchars($billing_arr[3]) ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo $st[0]; ?>" name="state_b"><?php echo htmlspecialchars($st[0]) ?></option>
                                        <?php endif; ?>
                                     <?php endforeach; ?>
                                 </select>
                             </p> 
                             <p>
                                 <label>Zip Code:</label>
                                 <input type="text" value="<?php echo htmlspecialchars($billing_arr[4]); ?>" name="zip_b" class="zip_b">
                             </p>
                             <p>
                                 <label>Phone:</label>
                                 <input type="text" value="<?php echo htmlspecialchars($billing_arr[5]); ?>" name="phone_b" class="phone_b">
                             </p>
                             
                             <input type="submit" value="Update Billing Address" name="action" class="c_b_addr_submit">
                        </div>
                        </form>
                        <form action="?" method="get">
                            <input type="hidden" value="<?php echo htmlspecialchars($customer_info['customer_id']); ?>" name="cid">
                        <div class="shipping">
                            <h2>Shipping Address</h2>
                            <p>
                                <label>Address line 1:</label>
                                <input type="text" value="<?php echo htmlspecialchars($shipping_arr[0]) ?>" name="line_1_s">
                            </p>
                            <p>
                                <label>Address line 2:</label>
                                <input type="text" value="<?php echo htmlspecialchars($shipping_arr[1]) ?>" name="line_2_s">
                            </p>
                            <p>
                                <label>City:</label>
                                <input type="text" value="<?php echo htmlspecialchars($shipping_arr[2]) ?>" name="city_s">
                            </p>
                            <p>
                                <label>State:</label>
                                <select name="state_s" class="states_s">
                                    <?php foreach($state_list as $st): ?>
                                        <?php if($shipping_arr[3] == $st[0]): ?>
                                            <option selected value="<?php echo htmlspecialchars($shipping_arr[3]); ?>" name="state_s"><?php echo htmlspecialchars($shipping_arr[3]) ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo htmlspecialchars($st[0]); ?>" name="state_s"><?php echo htmlspecialchars($st[0]); ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </p>
                            <p>
                                <label>Zip Code:</label>
                                <input type="text" value="<?php echo htmlspecialchars($shipping_arr[4]); ?>" name="zip_s" class="zip_s">
                            </p>
                            <p>
                                <label>Phone:</label>
                                <input type="text" value="<?php echo htmlspecialchars($shipping_arr[5]); ?>" name="phone_s" class="phone_s">
                            </p>
                            <input type="submit" value="Update Shipping Address" name="action" class="c_s_addr_submit">
                        </div>
                        </form>
                    </div>
                   
                
            </section>     
        </main>
        
        
        <?php include 'view/footer.php'; ?>
        <script src="scripts/customers.js"></script>
        <script src="scripts/date.js"></script>
    </body>
</html>