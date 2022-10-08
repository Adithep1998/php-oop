<?php require_once("Employee.php");

    class Programmer extends Employee{
       function __construct($name,$salary){
            parent::__construct($name,"Programmer",$salary);
            echo "ทำงานที่บริษัท ".$this->CompanyName . "<br>";
       }
    }

?>