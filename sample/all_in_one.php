<?php 

// set database connection parameter variables

$hn = 'localhost';
$db = 'employees';
$un = 'root';
$pw = '';

// connect with database

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

// execute query

$query = "SELECT * FROM departments";
$result = $conn->query($query);
if (!$result) die($conn->error);

// fetch data
$rows = $result->num_rows;
for ($j = 0 ; $j < $rows ; ++$j)
{
    $result->data_seek($j);
    $row = $result->fetch_assoc();
    echo 'Dept No: ' . $row['dept_no'] . '<br>';
    echo 'Name: ' . $row['dept_name'] . '<br>';
    echo 'Location: ' . $row['location'] . '<br>';
    echo '<br>';
}

// release resources

$result->close();
$conn->close();








?>