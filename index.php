<?php
require_once "employee.php";
// require_once "programer.php";
// require_once "accounting.php";
// require_once "sale.php";

// $Emp1 = new Programmer("pond", 25000,5);
// $Emp1->showData();
// $Emp1->officeName("กรุงเทพ");
// echo $Emp1->setWorking("workformhome");
// $Emp2 = new Accounting("pun", 35000);
// $Emp2->showData();
// $Emp3 = new Sale("Jojo", 25000);
// $Emp3->showData();

$Emp1=new Employee("pond","ceo",100000);
showEmployee($Emp1);
function showEmployee(Employee $obj){
    echo "----ข้อมุลพนักงาน---<br>";
    echo "ชื่อ :".$obj->name."<br>";
    echo "ตำแหน่ง :".$obj->department."<br>";
    echo "เงินเดือน :".$obj->salary."<br>";
}
?>