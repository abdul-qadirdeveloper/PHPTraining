<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predefined Constants</title>
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
    <h1>Predefined Constants</h1>
    <p>
    <?php
      echo "line no: ".__LINE__.'<br>';
      echo "File ".__FILE__.'<br>';
      echo "Dir ".__DIR__.'<br>';
      echo "Function ".__FUNCTION__.'<br>';
      echo "Class ".__CLASS__.'<br>';
      echo "METHOD ".__METHOD__.'<br>';
      echo "NAMESPACE".__NAMESPACE__.'<br>';
      echo "<br>";
      $retVal = DoThis();
      function DoThis(){
        echo "Do this<br>";
        echo "Function ".__FUNCTION__.'<br>';
        echo "Class ".__CLASS__.'<br>';
        echo "METHOD ".__METHOD__.'<br>';
        echo "NAMESPACE".__NAMESPACE__.'<br>';
        return 2;
      } 
    ?>
    </p>

</body>
</html>