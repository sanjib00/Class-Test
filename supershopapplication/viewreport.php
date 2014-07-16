<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Shop Details </h1>
        <?php
            require_once 'shop.php';
            require_once 'product.php';            
            session_start();
            /* @var $shop Department */
            $shop = $_SESSION['shop'];
            echo "Shop Code: ".$shop->get_code(). '<br/>';
            echo "Shop Name: ".$shop->get_name(). '<br/>';
            
            echo 'Product-Id--->Quantity'. '<br/>';
            foreach ($shop->get_all_products() as $a_product) {
                echo $a_product->get_product_Id(). ' ---> '. $a_product->get_product_quantity(). '<br/>';
            }
                    
        ?>
    </body>
</html>
