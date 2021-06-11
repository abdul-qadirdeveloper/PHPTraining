<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filing</title>    
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
    <h1>file exists</h1>
    <div>
    <?php
        if (file_exists("testfile.txt")) 
            echo "File exists";             
        else
            echo "File does not exist."

    ?>
    </div>
    <h1>writing</h1>
    <div>
    <?php // testfile.php
        $fh = fopen("testfile.txt", 'w') or die("Failed to create file");
        $text = <<<_END
        Line 1
        Line 2
        Line 3
        Line 4
        _END;
        fwrite($fh, $text) or die("Could not write to file");
        fclose($fh);
        echo "File 'testfile.txt' written successfully";
    ?>
    </div>
    <h1>reading First line</h1>
    <div>
    <?php
        $fh = fopen("testfile.txt", 'r') or
        die("File does not exist or you lack permission to open it");
        $line = fgets($fh);
        echo $line;
        $line = fgets($fh);
        echo $line;
        fclose($fh);
    ?>
    </div>
    <h1>reading line by line</h1>
    <div>
    <?php
        $myfile = fopen("testfile.txt", "r") or die("Unable to open file!");
        // Output one line until end-of-file
        while(!feof($myfile)) {
        echo fgets($myfile) . "<br>";
        }
        fclose($myfile);
    ?>

    </div>
    <h1>Reading full</h1>
    <div>
    <?php
        $myfile = fopen("testfile.txt", "r") or die("Unable to open file!");
        echo "<pre>".fread($myfile,filesize("testfile.txt"))."</pre>" ;
        fclose($myfile);
    ?>
    </div>
    <h1>copying files</h1>
    <div>
    <?php // copyfile2.php
        if (!copy('testfile.txt', 'testfile2.txt')) echo "Could not copy file";
        else echo "File successfully copied to 'testfile2.txt'";
    ?>
    </div>
    <h1>renaming or moving a file</h1>
    <div>
    <?php // movefile.php
        if (!rename('testfile2.txt', 'testfile2.new'))
            echo "Could not rename file";
        else 
            echo "File successfully renamed to 'testfile2.new'";
    ?>

    </div>
    <h1>Deleting</h1>
    <div>
    <?php // deletefile.php
        if (!unlink('testfile2.new')) 
            echo "Could not delete file";
        else 
            echo "File 'testfile2.new' successfully deleted";
    ?>

    </div>
    <h1>update file</h1>
    <div>
        <?php // update.php
			$fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
			$text = "\r\nAbdul"; //fgets($fh);
			fseek($fh, 0, SEEK_END);
            // Optional. Possible values:
            // SEEK_SET - Set position equal to offset. Default
            // SEEK_CUR - Set position to current location plus offset
            // SEEK_END - Set position to EOF plus offset (to move to a position before EOF, the offset must be a negative value)
			fwrite($fh, $text) or die("Could not write to file");
			fclose($fh);
			echo "File 'testfile.txt' successfully updated";
	    ?>

    </div>
    <h1>Reading an entire File</h1>
    <div>
    <?php
        echo "<pre>"; // Enables display of line feeds
        echo file_get_contents("testfile.txt");
        //echo file_get_contents("https://www.wikipedia.org/");
        echo "</pre>"; // Terminates pre tag
    ?>
    </div>


</body>
</html>