<?php
require_once "accounting.php";
require_once "programer.php";
require_once "sale.php";
require_once "company.php";
//object

echo Company::$companyName."<br>";
Company::info();

$Emp1 = new Accounting("jan", 20000);
$Emp1->showData();
$Emp1->description();
$Emp1->getBonus();

$Emp2 = new Programmer("pond", 25000);
$Emp2->showData();
$Emp2->description();
$Emp2->getBonus();

$Emp3 = new Sale("Jojo", 25000);
$Emp3->showData();
$Emp3->description();
$Emp3->getBonus();
?>