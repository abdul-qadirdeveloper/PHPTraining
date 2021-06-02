<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting</title>    
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
    <h1>Implicit Casting</h1>
    <p>
        <?php
            $a = 56;
            $b = 12;
            $c = $a / $b;
            $d = ($a / $b)."";
            echo $c;
            echo "<br>";
            echo gettype($d);
            echo "<br>";
            echo gettype($c);
            echo "<br>";
            echo gettype($a);
            echo "<br>";
        ?>
    </p>
     <h1>explicit type casting</h1>
    <p>
        <?php
            $a = 2;
            $b = (string)$a;
            echo gettype($b);
            echo "<br>";

            $a = 56;
            $b = 12;
            $c = $a / $b;
            echo $c;
            echo "<br>";
            echo gettype($c);
            echo "<br>";

            $c = (float)( $a / $b);
            echo $c;
            echo "<br>";
            echo gettype($c);
            echo "<br>";

            

            $a = 56;
            $b = 12;
            $c = (int) ($a / $b);
            echo $c;
            echo "<br>";
            echo gettype($c);
            echo "<br>";
        ?>
    </p> 
    <!-- <h1>Test 3</h1>
    <p>
        <?php        
            
        ?>
    </p> -->
</body>
</html>