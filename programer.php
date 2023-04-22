<?php 
require_once "employee.php";
require_once "office.php";
require_once "company.php";
class Programmer extends Employee implements Office,Company{
    private $exp;
    function __construct($name,$salary,$exp){
        $this->exp=$exp;
        parent::__construct($name,"โปรแกรมเมอร์",$salary);
    }
    function description()
    {
       echo "บทบาท: พัฒนาโปรแกรม";
    }
    function getBonus():string{
          return "10% <br><hr>";  
    }
    function __call($name,$args){
        if($name=="skill"){
            $c = count($args);// นับจำนวน argument
            switch($c){
                case 1:
                    echo "ภาษาที่เขียนได้ :".$args[0]."<br>";
                    break;
                case 2:
                    echo "ภาษาที่เขียนได้ :".$args[0].",".$args[1]."<br>";
                    break;
                case 3:
                    echo "ภาษาที่เขียนได้ :".$args[0].",".$args[1].",".$args[2]."<br>";
                    break;
                default:
                    echo "ไม่มีข้อมูล <br>";
            }
        }
    }
    function __toString():string{
        return "โปรแกรมเมอร์ :".$this->name." เงินเดือน :".$this->salary."<br>";
    }
    public function showData()
    {
        echo "ชื่อ :" . $this->name . "<br/>";
        echo "แผนก :" . $this->department . "<br/>";
        echo "เงินเดือน :" . $this->salary . "<br/>";
        echo "ประสบการณ์ :" . $this->exp . "<br/>";
    }
    public function setCompanyName($name){
      
    }
    public function officeName($name){
        echo "สำนักงาน :".$name."<br>";
    }
    public function setWorking($working):string{
        return "สถานะการทำงาน :".$working."<br><hr>";
    }
   
}
?>