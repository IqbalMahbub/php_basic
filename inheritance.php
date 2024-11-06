<?php
    class employe{
        public $name;
        public $age;
        public $salary;
        function __construct($name,$age,$salary){
            $this->name=$name;
            $this->age=$age;
            $this->salary=$salary;
        }
    
    function info(){
        echo "<h3>Employe Profile</h3>";
        echo "Employee Name".$this->name. "<br>";
        echo "Employee Age".$this->age. "<br>";
        echo "Employee Salary".$this->salary. "<br>";
        echo "<hr>";
    }
}
class manager extends employe{
    public $bonus;
    function __construct($name,$age,$salary,$bonus){
        parent::__construct($name,$age,$salary);
        $this->bonus=$bonus;
    }
    function info(){
        parent::info();
        echo "Manager Bonus".$this->bonus. "<br>";
        echo "<hr>";
    }
}
$employee1 = new employe("John Doe", 30, 50000);
$employee2 = new employe("Jane Doe", 28, 60000);

$manager1 = new manager("David Smith", 45, 70000, 10000);
$manager2 = new manager("Emily Johnson", 35, 80000, 15000);
$manager1->info();

$employee1->info();

?>