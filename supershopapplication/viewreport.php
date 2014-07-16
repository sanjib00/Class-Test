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
            require_once 'department.php';
            require_once 'product.php';            
            session_start();
            /* @var $department Department */
            $department = $_SESSION['department'];
            echo $department->get_code(). '<br/>';
            echo $department->get_name(). '<br/>';
            echo $department->get_shop_list(). '<br/>';
            echo 'Product ID ------------ Quantity'. '<br/>';
            foreach ($department->get_shop_list() as $a_shop) {
            echo $a_shop->get_product_id(). ' '. $a_shop->get_quantity(). '<br/>';
            }
                    
        ?>
    </body>
</html>
