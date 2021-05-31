<?php 

class User {
    public $name;

    public $lastname; 

    protected $products = [];

    public function __construct($_name, $_lastname) {

        $this->name = $_name;
        $this->lastname = $_lastname;
    }

    //funzione per pushare nell'array i prodotti 
    public function addProduct($product) {

        $this->products[] = $product;
    }

    //Funzione per leggere l'array product che è protetto
    public function getProducts() {

        return $this->product;
    }
}

?>