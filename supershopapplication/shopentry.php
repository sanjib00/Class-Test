<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1> Create Shop</h1>
        <form  method = "POST">

        Code:<input type = 'text' name = 'codeText'> <br />
        Name:<input type = 'text' name = 'nameText'> 

        <input type = "submit" value = "Create" name = 'createButton'> <br />


       


</form>	

        <?php
        {
            require 'shop.php';
            session_start();
            if (isset($_POST['createButton']))
            {
                $shop = new Shop($_POST['codeText'], $_POST['nameText']);
                $_SESSION['shop'] = $shop;
                echo 'created';
            }
        }
        ?>
        
        
    </body>
</html>
