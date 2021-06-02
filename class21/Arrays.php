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
    <h1>Array By Index</h1>
    <p>
        <?php
            //$printers = array("Ink Jet","Dot Matrix", "Laser","Photo Copier");
            $printers[] = "Ink Jet";
            $printers[] = "Dot Matrix";
            $printers[] = "Laser";
            $printers[]="Photo Copier";
            
            // other way to assign into array
            //$printers = array("Ink Jet","Dot Matrix", "Laser","Photo Copier");

            print_r($printers);
            echo "<br>";
            $count =  count($printers);
            echo $count;
            echo "<br>";
            echo "key-value <br>";
            // how to retrive array items
            foreach ($printers as $key => $printer) {
                echo $key." ".$printer."<br>";
            }
            echo "<br>";
            // another way to retrieve array items, avoid it
            echo "another way <br>";
            for($i = 0; $i<$count; $i++){
                echo $printers[$i]."<br>";
            }
        ?>
    </p>
    <h1>Associative Arrays</h1>
    <p>
        <?php
            // $animals["Cat"] = "Meo Meo" ;
            // $animals["Dog"] = "Wof wof";

            //other way to assign into this array
            $animals = [ "cat" => "Meo Meo" , "Dog" => "Wof wof"];


            print_r($animals);
            echo "<br>";
            // retriving array 
            foreach ($animals as $key => $animal) {
                echo $key."=>".$animal."<br>";
            }
        ?>
    </p>
    <h1>each function</h1>
    <p>
        <?php        
            $paper = array('copier' => "Copier & Multipurpose",
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer",
            'photo' => "Photographic Paper");
            print_r(each($paper));
            while(list($item, $description) = each($paper))
                echo "$item: $description<br>";
            
        ?>
    </p>
    <h1>list function</h1>
    <p>
        <?php        
            list($a, $b) = array('Alice', 'Bob','Cent');
			echo "a=$a b=$b c=$c";

        ?>
    </p>
    <h1>Multidimentional</h1>
    <div>
        <?php        
            $students = [
                'Sami'=>[
                    'html'=>'90',
                    'css'=>'80',
                    'php'=>'70'
                ],
                'Kanwal'=>[
                    'html'=>'90',
                    'css'=>'80',
                    'php'=>'70'
                ]
            ];

            foreach ($students as $studentName => $courses) {
                if($studentName == "Sami"){
                    continue;
                }
                echo "$studentName:";
                foreach ($courses as $courseName => $Percentage) {
                    echo "<pre>\t\t$courseName: $Percentage%</pre>";
                }
            }

            echo count($students);
            echo "<br>";
            echo count($students, 0); // limit counting to only the top level
            echo "<br>";
            echo count($students, 1); //force recursive counting of all subarray elements 
            echo "<br>";
        ?>
    </div>

    <h1>is_array function</h1>
    <div>
        <?php
           $a = 2;
           $b = array();
           echo  is_array($a)?"a is an array": "a is not an array";
           echo "<br>";
           echo is_array($b) ? "b is an array" : "b is not an array";
           echo "<br>";

        ?>
    </div>

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
             echo "<br>";




            $printers1[] = "Ink Jet";
            $printers1[] = "Dot Matrix";
            $printers1[] = "Laser";
            $printers1[]="Photo Copier";
            
            print_r($printers1);
            echo "Shuffle<br>";
            shuffle($printers1); 
            print_r($printers1);           
            echo "<br>";
            sort ($printers1);
            print_r($printers1);
            echo "<br>";

            $printers11["cadfs"] = "Ink Jet";
            $printers11["dsdfsd"] = "Dot Matrix";
            $printers11["bsdfds"] = "Laser";
            $printers11["asdfd"]="Photo Copier";
            

            print_r($printers11);
            echo "<br>";
            sort ($printers11);
            print_r($printers11);
            echo "<br>";
        ?>
    </div>

    <h1>Explode</h1>
    <div>
    <?php
         $str = "This;;is;my;car." ;   
        $ex = explode(';', $str,3);
        print_r($ex);
    ?>
    </div>
</body>
</html>