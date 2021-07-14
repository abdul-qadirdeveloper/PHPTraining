<?php 

require_once 'db_params.php';
require_once 'db_func.php';
require_once 'department_functions.php';

// execute query
$conn = get_db_connection();

insert_department($conn);
update_department($conn);
delete_department($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deparments</title>
    <style>
        .my-table, .editor-table {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        .my-table td, .my-table th, .editor-table td {
        border: 1px solid #ddd;
        padding: 8px;
        }

        .my-table tr:nth-child(even){background-color: #f2f2f2;}

        .my-table tr:hover {background-color: #f86;}

        .my-table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #f9AA6D;
        color: white;
        }
        .table-action{
            width: 100px;
        }
        .table-action form{
            display: inline;
        }
        .editor-table input{
            width: 100%;
        }
    </style>
</head>
<body> 

<form action="departments.php" method="post">
    <pre>  
        <input type="hidden" name="insert" value="yes">      
        Department No
        <input type="text" name="dept_no" ><br>
        Name
        <input type="text" name="dept_name"><br>
        Location
        <input type="text" name="location"><br>

        <input type="submit" value="Save">
    </pre>
</form>

<?php

display_departments($conn);

// release resources

$conn->close();
?>
</body>
</html>





