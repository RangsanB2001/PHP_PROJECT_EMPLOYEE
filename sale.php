<?php
    require_once "employee.php";
    class Sale extends Employee{
        function __construct($name,$salary){
            parent::__construct($name,"sale",$salary);
        }
        function description()
        {
          return "ขายโปรแกรม";
        }
        function getBonus():string{
            return "15% <br><hr>";  
        }
    }
?>