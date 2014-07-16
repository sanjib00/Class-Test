
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
        require_once 'department.php';
        
        session_start();
        
         if(isset($_POST['addButton']))
             {
                 $product = new Product($_POST['productIdText'], $_POST['quantityText']);
            /* @var $department type */
                $department = $_SESSION['department'];
                 echo $department->add_product($product);
                 $_SESSION['department']= $department;
             }
       
        ?>
    </body>
</html>
