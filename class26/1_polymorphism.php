<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polymorphism</title>    
    <style>
        body {
            background: #f9f9f9;
            padding-top: 15px;
        }
        body > p, body > div{
            margin: 30px 100px;
        }
        h1{            
            text-align: center;
            color: #e6e6e6;
            background: #777;
            border-radius: 25px;
            margin: 10px 50px;
        }
    </style>
</head>
<body>
    <h1>Polymorphism</h1>
    <div>
    <?php
        // Interface definition
        interface Animal {
            public function makeSound();
        }

        // Class definitions
        class Cat implements Animal {
            public function makeSound() {
                echo " Meow ";
            }
        }

        class Dog implements Animal {
            public function makeSound() {
                echo " Barks ";
            }
        }

        class Mouse implements Animal {
            public function makeSound() {
                echo " Squeak ";
            }
        }

        // Create a list of animals
        $cat = new Cat();
        $dog = new Dog();
        $mouse = new Mouse();
        $animals = array($cat, $dog, $mouse);

        // Tell the animals to make a sound
        foreach($animals as $animal) {
            $animal->makeSound();
            echo "<br>";
        }
        ?>
    </div>

    <h1>Polymorphism</h1>
    <div>
    <?php
        // class Employee{

        // }

        // class BillingEmployee extends Employee{

        // }

        // class CallCenter extends Employee{
            
        // }
        
        // class Captain{

        // }

        // class Customer{

        // }
    ?>
    </div>
</body>
</html>