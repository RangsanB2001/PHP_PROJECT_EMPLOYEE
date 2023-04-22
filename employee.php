<?php
require_once "company.php";
class Employee 
{
    public $name;
    public $department;
    public $salary;

    
    //นิยาม
    function __construct($name, $department, $salary)
    {

        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    public function setEmpName($name)
    {
        $this->name = $name;
    }

    public function setDepartment($Dapartment)
    {
        $this->department = $Dapartment;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    // public function showData()
    // {
    //     echo "ชื่อ :" . $this->name . "<br/>";
    //     echo "แผนก :" . $this->department . "<br/>";
    //     echo "เงินเดือน :" . $this->salary . "<br/>";
    //     echo "<hr>";
    // }
    // abstract public function description();
    // abstract public function getBonus():string;
} //จบการทำงานClass
?>