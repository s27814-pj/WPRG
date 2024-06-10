<?php
    class Product {
        private $name, $price, $quantity;

        /**
         * @param $name
         * @param $price
         * @param $quantity
         */
        public function __construct($name, $price, $quantity)
        {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getPrice()
        {
            return $this->price;
        }

        /**
         * @param mixed $price
         */
        public function setPrice($price)
        {
            $this->price = $price;
        }

        /**
         * @return mixed
         */
        public function getQuantity()
        {
            return $this->quantity;
        }

        /**
         * @param mixed $quantity
         */
        public function setQuantity($quantity)
        {
            $this->quantity = $quantity;
        }

        public function __toString()
        {
            // TODO: Implement __toString() method.
            return "Product: " . $this->getName() . ", Price: " . $this->getPrice() . ", Quantity: " . $this->getQuantity();
        }


    }

    $test1 = new Product("name", 7.7, 7);
    $test2del = new Product("2del", 77.7, 77);
    $test2 = new Product("2na", 77.7, 77);
    //echo $test1;

    class Cart {
        private $products;

        public function __construct()
        {
            $this->products = [];
        }

        public function addProduct(Product $product){
            array_push($this->products, $product);

    }
    public function removeProduct(Product $product){
    foreach ($this->products as $index => $val){
        if($product->getName()===$val->getName()){
            unset($this->products[$index]);
            $this->products=array_values($this->products);
        }
    }
    }
    public function getTotal(){
            $total =0;

        foreach ($this->products as $p){
            $total+= $p->getPrice()*$p->getQuantity();
        }
        return $total;
    }


        public function __toString()
        {
            $string = "Products in cart: </br>";

            foreach ($this->products as $p){
                $string.= $p;
                $string.= "</br>";
            }
            $string.= "Total price: " . $this->getTotal();
            return $string;
        }


    }
    $testCart = new Cart();
    $testCart->addProduct($test1);
    $testCart->addProduct($test2del);
    $testCart->addProduct($test2);
    $testCart->removeProduct($test2del);
    echo $testCart;