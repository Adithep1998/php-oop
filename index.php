<?php 
    require_once("Accounting.php");
    require_once("Programmer.php");
    require_once("Sale.php");

    //สร้าง object
    $emp1 = new Accounting("Jane","Accounting",20000);
    $emp1->ShowData();

    $emp2 = new Programmer("Kong","IT",50000);
    $emp2->ShowData();

    $emp3 = new Sale("Jojo","Sale",35000);
    $emp3->ShowData();



?>