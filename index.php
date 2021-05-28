<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple Static page</title>
</head>
<body data-new-gr-c-s-check-loaded="14.1006.0" data-gr-ext-installed="" style="
    background: #c7c7c7;
">
    <h1 style="
    text-align: center;
    background: #9696e0;
">Simple 




Dynamic 


page</h1>
<h1>Opertors</h1>
<?php
    $a = "a";
    $b = "b";
    $b .= $a;
    echo $b."<br>";
    $num1 = 25;
    $num2 = 24;
    $num3 = 23;
    // ! operator is basically used for negating comparision opertor
    // when we use it with numbers it works differently, if number has 0 it returns 1 otherwise empty string
    echo "*".!$num1."*<br>";
    if ( !($num1 > $num2 ))
    echo "num1 is greatest";
    else
    echo "num1 is not greatest";

echo "<br>";
    // OR Operator => if either of them is true, it will result true
//                        otherwise it will result false
    // shortcircuit of or operator => if first condition is true, it does not check second condition
    if ( $num1 > $num2 OR $num1 > $num3 )
        echo "num1 is greatest";
    else
        echo "num1 is not greatest";

    echo "<br>";



    // AND operator => if both conditions are true it will result true
    //                 otherwise retsult false
    // shortcircuit of And opertor = if first condition fails, it does not check second condition
    if ( $num1 > $num2 && $num1 > $num3 )
        echo "num1 is greatest";
    else
        echo "num1 is not greatest";

    echo "<br>";




    $num1 = 23;
    $num2 = 24;
    // in case of false comparision, it returns empty string, otherwise, 1
    $result = ($num1 == $num2);
    // $result = ($num1 != $num2);
    // $result = ($num1 > $num2);
    // $result = ($num1 < $num2);
    // $result = ($num1 >= $num2);
    // $result = ($num1 <= $num2);
    //$result="";
    //echo ($num1 == $num2);
    echo "*$result*";
    echo "<br>";










    $num1 = 23;
    $num2 = 34;
    $result = $num1 + $num2;
    echo "$num1+ $num2 = $result"."<br>";
    $result = $num1 - $num2;
    echo "$num1 - $num2 = $result"."<br>";
    $result = $num1 * $num2;
    echo "$num1 * $num2 = $result"."<br>";
    $result = $num1 / $num2;
    echo "$num1 / $num2 = $result"."<br>";    
    //$num1 = -35;
    $result = $num1 % $num2;
    echo "$num1 % $num2 = $result"."<br>";
    $result = ++$num1 + $num1++; //$num1 = $num1 + 1;
    // $num1 = 25;
    // $result = 24 + 24;
    // $result = 48;
    echo "$result,$num1"."<br>";
    $num1 = 23;
    $result = 19;

    // $result += $num1;  // $result = $result + $num1;
    // $result -= $num1;  // $result = $result - $num1;
    // $result *= $num1;  // $result = $result * $num1;
    $result /= $num1;  // $result = $result / $num1;
    $result %= $num1;  // $result = $result % $num1;
    echo $result;






?>




 <!-- <p style="
    font-size: 34px;
    text-align: center;
    margin: 130px 20px;
">This is a simple static page, That involve no dynamic processing to generate content.</p>
-->  
<h1>Learning Arrays</h1>

<?php
    /*
        variable name must starts with a char or _
        variable name may contain chars [a-z][A-Z] or _ or 0-9
    */
    $first_name = "abdul";
    $last_name = "qadir";
    $first_Name = "fahad";
    echo $first_name;
    echo "\r\n";
    echo "\r\n";
    echo "\r\n";
    echo "\r\n";
    echo "\r\n";
    echo $first_Name;
    echo "<br>";
    $attendances = Array(
        Array("Fahad",1),
        Array("Aisha", 1),
        Array("Sami", 0)
    );
    /*
        multi-dimention array - an array has other arrays as member, is called MDA
    */

    echo $attendances[0][0]. " is " .  $attendances[0][1];
    echo "<br>";
    echo $attendances[2][0]. " is " .  $attendances[2][1];
    echo "<br>";



    /* Array => a variable that may contain zero or more values
        - Array index/offset start with 0
        - an array with no element/value is called an empty array
        - name should be plural word
    */
    $students = array("Fahad","Aisha");
    echo $students[1];
    echo "<br>";

    $integers = array(15, 12, 9);
    echo $integers[0];
    echo "<br>";

    $decimals = array(15.35, 12.23, 9.567);
    echo $decimals[0];
    echo "<br>";

    $mix = array("Abdul", 12, 9.567);
    echo $mix[0];
    echo '<br>';
    echo $mix[1];
    echo '<br>';
    echo $mix[2];
    echo '<br>';

    echo $mix[1] + $mix[2];

?>
<br>

<h1>General fact</h1>
<p>variable name should be meaningful</p>
<br>







<h1>Learning Comments</h1>
<?php
        //This is php comment
        /* multi line comments
        line 1  comment
        line 2 comment 
        line 3 comment*/
?>
<br>
<!-- this is html comment -->
<h1>Learning variables</h1>
    <?php

        $a = 12;
        $a = $a +1;
        echo $a;
        echo "<br>";
        $name = 'Abdul Q';
        echo "Hello World! $name how are you?";
        echo "Hay " . $name;
        echo ". is a string concatination operator";
        echo "<br>";
        $b = 23.345;
        $a = 12; 
        echo '$a='. $a;
        $a = 99.99;
        echo '$a='. $a;
        $a = "what an idea Sir G!";
        echo '$a='. $a;
        echo "<br>";
        echo $b;


    ?>

</body>
</html>