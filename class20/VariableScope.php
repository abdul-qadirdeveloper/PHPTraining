<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vairable Scope</title>    
    <style>
        body {
            background: #f9f9f9;
            padding-top: 15px;
        }
        body p{
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
    <h1>local scope</h1>
    <p>
        variables declared in a function are considered as local variables <br>
        <?php
            $num = 7;

            function changeIt(){
                $num = 14;
                $num++;
                print "\$num inside function is $num <br>";
            }

            changeIt();
            changeIt();
            print "\$num outside function is $num <br>";
        
        ?>
    </p>
    <h1>Fucntion Parameters</h1>
    <p>
        <?php
            function multiply($num){
                $num *= 10;
                return $num;
            }

            $testNumber = 5;
            $returnNumber = multiply($testNumber);
            echo "\$testNumber is same ($testNumber), as only parameter was multiplied, and function return $returnNumber <br>";
        ?>
    </p>
    <h1>Global Variables</h1>
    <p>
        global variable are declared out of any function or classs and can be accessed in any part
        of the program using GLOBAL keyword <br>
        <?php        
        $gNum = 21; // global variable
        
        function increment(){
            GLOBAL $gNum; // explicitly declaring global variable

            $gNum++;

            print "\$gNum is $gNum";
        }
        
        increment();
        print "\$gNum is $gNum";
        ?>
    </p>
    <h1>Static Variables</h1>
    <p>
        static variable can be declared with in function. its value remains even after function exits.
        static variables are declared using keyword STATIC <br>
        <?php        
        
        function keepCount(){
            static $count = 0; // explicitly declaring global variable

            $count+=5;

            print "\$count is $count <br>";
        }
        
        keepCount();
        keepCount();
        keepCount();
        keepCount();
        keepCount();
        ?>
    </p>
</body>
</html>