<?php
declare(strict_types=1);
class Employee{
    public string $name;
    public float $salary;

    public function __construct(string $name, float $salary){

        $this->name = $name;
        $this->salary = $salary;
    }

    public function calculateIfTaxes() {

        if($this->salary > 6000) {
            echo $this->name . " must pay taxes.";
        } else {
            echo $this->name . " does not have to pay taxes.";
        }
    }
}

?>