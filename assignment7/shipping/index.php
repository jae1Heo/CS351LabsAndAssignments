<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>Shipping cost</title>
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/shipping.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php include '../view/header.php'; ?>
        <?php include '../view/navbar.php'; ?>
     
    <main>
        <?php include '../view/aside.php'; ?> 
        <section>
            <h2>
                Shipping Costs
            </h2>
            <div>
                <label>Enter costs of the product:</label>
                <input type="text" id="cost">
                <input type="button" id="calculate" value="Calculate">
            </div>
            <div>
                <label>Total cost, including shipping:</label>
                <input type="text" id="result" disabled>
            </div>
        </section>
    </main>
    <?php include '../view/footer.php'; ?> 
    <script src="../scripts/shipping.js"></script>
    <script src="../scripts/date.js"></script>
</body>  
</html>
