<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>The Guitar Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bxslider@4.2.17/dist/jquery.bxslider.min.css">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/guitar.css">
    </head>
    <body>
        <?php include 'view/header.php'; ?>
        <?php include 'view/horizontal_nav_bar.php'; ?>
              
        <main>
            <?php include 'view/aside.php'; ?>
            <section>
                <form action="?" method="post">
                    <input type="hidden" value="action=guitars">
                <h1>Our Guitars</h1>
                <h2>Check out our fine selection of premium guitars!</h2>
                <div class="bxslider">
                    <div><img src="images/guitars/Caballero11.png" title="Caballero 11"></div>
                    <div><img src="images/guitars/FenderStratocaster.png" title="Fender Stratocaster"></div>
                    <div><img src="images/guitars/GibsonLesPaul.png" title="Gibson LesPaul"></div>
                    <div><img src="images/guitars/GibsonSB.png" title="GibsonSB"></div>
                    <div><img src="images/guitars/WashburnD10S.png" title="Washburn D10S"></div>
                    <div><img src=" images/guitars/YamahaFG700S.png" title="Yamaha FG700S"></div>
                </div>
                </form>
            </section>
            
        </main>
        <?php include 'view/footer.php'; ?>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bxslider@4.2.17/dist/jquery.bxslider.min.js"></script>
    <script src="scripts/guitar.js"></script>
    <script src="scripts/date.js"></script>
</html>
