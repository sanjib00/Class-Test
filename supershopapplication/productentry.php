
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
     <h1> Add/Update Product</h1>
       
    <form  method = "POST">
        
        Product ID:<input type = 'text' name = 'productIdText'> <br />
        Quanty:<input type = 'text' name = 'quantityText'> 
        <input type = "submit" value = "Add/Update" name = 'addButton'><br />

    </form>
        
        <?php
        
        require_once 'product.php';
        require_once 'shop.php';
        
        session_start();
        
         if(isset($_POST['addButton']))
             {
                 $a_product = new Product($_POST['productIdText'], $_POST['quantityText']);
            /* @var $shop type */
                $shop = $_SESSION['shop'];
                 echo $shop->add_product($a_product);
                 $_SESSION['shop']= $shop;
             }
       
        ?>
    </body>
</html>
