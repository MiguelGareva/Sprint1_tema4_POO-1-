<?php 

class Rectangle extends Shape{

    public function calculateArea(){
        echo "The area of that rectangle is: " . $this->width * $this->height;
    }
}

?>