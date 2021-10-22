<?php
#importing 
require 'index.php';

#created class
class Products extends ShopOnline
{
    #importing CreditCards through Trait
   use CreditCards;
#instance variables
    public $cart;
    public $items;

#constructor function
    public function __construct($_cart, $_items,$_CreditCard)
    {
        $this->cart = $_cart;
        $this->items = $_items;
        $this->CreditCard = $_CreditCard;
        #rederclared instance variables
    }
# setting and getting

    public function getItems()
    {
        return $this->items;
    }
    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getCredit()
    {
        return $this->CreditCard;
    }
    public function setCredit($CreditCard)
    {
        if (is_array($CreditCard)) {
            $this->CreditCard = $CreditCard;
        }
        throw new \Exception("Error Processing Request");
        
    }
}
echo 'ciao';
$shop = new Products($_GET['cart'], $_GET['discount'], $_GET['item'], $_GET['premium']);

// var_dump($shop);
// $shop->setCart('string1');
// $shop->getCart('', []);
// $shop->setDiscount('string2');
// $shop->setItem('string3');
var_dump($shop);


?>