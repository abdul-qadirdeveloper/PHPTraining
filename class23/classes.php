<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>    
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
    <h1>Test 1</h1>
    <div>
        <?php
        $object = new User;
        $object2 = new User;
        
        print_r($object);
        echo "<br>";

        $object->name = "Jhon Doe";
        $object->password = "mypass";
        print_r($object); 
        echo "<br>";
        $object->save_user();
        echo "<br>";


        class User
        {
            public $name, $password;
            function save_user()
            {
                echo "Save User code goes here";
            }
        }
        
        ?>
    </div>
    <h1>copying an object</h1>
    <div>
        <?php
            	$object1 = new Anotheruser;
                $object1->name = "Alice";// did you notice no $ sign before name of the variable
                $object2 = $object1;
                $object2->name = "Amy";
                echo "object1 name = " . $object1->name . "<br>";
                echo "object2 name = " . $object2->name;
                class Anotheruser
                {
                    public $name;
                }
        ?>
    </div>    
    <h1>Cloning</h1>
    <div>
        <?php        
            	//clonnign a obkject
                $object1 = new Onceagianuser();
                $object1->name = "Alice";
                $object2 = clone $object1;
                $object2->name = "Amy";
                echo "object1 name = " . $object1->name . "<br>";
                echo "object2 name = " . $object2->name;
                class Onceagianuser
                {
                    public $name;
                }
        ?>
    </div>
    <h1>this, getter, setter, instanceof </h1>
    <div>
        <?php        
            class Fruit {
                // Properties
                private $name;
                private $color;
              
                // Methods
                function set_name($name1) {
                  $this->name = $name1;
                }
                function get_name() {
                  return $this->name;
                }
                function set_color($color1) {
                  $this->color = $color1;
                }
                function get_color() {
                  return $this->color;
                }
            }
              
              $apple = new Fruit();
              $apple->set_name('Apple');
              $apple->set_color('Red');
              echo "Name: " . $apple->get_name();
              echo "<br>";
              echo "Color: " . $apple->get_color();
              echo "<br>";
              var_dump($apple);
              echo "<br>";
              var_dump($apple instanceof Fruit);
              echo "<br>";
        ?>
    </div>
    <h1>Constructor destructor</h1>
    <div>
        <?php        
            class Fruit1 {
                public $name;
                public $color;
            
                function __construct($name, $color) {
                $this->name = $name;
                $this->color = $color;
                }
                function get_name() {
                return $this->name;
                }
                function get_color() {
                return $this->color;
                }

                
                function __destruct() {
                    echo "The fruit is {$this->name} and the color is {$this->color}.";
                }
            }
            
            $apple = new Fruit1("Apple", "red");
            echo $apple->get_name();
            echo "<br>";
            echo $apple->get_color();
        ?>
    </div>
    <h1>Test 3</h1>
    <div>
        <?php        
            
        ?>
    </div>
    <h1>Test 3</h1>
    <div>
        <?php        
            
        ?>
    </div>
</body>
</html>