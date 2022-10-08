<?php 
    require_once("Accounting.php");
    require_once("Programmer.php");
    require_once("Sale.php");

    //สร้าง object
    $emp1 = new Accounting("Jane",20000); // ไม่ต้องระบุตำแหน่ง เพราะกำหนดไว้ใน construct แล้ว
    $emp1->ShowData();

    $emp2 = new Programmer("Kong",50000);
    $emp2->ShowData();

    $emp3 = new Sale("Jojo",35000);
    $emp3->ShowData();



?>