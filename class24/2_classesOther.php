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
    <h1>Static Properties and Methods</h1>
    <div>
        <p> static variables are accessed with Class name and :: sign, if they are called outside of class <br>
            but we use self keyword with ::, if they are called inside class
            while calling, they should include $ before variable name <br>

            they are shared among instances <br></p>
        <?php
            echo User::$activeUserCount;
            echo "<br>";
            User::defaultPassword();

            $user1 = new User("a","a");
            $user1->login();
            echo User::$activeUserCount;
            echo "<br>";

            $user2 = new User("a","a");
            $user2->login();
            echo User::$activeUserCount;
            echo "<br>";

            $user3 = new User("a","a");
            $user3->login();
            echo User::$activeUserCount;
            echo "<br>";

            $user4 = new User("a","a");
            $user4->login();
            echo User::$activeUserCount;
            echo "<br>";

            $user5 = new User("a","a");
            $user5->login();
            echo User::$activeUserCount;
            echo "<br>";

            $user6 = new User("a","a");
            $user6->login();
            echo User::$activeUserCount;
            echo "<br>";

            $user1->logout();
            echo User::$activeUserCount;
            echo "<br>";

            $newUser = User::createNewUser("abdul");
            echo $newUser->username;
            echo "<br>";
            echo $newUser->password;
            echo "<br>";

            class User
            {
                public $username;
                public $password;
                public static $activeUserCount = 0;
                
                static function defaultPassword()
                {
                    echo "I am returning Default password <br>";
                    return "default";
                }

                public static function createNewUser($username)
                {
                    $password = self::defaultPassword();

                    // save $username and $password in database
                    return new User($username, $password);

                }

                public function __construct($username, $password)
                {
                    $this->username = $username;
                    $this->password = $password;
                }

                public function login()
                {
                    // check database
                    self::$activeUserCount++;
                    return true;
                }

                public function logout()
                {
                    // logout from database
                    self::$activeUserCount--;
                    return true;
                }

                
            }
            
        ?>
    </div>
    <h1>Implicit Property Declaration</h1>
    <div>
    <p>It is perfectly legal to define a class with no property and no methods, i.e an empty class</p>
    <p>if you assign a value to a property which actually does not exist in the class, 
    PHP automatically create property with that name. therefore, be careful, while assigning a value to a variable,
    if you mispelled it, it will not prompt an error, instead, it will just create another property in the class</p>
        <?php
            $object1 = new AnotherUser();
            $object1->naem = "Alice";  // it will create a property name in class AnotherUser

            echo $object1->naem;
            echo "<br>";
            echo var_dump($object1);
            echo "<br>";
            class AnotherUser 
            {
                public $name = "Abdul";
            }

        ?>
    </div>
    <h1>Property declaration</h1>
    <div>
            <p> you may initialize a property by a constant/literal, but can not use expression</p>
        <?php        
            define('const1',20);

            class Test{
                const TATA = 33;
                public $num1  = 23;
                public $num2 = const1;
                public $num3 = const1 *2;
                public $num4 = Self::TATA*2;
                //public $num5 = $this->num1; // not possible
                public $num6 = Self::TATA;

                public function Init()
                {
                    $this->num5 = $this->num1;
                }
            }    
            $test1 = new Test;
            echo $test1->num1;
            echo "<br>";
            echo $test1->num2;
            echo "<br>";
            echo $test1->num5;
            echo "<br>";
            //echo $test1->num3;
            echo "<br>";
        ?>
    </div>
    
    <h1>Declare Constants</h1>
    <div>
    <p>similar to global constant, but member of class. once you define it, you can not change it.
    <br>constants are accessed using :: similar to static property</p>
        <?php
            
        echo Translate::ENGLISH;
        echo "<br>";

        Translate::lookup();
        echo "<br>";

        class Translate
        {
            const ENGLISH = 0;
            const SPANISH = 1;
            const FRENCH = 2;
            const GERMAN = 3;
            // ...
            static function lookup()
            {
                echo self::SPANISH;
            }
        }
        ?>
    </div>    
    <h1>Property Scope - Using Access Modifier</h1>
    <div>
        <?php
            class Fruit
            {
                public $name = "Fruit";
                protected $color = "red";
                private $weight = "2 Kg";

                public function get_weight(){
                    return $this->weight;
                }
            }

            class JuicyFruit extends Fruit{
                public function doSomething()
                {
                    echo $this->name;
                    echo "<br>";
                    echo $this->color;
                    echo "<br>";
                    echo $this->weight;
                    echo "<br>";
                }
            }

            $mango = new Fruit();
            $mango->name = 'Mango'; // OK
            //$mango->color = 'Yellow'; // ERROR
            //$mango->weight = '300'; // ERROR
            echo $mango->get_weight();
            echo "<br>";

            $myFavourite = new JuicyFruit;
            $myFavourite->doSomething();
        ?>
    </div>
    <h1>Test 1</h1>
    <div>
        <?php
        
        ?>
    </div>
</body>
</html>