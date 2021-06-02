<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>    
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
    
    <h1>Sort</h1>
    <div>
        <?php
            $a = [0,'a',1,9,'z','A','Z']; 
            //sort($a, SORT_NUMERIC);
            sort($a, SORT_STRING);
            print_r($a);
            echo "<br>";

             $a1 = [0,9,1,8,7,"z9"];

             print_r($a1);
             echo "<br>";
              sort($a1, SORT_NUMERIC);
              print_r($a1);
              echo "<br>";
             sort($a1, SORT_STRING);
             print_r($a1);
             echo "<br>";

        ?>
    </div>
</body>
</html>