<?php


class Product {
   
    private $product_id;
    private $quantity;
    private $balance;


    public function get_product_id() {
        return $this->product_id;
    }

    public function get_quantity() {
        return $this->quantity;
    }

    function __construct($product_id, $quantity) {
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->balance = 0;
    }

    
    public function addproduct($quantity) {
        
        $this->balance += $quantity;
        return 'product added';
    }

}
