<?php 
require_once "employee.php";
class Programmer extends Employee{
    function __construct($name,$salary){
        parent::__construct($name,"programmer",$salary);
    }
    function description()
    {
       return "พัฒนาโปรแกรม";
    }
    function getBonus():string{
          return "10% <br><hr>";  
    }
}
?>