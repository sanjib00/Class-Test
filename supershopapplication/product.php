<?php


class Product {
   
    private $product_id;
    private $product_quantity;
   
    public function get_product_id() {
        return $this->product_id;
    }

    public function get_product_quantity() {
        return $this->product_quantity;
    }

    function __construct($product_id, $quantity) {
        $this->product_id = $product_id;
        $this->product_quantity = $quantity;
    }


    public function set_product_quantity($product_quantity) {
        $this->product_quantity = $product_quantity;
    }
}
