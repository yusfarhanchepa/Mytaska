<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "mytaska");
if(!empty($_POST))
{
 $output = '';
 $task = mysqli_real_escape_string($connect, $_POST["task"]);  
    $status = mysqli_real_escape_string($connect, $_POST["status"]);  
    $manager = mysqli_real_escape_string($connect, $_POST["manager"]);  
    $progress = mysqli_real_escape_string($connect, $_POST["progress"]);  
    $colour = mysqli_real_escape_string($connect, $_POST["colour"]);
    $query = "
    INSERT INTO tasks(task, status, manager, progress, colour)  
     VALUES('$task', '$status', '$manager', '$progress', '$colour')
    ";
    if(mysqli_query($connect, $query))
    {
     $output .= '<label class="text-success">Data Inserted</label>';
     $select_query = "SELECT * FROM tasks ORDER BY id DESC";
     $result = mysqli_query($connect, $select_query);
     $output .= '
      <table class="table table-bordered">  
                    <tr>  
                         <th width="70%">Employee Name</th>  
                         <th width="30%">View</th>  
                    </tr>

     ';
     while($row = mysqli_fetch_array($result))
     {
      $output .= '
       <tr>  
                         <td>' . $row["name"] . '</td>  
                         <td><input type="button" name="view" value="view" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
                    </tr>
      ';
     }
     $output .= '</table>';
    }
    echo $output;
}
?>