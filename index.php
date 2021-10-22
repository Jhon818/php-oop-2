
<?php
#created class
class ShopOnline
{
#instance variables
    public $cart;
    public $discount;
    public $item;
    public $userPremium;

#constructor function
    public function __construct($_cart, $_discount, $_item, $_userPremium)
    {
        $this->cart = $_cart;
        $this->discount = $_discount;
        $this->item = $_item;
        $this->userPremium = $_userPremium;
        #rederclared instance variables
    }
# setting and getting
    public function getCart($item, $cart)
    {
        if (!empty($cart)) {
            return $cart = $item;

        }
        echo 'ciao';
        throw new \Exception("Error Processing Request");

    }
    public function setcart($cart)
    {
        $this->cart = $cart;
    }

    public function getDiscount()
    {
        return $this->discount;
    }
    public function setDiscount($discount, $userPremium)
    {
        if ($userPremium == 'premium') {
            $this->discount = 0.3;
        }
        $this->discount = $discount;
    }

    public function getitem()
    {
        return $this->discount;
    }
    public function setItem($item)
    {
        $this->item = $item;
    }

}
/**
 *
 *
 */
trait CreditCards
{
    public $CreditCard = ['fhsofhsfhs11111', 555, '20,30'];
}

$shop = new ShopOnline($_GET['cart'], $_GET['discount'], $_GET['item'], $_GET['premium']);

// var_dump($shop);
$shop->setCart('string1');
// $shop->getCart('', []);
// $shop->setDiscount('string2');
// $shop->setItem('string3');
var_dump($shop);
