<?php
    require_once "db_params.php";
    require_once "db_func.php";
    require_once "employee_functions.php";

    $conn = get_db_connection();

    insert_employee($conn);
    delete_employee($conn);
    update_employee($conn);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Employees</title>
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
    <form action="" method="post">
        <pre>  
            <input type="hidden" name="insert" value="yes">      
            Employee No
            <input type="text" name="emp_no" ><br>
            First Name
            <input type="text" name="first_name"><br>
            Last Name
            <input type="text" name="last_name"><br>
            gender
            <input type="text" name="gender"><br>
            Birth Date
            <input type="date" name="birth_date"><br>
            Hire Date
            <input type="date" name="hire_date"><br>
            NIC
            <input type="text" name="nic_num"><br>

            <input type="submit" value="Save">
        </pre>
    </form>

    <?php display_employees($conn); ?>
</body>
<?php $conn->close(); ?>
</html>