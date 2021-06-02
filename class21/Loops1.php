<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>    
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
    <h1>fibonacci series</h1>
    <p>        
        <?php
            $a = 0;
            $b = 1;
            for($i = 0; $i < 10; $i+=2){
                echo "$a <br>";
                echo "$b <br>";
                $a += $b; 
                $b += $a;               
            }
        ?>
    </p>
    <h1>while loop</h1>
    <p>
        <?php
            $a = 10;
            $i = 0;
            while($i < $a){
                echo "$i <br>";
                $i++;
            }

        ?>
    </p>
    <h1>Do...While Loop</h1>
    <p>
        code block will execute atleast once, even if condition failed.
        <?php        
            $a = 10;
            $i = 10;
            do{
                echo "$i <br>";
                $i++;
            }while($i < $a);
        ?>
    </p>
    <h1>Foreach Loop</h1>
    <p>
        <?php        
            $array = [2,4,6,8,10];

            foreach($array as $item){
                echo "$item <br>";
            }

        ?>
    </p>
    <h1>Break Statement in any loop</h1>       
    <p>        
        <?php
            $a = 10;
            $forbiddenNum = 14;
            for($i = 0; $i <= $a; $i++){
                if($i*2 == $forbiddenNum)
                    break;

                echo ($i*2)."<br>";
            }
            echo "loop broken <br>";
        ?>
    </p> 
    <h1>Continue Statement in any loop</h1>       
    <p>        
        <?php
            $a = 10;
            $forbiddenNum = 14;
            for($i = 0; $i <= $a; $i++){
                if($i*2 == $forbiddenNum)
                    continue;

                echo ($i*2)."<br>";
            }
        ?>
    </p> 
    
    <h1>Break statement - search in array</h1>
    <p>
        <?php        
            $array = array(12,24,56,68,90);
            $searchValue = 56;
            $itemIndex = -1;
            foreach($array as $index=>$value){
                if($value == $searchValue)
                {
                    $itemIndex = $index;
                    break; 
                }
            }
            
            if($itemIndex > -1){
                echo "$searchValue exists in array at index $itemIndex";
            }
        ?>
    </p>
</body>
</html>