<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "mytaska");
if(!empty($_POST))
{
 $output = '';
 $name = mysqli_real_escape_string($connect, $_POST["name"]);  
    $address = mysqli_real_escape_string($connect, $_POST["address"]);  
    $gender = mysqli_real_escape_string($connect, $_POST["gender"]);  
    $designation = mysqli_real_escape_string($connect, $_POST["designation"]);  
    $age = mysqli_real_escape_string($connect, $_POST["age"]);
    $query = "
    INSERT INTO tbl_employee(name, address, gender, designation, age)  
     VALUES('$name', '$address', '$gender', '$designation', '$age')
    ";
    if(mysqli_query($connect, $query))
    {
     $output .= '<label class="text-success">Data Inserted</label>';

    }
    echo $output;
}
?>
