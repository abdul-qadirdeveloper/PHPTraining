<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>    
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
    <h1>Test 1</h1>
    <form method='post' action='uploadingFile.php' enctype='multipart/form-data'>
        Select File: <input type='file' name='abdul' size='10'>
        <input type='submit' value='Upload'>
    </form>
    <div>
        <?php
            if ($_FILES)
            {
                var_dump($_FILES);
                $name = $_FILES['abdul']['name'];
                move_uploaded_file($_FILES['abdul']['tmp_name'], $name);
                echo "Uploaded image '$name'<br><img src='$name'>";
            }
        ?>
    </div>
    <!-- <h1>Test 2</h1>
    <div>
        <?php

        ?>
    </div> -->
    <!-- <h1>Test 3</h1>
    <div>
        <?php        
            
        ?>
    </div> -->
</body>
</html>