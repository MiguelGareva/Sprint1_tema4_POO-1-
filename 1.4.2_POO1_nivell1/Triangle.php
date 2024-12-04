<?php 

class Triangle extends Shape{

    public function calculateArea(){
        echo "The area of this triangle is: " . $this->width * $this->height / 2 . "<br>";
    }
}

?>