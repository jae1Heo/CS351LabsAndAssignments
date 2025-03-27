<html>
    <head>
        <title>The Guitar Store</title>
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/products.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <?php include 'view/header.php'; ?>
        <?php include 'view/horizontal_nav_bar.php'; ?>
       
        <main>
            
            
            <?php include 'view/aside.php'; ?>
            <section>
                <h1>Product List</h1>
                   <form action="?" method="get">
                        <input type="hidden" value="products" name="action">
                        <select name="choose">
                            <?php foreach($cats as $category) : ?>
                            <?php if($category['category_id'] == $category_id): ?>
                            <option selected value="<?php echo $category_id; ?>" name="choose"><?php echo htmlspecialchars($category_name);?></option>
                            <?php else : ?>
                            <option value="<?php echo $category['category_id']; ?>" name="choose"><?php echo htmlspecialchars($category['category_name']) ?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                            </select>
                            <===
                        <input type="submit" value="choose">
                   </form>
                
                    <h2><?php echo htmlspecialchars($category_name); ?></h2>
               
                <table>
                    <tr>
                        <td><b>Product ID</b></td>
                        <td><b>Name</b></td>
                        <td class="price"><b>Price</b></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <?php foreach($products as $product): ?>
                    <tr>
                        <td><?php echo $product['product_id']; ?></td>
                        <td><?php echo $product['product_name']; ?></td>
                        <td class="lp"><?php echo $product['list_price']; ?></td>
                        <td><form action="?" method="get"><input type="submit" value="edit" name="button"></form></td>
                        <td><form action="?" method="get"><input type="submit" value="delete" name="button"></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <h3><a href="?action=add">Add Product</a></h3>
                
                <form action="." method="get">
                <input type="hidden" value="<?php echo "products"; ?>" name="action">
                </form>
              </section>
            
        </main>
        <?php include 'view/footer.php' ?>
         <script src="scripts/date.js"></script>
    </body>
</html>
    