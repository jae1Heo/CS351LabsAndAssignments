
<?php 
    require("../model/database.php"); // importing database
    #require("../model/category_db.php");
    
    // get category
    global $db; // global variable db 
    // variable query1 stores sql query obtains data from schema categories and order them by category id
    $query1 = 'SELECT *  
               FROM categories
               ORDER BY category_id';
    
    $statement1 = $db->prepare($query1); // prepare query for execution
    $statement1->execute(); // executing query
    $categories = $statement1->fetchAll(); // returns all attributes 
    #$statement->closeCursor();
  
    
    #$categories = get_categories();
    
    $category_id = filter_input(INPUT_POST, 'category'); // receiving category id from top-down bar

    if($category_id == null || $category_id == false) { // if $category_id has invalid data, 
        $category_id = 1; // set default category id
    }
    
    // second query obtains attributes that matches category id
    $query2 = 'SELECT * 
              FROM categories
              WHERE category_id = :category_id';    
    $statement2 = $db->prepare($query2); // preparing query
    $statement2->bindValue(':category_id', $category_id); // binding category id with variable category_id
    $statement2->execute();    // executing query
    $category = $statement2->fetch(); // obtaining single attribute that matches category id
    $statement2->closeCursor();     // freeing up the connection to the server.
    $category_name = $category['category_name']; // category name that matches category id
    
    // third query obtains attribute from schema products that matches category id
    $query3 = 'SELECT *
              FROM products
              WHERE category_id = :category_id
             ';
    $statement3 = $db->prepare($query3); // preparing query
    $statement3->bindValue(':category_id', $category_id); // binding category id with variable category_id
    $statement3->execute(); // executing query
    $products = $statement3->fetchAll(); // obtaining all attributes 
    $statement3->closeCursor(); // freeing up the connection to the server
    
      
?>

<html>
    <head>
        <title>The Guitar Store</title>
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/products.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <?php include '../view/header.php'; ?>
        <?php include '../view/navbar.php'; ?>
       
        <main>
            <?php include '../view/aside.php'; ?>
            <section>
                <h1>Product List</h1>
                <form action="." method="post">
                    <select name="category">
                        <?php foreach($categories as $category) : ?>
                        <?php if($category['category_id'] == $category_id): ?>
                        <option selected value="<?php echo $category_id; ?>" name="category"><?php echo htmlspecialchars($category_name);?></option>
                        <?php else : ?>
                        <option value="<?php echo $category['category_id']; ?>" name="category"><?php echo htmlspecialchars($category['category_name']) ?></option>
                        <?php endif; ?>
                         <?php endforeach; ?>
                    </select>
                    <p><===</p>
                    <input type="submit" value="Choose">
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
                    <form action="." submit="post">
                        <td><?php echo $product['product_id']; ?></td>
                        <td><?php echo $product['product_name']; ?></td>
                        <td class="lp"><?php echo $product['list_price']; ?></td>
                        <td><input type="submit" value="edit" name="Edit"></td>
                        <td><input type="submit" value="delete" name="Delete"></td>
                    </form>
                    </tr>
                    <?php endforeach; ?>
                </table>
                
                <h3><a href=".">Add Product</a></h3>
            </section>
            
            
        </main>
        <?php include '../view/footer.php' ?>
         <script src="../scripts/date.js"></script>
    </body>
</html>
    