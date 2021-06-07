<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Version Check</title>    
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
    <h1>Version Check</h1>
    <div>
        <?php
            $ver = phpversion();
            echo $ver;
        ?>
    </div>
     <h1>Feature Check</h1>
    <div>
        <?php
            if (function_exists("array_combine"))
            {
                echo "Function exists";
            }
            else
            {
             echo "Function does not exist - better write our own";
            }            
        ?>
    </div> 
    <!-- <h1>Test 3</h1>
    <div>
        <?php        
            
        ?>
    </div> -->
</body>
</html>