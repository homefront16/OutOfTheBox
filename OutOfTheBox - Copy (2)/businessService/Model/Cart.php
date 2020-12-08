<?php


class Cart
{
    private $userID; // Owner of the cart
    private $items = Array(); // Associative array of items in the cart(product_id=>qty, poduct_id=>qty)
    private $subtotals = Array();  // Associative array. (prod_id=>cost, prod_id=>cost, prod_id=>cost)
    private $totalPrice; // florat. Total cost of all items in the cart
    
    
    function __construct($userID){
        
        $this->userID = $userID;
        $this->items = array();
        $this->subtotals = array();
        $this->totalPrice = 0;
    }
    
    function addItem($prodID){
        // Assuming cart is empty
        if(array_key_exists($prodID, $this->items)){
            // add 1 if item already in the cart
            $this->items[$prodID] += 1;
        }
        else{
            $this->items = $this->items + array($prodID => 1);
        }
        
        
    }
    
    function updateQuantity($prodID, $newQuantity){
        if(array_key_exists($prodID, $this->items)){
            // add 1 if item already in the cart
            $this->items[$prodID] = $newQuantity;
        }
        else{
            $this->items = $this->items + array($prodID => $newQuantity);
        }
        
        if($this->items[$prodID] == 0){
            unset($this->items[$prodID]);
        }
        
    }
    
    function calcTotal() {
        //Calculate the total for each product in the cart
        // Claculate the total for the entire cart
        $productBS = new ProductBusinessService();
        // Create an array to hold the subtotals
        $this->totalPrice = 0;
        $subtotalArray = Array();
        foreach($this->items as $item => $quantity){
            $product = $productBS->findProductByID($item);
            $productSubtotal = $product->getPrice() * $quantity;
            $subtotalArray = $subtotalArray + array($item => $productSubtotal);
            $this->totalPrice = $this->totalPrice + $productSubtotal;
        }
        
        $this->subtotals = $subtotalArray;
        
    }
    /**
     * @return mixed
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * @return multitype:
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return multitype:
     */
    public function getSubtotals()
    {
        return $this->subtotals;
    }

    /**
     * @return number
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    /**
     * @param mixed $userID
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    /**
     * @param multitype: $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @param multitype: $subtotals
     */
    public function setSubtotals($subtotals)
    {
        $this->subtotals = $subtotals;
    }

    /**
     * @param number $totalPrice
     */
    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }


    
}


?>
