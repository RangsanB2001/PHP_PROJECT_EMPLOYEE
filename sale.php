<?php
require_once "employee.php";
require_once "office.php";
class Sale extends Employee implements Office
{
    function __construct($name, $salary)
    {
        parent::__construct($name, "sale", $salary);
    }
    function description()
    {
        return "ขายโปรแกรม";
    }
    function getBonus(): string
    {
        return "15% <br><hr>";
    }
    function __call($name,$args){

    }
    function __toString(){
        return "พนักงานขายชื่อว่า :".$this->name. "ค่าจ้าง :".$this->salary."<br>";
    }
    public function showData()
    {
        echo "ชื่อ :" . $this->name . "<br/>";
        echo "แผนก :" . $this->department . "<br/>";
        echo "หน้าที่ :" . $this->description() . "<br/>";
        echo "ค่าคอม :" . $this->salary . "<br/>";
        echo "<hr>";
    }
    public function officeName($name){
        echo "สำนักงาน :".$name."<br>";
    }
    public function setWorking($working):string{
        return "สถานะการทำงาน :".$working."<br><hr>";
    }

}
?>