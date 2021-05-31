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
    <h1>Functions</h1>
    <p>
        <?php
            function celebrate(){
                echo "<span style='color: red;'>Hurraaa!</span>  <br>";
            }

            echo "we won the match <br>";
            celebrate();
            echo "I got my first freelance project! <br> ";
            celebrate();
        ?>
    </p>
    <h1>Function with arguments and return value</h1>
    <p>
        <?php
             function add($num1, $num2){
                 $ans = $num1 + $num2;
                 return $ans;
                 //return array($ans, $num1, $num2);
             }

             $returnValue = add (2, 3);
             echo $returnValue;
        ?>
    </p>
    <h1>Function with arguments by reference</h1>
    <p>
        <?php        
            $testNum = 10;
            
            function increment ($num){
                 $num+=2;
                 echo $num ;
            }
            
            increment($testNum);            
            echo $testNum;
            echo "<br>";
            
            function increment2 (&$num){
                $num+=2;
            }
            
            increment2($testNum);            
            echo $testNum;
            echo "<br>";
        ?>
    </p>
</body>
</html>