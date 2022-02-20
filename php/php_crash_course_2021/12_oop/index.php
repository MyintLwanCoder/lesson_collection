<?php
//What is class and instance

require_once "Person.php";
require_once "Student.php";
// $student = new Student();
class Person {
    public $name;
    public $surname;
    public $age;
    public static $counter = 0;

    public function __construct($name, $surname) {
        $this->name = $name;
        $this->surname = $surname;
        self::$counter++;
    }
    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public static function getCounter() {
        return self::$counter;
    }
}
$p = new Person("Brad", "Traversy");
$p->setAge(30);
echo '<pre>';
var_dump($p);
echo '</pre>';
echo $p->getAge();

$p2 = new Person("John", "Smith");
echo '<pre>';
var_dump($p2);
echo '</pre>';

echo Person::getCounter();
//Create person class in person.php

//Create instance of person

//Using setter and getter

?>