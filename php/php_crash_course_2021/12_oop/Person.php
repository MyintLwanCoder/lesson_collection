<?php
/** User: The Codeholic...*/ 

class Person {
    public  string $name;
    public string $surname;
    public ?int $age;
    public static  int $count = 0;

    public function __construct($name, $surname, $age) 
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = null;
        self::$counter++;
    }
    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
    public static function getCount() {
        return self::$count;
    }
}