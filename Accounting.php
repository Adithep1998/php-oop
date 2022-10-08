<?php require_once("Employee.php");

    class Accounting extends Employee{
        function __construct($name,$salary){
            parent::__construct($name,"Accounting",$salary);
        }
    }

?>