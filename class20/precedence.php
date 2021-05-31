<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precendence</title>    
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
    <h1>Associativity</h1>
    <p>
        
    <?php
        $a = 2.7;
        echo $a;
        echo "<br>";
        $b = (int)$a;
        echo $b; 
        
        echo "<br>";
        $s = " a 12 abdul";
        $c = (int)$s;    
        echo $c;
    ?>
    </p>

    <h1>Bitwise Operators</h1>
    <p>
        <?php
              $a = 10; //00000000000000000000000000001010
              //  00000000000000000000000010
              $b = $a >> 2;       
              echo $b;
        ?>
    </p>
    <h1>Precedence</h1>
    <p>
        <?php        
            $a = 2;
            $b = 3;
            $c = 5;
            // ()
            // ++ --
            // * / %
            // + - .
            // << >>
            //  < > <= >= <>
            // == != !== ===
            //$result = $c + $a * $b;
            //$result = ($c + $a) * $b;
            //$result = $c * ($a + $b);
            //$result = $c * $a / $b;
            //$result = ++$a + $b;
            //$result = $a++ + $a + $b;
              //      = 2 + 3 + 3;
            echo $result;

        ?>
    </p>


</body>
</html>