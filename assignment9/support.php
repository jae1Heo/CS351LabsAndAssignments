<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>The Guitar Store</title>
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/support.css">
            <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    
    <body>
        <form action="." method="get">
            <input type="hidden" value="<?php echo "support"; ?>" name="action">
        </form>
        <?php include 'view/header.php';?>
        <?php include 'view/horizontal_nav_bar.php';?> 
        <main>
            <?php include 'view/aside.php'; ?>
             
            <section>
                <h1>
                    Frequently Asked Questions
                </h1>
                <div class="accordion">
                <h2>
                    My guitar is broken. Can you fix it?
                </h2>
                <div>
                   <p> We sure hope so. Sometimes there is damage that is beyond repair or the work just wouldn't be cost effective, but that doesn't happen too often. Bring that ailing axe in to your nearest Guitar Store location and our repair experts will do a free evaluation and let you know.</p>
                </div>
                <h2>
                    What kinds of repairs do you do?
                </h2>
                <div>
                    <p>We can do everything from restringing, tune up and maintenance to electrical repair, hardware repair, structural repair and more.</p>
                </div>
                <h2>
                    Do you perform vendor warranty repairs on new instruments?
                </h2>
                <div>
                    <p>
                        Yes. Guitar Store Repairs offers vendor warranty service and Pro Coverage service for many brands in most of our locations. Please contact your nearest Guitar Store Repairs technician to find out more.
                    </p>
                </div>
                <h2>
                   Do temperature and humidity affect my instrument?
                </h2>
                <div>
                    <p>Unless it's made of graphite, environmental factors definitely make a difference. Depending on where you live, the severity of the effects varies. Extremes of temperature or humidity, as well as drastic shifts between extremes, will take more of a toll and require more frequent setups.</p>
                </div>
                <h2>
                    How can I prolong the life of my instrument?
                </h2>
                <div>
                    <p> It's all about maintenance. From rehearsal to gig night, the world is a dangerous place and no guitar is safe. If you want your instrument alive and kicking for years to come, regular setups and professional repairs are a must.</p>
                </div> 
                </div>
                
            </section>
            
        </main>
        <?php include 'view/footer.php'; ?>
         <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
         <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
         <script src="scripts/support.js"></script>
         <script src="scripts/date.js"></script>
    </body>
    
</html>
