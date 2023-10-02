<?php
    // Abstract class Person
abstract class Person {
    abstract public function greet();
}

// Interface Greeting
interface Greeting {
    public function sayHello();
}

// Class EnglishPerson extends Person
class EnglishPerson extends Person {
    public function greet() {
        return "Hello!";
    }
}

// Class GermanPerson extends Person
class GermanPerson extends Person {
    public function greet() {
        return "Hallo!";
    }
}

// Class FrenchPerson implements Greeting
class FrenchPerson implements Greeting {
    public function sayHello() {
        return "Bonjour!";
    }
}

// Function to greet a person using polymorphism
function greetPerson($person) {
    if ($person instanceof Person) {
        return $person->greet();
    } elseif ($person instanceof Greeting) {
        return $person->sayHello();
    } else {
        return "Unsupported person type";
    }
}

// Create instances of different persons
$englishPerson = new EnglishPerson();
$germanPerson = new GermanPerson();
$frenchPerson = new FrenchPerson();

// Greet persons using polymorphism
echo "English Person: " . greetPerson($englishPerson) . "<br>";
echo "German Person: " . greetPerson($germanPerson) . "<br>";
echo "French Person: " . greetPerson($frenchPerson) . "<br>";

?>