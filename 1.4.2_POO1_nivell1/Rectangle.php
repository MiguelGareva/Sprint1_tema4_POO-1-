<?php 

class Rectangle extends Shape{

    public function calculateArea(){
        echo "The area of this rectangle is: " . $this->width * $this->height . "<br>";
    }
}

?>