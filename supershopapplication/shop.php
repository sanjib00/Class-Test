<?php


class Shop {
    
    private $code;
    private $name;
    private $product_list;
            
    function __construct($code, $name) {
        $this->code = $code;
        $this->name = $name;
        $this->product_list = array();
    }

   public function add_product($a_product)
    {
        foreach ($this->product_list as $product) {
            
            if($product->get_product_id()== $a_product->get_product_id())
            {
               $total_quantity = $product->get_product_quantity() + $a_product->get_product_quantity();
               $product->set_product_quantity($total_quantity);
               return "Product Quantity Updated";
            }
      
        }
        $this->product_list[] = $a_product;
        return 'Product added';
    }
    
    
    
    public function get_code()        
    {
        return $this->code;
    }

    public function get_name() {
        return $this->name;
    }
    
    public function get_product_list() {
        return $this->product_list;
    }
     
    public function get_all_products()
    {
        return $this->product_list;
    }


}
