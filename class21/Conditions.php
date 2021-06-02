<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditions</title>    
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
    <h1>If statement (Else is optional)</h1>
    <p>
        when you want to execute certain set of statement on certain condition, you use If block<br>
        <br>
        If block consist of 2 parts <br>
        <br>
        1. Condition<br>
        2. execution body<br>
            -- if execution body consist of only one statement you do not need to enclose it in {}<br>
        <br>
        Else Block is optional, if provided, it will execute if condition fails<br><br><br>
        <?php
            $age = 16;
            if($age < 18)
                echo "You are a kid <br>";
        ?>     
        <br>   
        <?php
        $age = 25;
        if($age < 18){
            echo "You are a kid <br>";
            echo "better to focus on your studies, life is not like cartoons. <br>";
        }
        ?>
        <br>If-Else block
        <?php
            
            if($age < 18){
                echo "You are a kid <br>";
                echo "better to focus on your studies. <br>";
            }else{
                echo "Welcome to adult gange  <br>";
                echo "Be responsible now, life is not like cartoons network <br>";                
            }

        ?>
    </p>
    <h1>ELSEIF statement</h1>
    <p>
        <?php
            if($age < 18){
                echo "You are a kid <br>";
                echo "better to focus on your studies. <br>";
            }elseif($age < 25){
                echo "you are old enough now  <br>";
                echo "you got a degree, and a job too, think about saving money. <br>";                
            }else{
                echo "Get married now, Allah has made everything in pair. <br>";
            }
        ?>
    </p>
    <br>
    <h1>Switch statement</h1>
    <p>
        <?php        
            $luckyNumber = 99; // 1-100
            switch ($luckyNumber) {
                case 11:
                    echo "You won refrigerator!";
                    break;
                
                case 22:
                    echo "You won 32' Television!";
                    break;
                case 34:
                case 33:
                    echo "you won tap recorder!";
                    break;
                case 44:
                    echo "you won Iron!";
                    break;
                default:
                    echo "you won nothing :(, better luck next time! ";
                    break;
            }

        ?>
    </p>
    <h1>Conditional Operator - Ternary operator</h1>
    <p>
        <?php        
            $age = 19;
            $message = ($age < 18?"still younger":"Hay! young man");
            echo $message;
        ?>
    </p>
</body>
</html>