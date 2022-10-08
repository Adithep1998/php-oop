<?php
    //Super Class
    class Employee {
        private $name;
        private $department;
        private $salary;

        function __construct($name,$department,$salary){
            $this->name = $name;
            $this->department = $department;
            $this->salary = $salary;
        }

        // function __destruct(){
        //     echo "เรียกใช้งาน Destruct <br>";
        // }

        public function setEmpName($name){
            $this->name=$name;
        }
        public function setDepartment($department){
            $this->department=$department;
        }
        public function setSalary($salary){
            $this->salary = $salary;
        }

        public function ShowData(){
            echo "ชื่อพนักงาน = ".$this->name ."<br>";
            echo "ตำแหน่ง = ".$this->department ."<br>";
            echo "เงินเดือน = ".$this->salary ."<br>";
            echo "<hr>";
        }
    }


?>