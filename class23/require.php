<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require</title>    
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
    
    <h1>require</h1>
    <div>
        <?php        
            require "code_only.php";
            echo fix_names("muhammad","ali","jinnah");
            echo "<br>";
            doSomething();
            echo "<br>";
            doThatThing();
            echo "<br>";
        ?>
    </div>

    <h1>require once</h1>
    <div>
        <?php        
            require_once "code_only2.php";
            echo fix_names("muhammad","ali","jinnah");
            echo "<br>";
            doSomething();
            echo "<br>";
            doThatThing();
            echo "<br>";
        ?>
    </div>
</body>
</html>