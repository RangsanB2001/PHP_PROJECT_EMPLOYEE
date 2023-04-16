<?php
require_once "company.php";
abstract class Employee 
{
    private $name;
    private $department;
    private $salary;

    
    //นิยาม
    function __construct($name, $Department, $salary)
    {

        $this->name = $name;
        $this->department = $Department;
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

    public function showData()
    {
        echo "ชื่อ :" . $this->name . "<br/>";
        echo "แผนก :" . $this->department . "<br/>";
        echo "หน้าที่ :" . $this->description()."<br/>";
        echo "เงินเดือน :" . $this->salary . "<br/>";
        echo "ได้รับโบนัส :".$this->getBonus()."<br/>";
    }
    abstract public function description();
    abstract public function getBonus():string;
} //จบการทำงานClass
?>