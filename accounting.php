<?php 
    require_once "employee.php";
    class Accounting extends Employee{
        function __construct($name,$salary){
            parent::__construct($name,"admin",$salary);
            
        }
        function description(){
            return "จัดการงบประมาณ ,เงินเดือนพนักงาน, จัดการบัญชี";
        }

        function getBonus():string{
            return "20% <br><hr>";  
        }
    }
?>