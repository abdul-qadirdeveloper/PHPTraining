<?php
    function get_db_connection(){
        global $hn, $un, $pw, $db;

        // connect with database

        $conn = new mysqli($hn, $un, $pw, $db);
        if ($conn->connect_error) die($conn->connect_error);
        return $conn;
    }
    function exec_query($conn, $query){
        $result = $conn->query($query);
        if (!$result) die($conn->error);

        return $result;
    }
?>