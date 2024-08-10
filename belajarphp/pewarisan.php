<?php
class Employee {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function displayInfo() {
        echo "Nama: " . $this->name . ", Umur: " . $this->age . " tahun";
    }
}

class Manager extends Employee {
    private $salary;

    public function __construct($name, $age, $salary) {
        parent::__construct($name, $age);
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo ", Gaji: " . $this->salary;
    }
}

class Staff extends Employee {
    private $division;

    public function __construct($name, $age, $division) {
        parent::__construct($name, $age);
        $this->division = $division;
    }

    public function getDivision() {
        return $this->division;
    }

    public function setDivision($division) {
        $this->division = $division;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo ", Divisi: " . $this->division;
    }
}

// Contoh penggunaan objek pegawai

$manager = new Manager("John Doe", 35, 5000);
$staff = new Staff("Jane Smith", 28, "Keuangan");

$manager->displayInfo(); // Output: Nama: John Doe, Umur: 35 tahun, Gaji: 5000
echo "<br>";
$staff->displayInfo(); // Output: Nama: Jane Smith, Umur: 28 tahun, Divisi: Keuangan

?>