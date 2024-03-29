<?php
require_once "employee.php";
class Accounting extends Employee
{
    function __construct($name, $salary)
    {
        parent::__construct($name, "admin", $salary);

    }
    function description()
    {
        return "จัดการงบประมาณ ,เงินเดือนพนักงาน, จัดการบัญชี";
    }

    function getBonus(): string
    {
        return "20% <br><hr>";
    }
    public function showData()
    {
        echo "ชื่อ :" . $this->name . "<br/>";
        echo "แผนก :" . $this->department . "<br/>";
        echo "หน้าที่ :" . $this->description() . "<br/>";
        echo "เงินเดือน :" . $this->salary . "<br/>";
        echo "<hr>";
    }

}
?>