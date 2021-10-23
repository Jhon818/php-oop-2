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
    public function __construct($_cart, $_items, $_CreditCard)
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
}
$shop = new Products($_GET['cart'], $_GET['item'], $_GET['premium']);
# credentials card
 $shop->setCredit(['fhsofhsfhs11111', 555, '20,30']);
var_dump($shop);
