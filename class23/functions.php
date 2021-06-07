<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>    
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
    <h1>string functions</h1>
    <div>
        <?php
            echo strrev(" .dlrow olleH"); // Reverse string
            echo "<br>";
            echo str_repeat("Hip ", 4); // Repeat string
            echo "<br>";
            echo strtoupper("hooray!"); // String to uppercase
            echo "<br>";
            
            //For our current function, we’ll use its counterpart, strtolower:
            $lowered = strtolower("aNY # of Letters and Punctuation you WANT");
            echo $lowered;            
            echo "<br>";
            
            //PHP also provides a ucfirst function that sets the first character of a string to uppercase:
            $ucfixed = ucfirst("any # of letters and punctuation you want");
            echo $ucfixed;
            echo "<br>";
            
            echo fix_names("WILLIAM", "henry", "gatES");
            echo "<br>";

            function fix_names($n1, $n2, $n3)
            {
                $n1 = ucfirst(strtolower($n1));
                $n2 = ucfirst(strtolower($n2));
                $n3 = ucfirst(strtolower($n3));
                return $n1 . " " . $n2 . " " . $n3;
            }

            	//shows how you can use an array to return function values.
            $names = fix_names_array("WILLIAM", "henry", "gatES");
            echo $names[0] . " " . $names[1] . " " . $names[2];
            echo "<br>";

            function fix_names_array($n1, $n2, $n3)
            {
                $n1 = ucfirst(strtolower($n1));
                $n2 = ucfirst(strtolower($n2));
                $n3 = ucfirst(strtolower($n3));
                return array($n1, $n2, $n3);
            }

            $a1 = "WILLIAM";
            $a2 = "henry";
            $a3 = "gatES";
            echo $a1 . " " . $a2 . " " . $a3 . "<br>";
            fix_names2($a1, $a2, $a3);
            echo $a1 . " " . $a2 . " " . $a3;
            echo "<br>sending function argument as reference is not a best practice, avoid it, take it as a prophyecy <br>";
            function fix_names2(&$n1, &$n2, &$n3)
            {
                $n1 = ucfirst(strtolower($n1));
                $n2 = ucfirst(strtolower($n2));
                $n3 = ucfirst(strtolower($n3));
            }

            $a1 = "WILLIAM";
            $a2 = "henry";
            $a3 = "gatES";
            echo $a1 . " " . $a2 . " " . $a3 . "<br>";
            fix_names3();
            echo $a1 . " " . $a2 . " " . $a3;
            function fix_names3()
            {
                global $a1; 
                $a1 = ucfirst(strtolower($a1));
                global $a2; 
                $a2 = ucfirst(strtolower($a2));
                global $a3; 
                $a3 = ucfirst(strtolower($a3));
            }


        ?>
    </div>
    <h1>numeric functions</h1>
    <div>
        <?php
            print(5-8);
            echo "<br>";

            //The expression 5-8 is evaluated first, and the output is –3. If the expression contains a function, that function is evaluated first as well:
            print(abs(5-8));
            echo "<br>";
        ?>
    </div>
    <!-- <h1>Test 3</h1>
    <div>
        <?php        
            
        ?>
    </div> -->
</body>
</html>