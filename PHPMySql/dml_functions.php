<?php
     
    function createTableCats($conn){
        
        $query = "CREATE TABLE cats (
            id SMALLINT NOT NULL AUTO_INCREMENT,
            family VARCHAR(32) NOT NULL,
            name VARCHAR(32) NOT NULL,
            age TINYINT NOT NULL,
            PRIMARY KEY (id)
        )";
        
        $result = exec_query($conn, $query);
        if($result)
            echo "table cats created.";
    }

    function describeTableCats($conn){
        $query = "DESCRIBE cats";

        $result = exec_query($conn, $query);

        $rows_count = $result->num_rows;

        echo '<table class="my-table">'.
             '<tr><th>Field</th><th>Type</th><th>Null</th><th>key</th></tr>';
                     
        for ($i = 0 ; $i < $rows_count ; ++$i)
        {
            $result->data_seek($i);
            $row = $result->fetch_array(MYSQLI_NUM);
            echo "<tr>";
            for($c = 0; $c < 4; $c++){
                echo "<td>$row[$c]</td>";
            }
            echo "</tr>";
        }
        echo '</table>';
    }

    function dropTableCats($conn){
        $query = "DROP TABLE cats";

        $result = exec_query($conn, $query);

        if($result)
            echo "table cats dropped!";
    }

    function insertTableCats($conn){
        $query = "INSERT INTO cats VALUES(NULL, 'Lion', 'Leo', 4)";
        $result = exec_query($conn, $query);
        $query = "INSERT INTO cats VALUES(NULL, 'Cougar', 'Growler', 2)";
        $result = exec_query($conn, $query);
        $query = "INSERT INTO cats VALUES(NULL, 'Cheetah', 'Charly', 3)";
        $result = exec_query($conn, $query);

        if($result){
            echo "records inserted in cats table";
        }
    }

    function updateTableCats($conn){
        $query = "UPDATE cats SET FAMILY='Tiger' WHERE Id = 1";
        $result = exec_query($conn, $query);

        if($result){
            echo "records updated in cats table";
        }
    }
    function deleteTableCats($conn){
        $query = "DELETE FROM cats WHERE Id = 1";
        $result = exec_query($conn, $query);

        if($result){
            echo "records deleted from cats table";
        }
    }

    function fetchTableCats($conn){
        $query = "SELECT * FROM cats";

        $result = exec_query($conn, $query);

        $rows_count = $result->num_rows;

        echo '<table class="my-table">'.
             '<tr><th>Id</th><th>Family</th><th>Name</th><th>Age</th></tr>';
                     
        for ($i = 0 ; $i < $rows_count ; ++$i)
        {
            $result->data_seek($i);
            $row = $result->fetch_array(MYSQLI_NUM);
            echo "<tr>";
            for($c = 0; $c < 4; $c++){
                echo "<td>$row[$c]</td>";
            }
            echo "</tr>";
        }
        echo '</table>';
    }
?>