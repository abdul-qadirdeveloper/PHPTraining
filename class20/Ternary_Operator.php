<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary Operator</title>    
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
            // ternary operator is a conditional structure
            // condition   ?  <do this if condition true> : <else do this if condition fails>
            $a = 3;
            $a > 2 ? print "$a is greater than 2" : print "$a is less than or equal to 2";
        ?>
    </p>
</body>
</html>