<?php
    interface Animal{
        public function makeSound();
    }

    class Cat implements Animal{
        public function makeSound()
        {
            echo "Meow";
        }
    }

    class Dog implements Animal{
        public function makeSound()
        {
            echo " Bark";
        }
    }

    class Mouse implements Animal{
        public function makeSound()
        {
            echo " Squeak";
        }
    }

    // create a list of animal
    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();
    $animals = array($cat , $dog , $mouse);

    // tell the animals to make a sound
    foreach($animals as $animals) {
        $animals->makeSound();
    }
?>