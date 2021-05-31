<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo Vs Print</title>    
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
    <h1>Echo Vs Print</h1>
    <p>
        <?php
            echo "print using echo <br>";        
            $print_return = print "print using print <br>";        
            echo $print_return;
            echo "<br>";
            $a = 3;
            //$a > 2 ? echo "greater" : echo "not greater";
            $a > 2 ? print "greater" : print "not greater";
        ?>
    </p>
</body>
</html>