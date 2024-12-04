<?php 

require_once("Employee.php");

$employee = new Employee ("Miguel", 120000);

$employee->calculateIfTaxes();

?>