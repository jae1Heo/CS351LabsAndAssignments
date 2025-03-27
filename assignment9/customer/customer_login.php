<!DOCTYPE html>
<html>
    <head>
        <title>The Guitar Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/customer_login.css">
    </head>
    <body>
        <?php include 'view/header.php'; ?>
        <?php include 'view/horizontal_nav_bar.php'; ?>
        <main>
            <?php include 'view/aside.php'; ?>
            <section>
                <form action="?" method="get" class="login_form">
                    <input type="hidden" value="Login" name="action">
                    <h1>Customer Login</h1>
                    <label>Email Address:</label>    
                    <input type="text" value="<?php echo htmlspecialchars($email); ?>" name="email_addr" class="email">
                    <input type="submit" value="Login" name="action " class="login">             
                </form>  
                <form action="home">
                    <input type="button" value="Cancel" class="cancel">
                </form>
            </section>     
        </main>
        
        <?php include 'view/footer.php'; ?>
        <script>
            "use strict";
            let cncl = document.querySelector(".cancel");
            let emil = document.querySelector(".email");
       
            let cancel = () => {
                emil.value = "";
                emil.focus();
            };

           document.addEventListener("DOMContentLoaded", () => { 
               cncl.addEventListener("click", cancel);
           });
            
        </script>
        <script src="scripts/date.js"></script>
    </body>
</html>