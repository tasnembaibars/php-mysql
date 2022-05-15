<?php
include ("connectsql.php");

$name=$_POST['studentName'];
$major=$_POST['studentMajor'];
$ID=$_POST['studentID'];
$Grad=$_POST['studentGrad'];
ECHO 'HELLO '.$name;
$query="INSERT INTO students_info (student_name,student_major,student_ID,student_graduation_year) VALUES ('$name','$major','$ID','$Grad')";

if(mysqli_query($connection,$query)){
    echo 'new record has been added';
}else{
    echo'error'.$query. mysqli_connect_error($connection);
}

?>