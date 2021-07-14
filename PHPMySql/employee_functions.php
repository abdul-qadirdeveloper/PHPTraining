
<?php
    function display_employees($conn) {
        $query = "SELECT * FROM `employees` limit 10";

        $result = exec_query($conn, $query);
        
        $rows_count = $result->num_rows;
        $showEditor = false;
        if(isset($_POST['edit'])){
            if(isset($_POST['emp_no'])){
                $emp_no = $conn->real_escape_string($_POST['emp_no']);
                $showEditor = true;
            }
        }
        //echo '<pre>';
        echo '<table class="my-table">';
        echo '<tr><th>Emp No</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>DoB</th><th>DoH</th><th>NIC</th><th>Action</th></tr>';
        for ($i = 0 ; $i < $rows_count ; ++$i)
        {
            $result->data_seek($i);
            $row = $result->fetch_assoc();
            if($showEditor && $row['emp_no'] == $emp_no){
                echo 
                '<tr><td colspan="8" style="padding: 0;"> 
                <form action="" method="post">
                <table class="editor-table"><tr>'.                
                    '<td style="width: 200px;"><input type="hidden" name="emp_no" value ='.$row['emp_no'].' />'.$row['emp_no'].'</td>'.                    
                    '<td style="width: 200px;"><input type="text" name="first_name" value ='.$row['first_name'].' /></td>'.
                    '<td style="width: 200px;"><input type="text" name="last_name" value ='.$row['last_name'].' /></td>'.
                    '<td style="width: 200px;"><input type="text" name="gender" value ='.$row['gender'].' /></td>'.
                    '<td style="width: 200px;"><input type="date" name="birth_date" value ='.$row['birth_date'].' /></td>'.
                    '<td style="width: 200px;"><input type="date" name="hire_date" value ='.$row['hire_date'].' /></td>'.
                    '<td style="width: 200px;"><input type="text" name="nic_num" value ='.$row['nic_num'].' /></td>'.
                    '<td class="table-action">
                         <input name="edit-save" type="submit" value="Save"/>
                         <input name="cancel" type="submit" value="Cancel"/>
                    </td></tr>'.
                '</table> </form> 
                </td></tr>';
            }else{
                echo 
                '<tr>'.
                    '<td style="width: 200px;">'.$row['emp_no'].'</td>'.                    
                    '<td style="width: 200px;">'.$row['first_name'].'</td>'.
                    '<td style="width: 200px;">'.$row['last_name'].'</td>'.
                    '<td style="width: 200px;">'.$row['gender'].'</td>'.
                    '<td style="width: 200px;">'.$row['birth_date'].'</td>'.
                    '<td style="width: 200px;">'.$row['hire_date'].'</td>'.
                    '<td style="width: 200px;">'.$row['nic_num'].'</td>'.
                    '<td class="table-action">
                        <form action="" method="post"><input type="hidden" name="emp_no" value="'.$row['emp_no'].'"/> <input name="edit" type="submit" value="Edit"/></form>
                        <form action="" method="post"><input type="hidden" name="emp_no" value="'.$row['emp_no'].'"/> <input name="delete" type="submit" value="Delete"/></form>
                    </td>'.
                '</tr>';
            }

        }
        echo '</table>';
      //  echo '</pre>';


         $result->close();  
    }

    function insert_employee($conn){
        if(isset($_POST['insert'])){
            if(isset($_POST['emp_no'])
            && isset($_POST['first_name'])
            && isset($_POST['last_name'])
            && isset($_POST['gender'])
            && isset($_POST['birth_date'])
            && isset($_POST['hire_date'])
            && isset($_POST['nic_num'])){
                
               // fetch submitted values
               $emp_no = $conn->real_escape_string($_POST['emp_no']);
               $first_name =  $conn->real_escape_string($_POST['first_name']);
               $last_name =  $conn->real_escape_string($_POST['last_name']);
               $gender =  $conn->real_escape_string($_POST['gender']);
               $birth_date =  $conn->real_escape_string($_POST['birth_date']);
               $hire_date =  $conn->real_escape_string($_POST['hire_date']);
               $nic_num =  $conn->real_escape_string($_POST['nic_num']);
   
               // save submitted values to database
               $query = "INSERT INTO `employees`(`emp_no`, `nic_num`, `birth_date`, `first_name`, `last_name`, `gender`, `hire_date`) VALUES (".            
               "'$emp_no','$nic_num','$birth_date','$first_name','$last_name','$gender','$hire_date')";
               
               $result = exec_query($conn, $query);
               if(!$result){
                   echo "Insert Failed! <br><br>";
               }else{
                   echo "insert success! <Br></Br>";
               }
            }
        }
    }

    function delete_employee($conn){
        if(isset($_POST['delete'])){
            if(isset($_POST['emp_no'])){
    
                $emp_no = $conn->real_escape_string($_POST['emp_no']);
    
                $query = "DELETE FROM `employees` WHERE emp_no = '$emp_no'";
                $result = exec_query($conn, $query);
                if(!$result){
                    echo "Delete Failed! <br><br>";
                }else{
                    echo "Delete success! <Br></Br>";
                }
            }
        }
    }

function update_employee(){
    if(isset($_POST["edit-save"])){
        if(isset($_POST['emp_no'])
            && isset($_POST['first_name'])
            && isset($_POST['last_name'])
            && isset($_POST['gender'])
            && isset($_POST['birth_date'])
            && isset($_POST['hire_date'])
            && isset($_POST['nic_num'])){
            
           // fetch submitted values
           $emp_no = $conn->real_escape_string($_POST['emp_no']);
           $first_name =  $conn->real_escape_string($_POST['first_name']);
           $last_name =  $conn->real_escape_string($_POST['last_name']);
           $gender =  $conn->real_escape_string($_POST['gender']);
           $birth_date =  $conn->real_escape_string($_POST['birth_date']);
           $hire_date =  $conn->real_escape_string($_POST['hire_date']);
           $nic_num =  $conn->real_escape_string($_POST['nic_num']);

           // save submitted values to database
           $query = "UPDATE `employees` 
           SET `emp_no`='$emp_no',
               `nic_num` = '$nic_num',
                `birth_date` = '$birth_date',
                `first_name` = '$first_name',
                `last_name`  = '$last_name',
                `gender` = '$gender',
                `hire_date` = '$hire_date',
           WHERE `emp_no`='$emp_no'";

           $result = exec_query($conn, $query);
           if(!$result){
               echo "update Failed! <br><br>";
           }else{
               echo "update success! <Br></Br>";
           }
        }
    }
}