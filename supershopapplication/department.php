<?php


class Department {
    
    private $code;
    private $name;
    private $shop_list;
            
    function __construct($code, $name) {
        $this->code = $code;
        $this->name = $name;
        $this->shop_list = array();
    }

    public function add_shop($product)
    {
        
        $department = $_SESSION['department'];
        foreach ($department->get_shop_list as $a_shop)
            {                
                if($a_shop->get_code() == $product->get_product_id())
                {
                    return 'Already Added';
                    break;            
                }
                        
        else
        {
            return 'already exist';
        }
            
    }
    
    }
    public function get_code()        
    {
        return $this->code;
    }

    public function get_name() {
        return $this->name;
    }
    
    public function get_shop_list() {
        return $this->shop_list;
    }


}
