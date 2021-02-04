<?php 
    class Books{
        public $Totalpage =100;
        public function name(){
            echo "Success book";
        }
        public function price(){
            echo "Rs.900";
        }
        public function pages(){
            return $this->Totalpage ;
        }
        public function setPages(){
            $this->Totalpage = 50;
        }
      }

      $obj = new Books();
      $obj->name();
      echo $obj->pages();
      $obj->setPages();
      echo $obj->pages();
      


      // This is example of extends 
      class MyClass {
        public function hello() {
          echo "Hello World!";
        }
      }
      
      class AnotherClass extends MyClass {
      }
      
      $obj = new AnotherClass();
      $obj->hello();


      //This is the example of constructor

      class Fruit {
        public $name;
        public $color;
      
        function __construct($name) {
          $this->name = $name;
        }
        function get_name() {
          return $this->name;
        }
      }
      
      $apple = new Fruit("Apple");
      echo $apple->get_name();
?>