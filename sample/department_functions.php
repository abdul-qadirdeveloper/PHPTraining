<?php

function display_departments($conn){   
    $query = "SELECT * FROM departments";
    $result = exec_query($conn, $query); 
    // fetch data
    $rows_count = $result->num_rows;

        echo '<table class="my-table">'.
             '<tr><th>Dept No</th><th>Name</th><th>Location</th><th>Action</th></tr>';
                     
        for ($i = 0 ; $i < $rows_count ; ++$i)
        {
            $result->data_seek($i);
            $row = $result->fetch_assoc();
            $showEditor = false;
            if( isset($_POST['edit'])){
                if(isset($_POST['dept_no'])){
                    $dept_no = $conn->real_escape_string($_POST['dept_no']);
                    if($dept_no == $row['dept_no'])
                        $showEditor = true;
                }
            }
            echo    
                '<tr>'.
                    ($showEditor?
                        '<td colspan="4" style="padding: 0">
                            <form action="" method="post"><table class="editor-table"><tr>
                                <td style="width: 200px;"><input type="hidden" name="dept_no" value="'.$row['dept_no'].'"/>'.$row['dept_no'].'</td>
                                <td><input type="text" name="dept_name" value="'.$row['dept_name'].'"/></td>
                                <td style="width: 200px;"><input type="text" name="location" value="'.$row['location'].'"/></td>
                                <td class="table-action">
                                    <input type="hidden" name="update" value="yes"> 
                                    <button type="submit">Save</button>
                                    <button type="cancel">Cancel</button>
                                </td>
                            </tr></table></form>
                        </td>'
                    :
                        '<td style="width: 200px;">'.$row['dept_no'].'</td>            
                        <td>'.$row['dept_name'].'</td>
                        <td  style="width: 200px;">'.$row['location'].'</td>
                        <td class="table-action">'.
                            '<form action="" method="post">
                                <input type="hidden" name="edit" value="yes">
                                <input type="hidden" name="dept_no" value="'.$row['dept_no'].'">
                                <button type="submit">Edit</button>
                            </form>
                            <form action="" method="post">
                                <input type="hidden" name="delete" value="yes">
                                <input type="hidden" name="dept_no" value="'.$row['dept_no'].'">
                                <button type="submit">Delete</button>
                            </form>
                        </td>'
                    ).
                '</tr>';
        }
        echo '</table>';
    
    $result->close();
}
function update_department($conn){

    // check if user sent an insert request
    if(isset($_POST['update'])){
        if(isset($_POST['dept_no'])
        && isset($_POST['dept_name'])
        && isset($_POST['location'])){
            $dept_no = $conn->real_escape_string($_POST['dept_no']);
            $dept_name =  $conn->real_escape_string($_POST['dept_name']);
            $location = $conn->real_escape_string($_POST['location']);

            $query = "UPDATE `departments`".
            "SET `dept_name` = '$dept_name',
            `location` = '$location'".
            "WHERE `dept_no`= '$dept_no'";

            $result = exec_query($conn, $query);
            if(!$result){
                echo "Update Failed! <br><br>";
            }else{
                echo "update success! <Br></Br>";
            }
        }
    }
}
function insert_department($conn){

    // check if user sent an insert request
    if(isset($_POST['insert'])){
        if(isset($_POST['dept_no'])
        && isset($_POST['dept_name'])
        && isset($_POST['location'])){
            $dept_no = $conn->real_escape_string($_POST['dept_no']);
            $dept_name =  $conn->real_escape_string($_POST['dept_name']);
            $location = $conn->real_escape_string($_POST['location']);

            $query = "INSERT INTO `departments`(`dept_no`, `dept_name`, `location`) VALUES (".
            "'$dept_no','$dept_name','$location')";

            $result = exec_query($conn, $query);
            if(!$result){
                echo "Insert Failed! <br><br>";
            }else{
                echo "insert success! <Br></Br>";
            }
        }
    }
}

function delete_department($conn){

    // check if user sent an insert request
    if(isset($_POST['delete'])){
        if(isset($_POST['dept_no'])){
            $dept_no = $conn->real_escape_string($_POST['dept_no']);

            $query = "DELETE FROM `departments`
            WHERE `dept_no` = '$dept_no'";

            $result = exec_query($conn, $query);
            if(!$result){
                echo "Delete Failed! <br><br>";
            }else{
                echo "Delete success! <Br></Br>";
            }
        }
    }
}