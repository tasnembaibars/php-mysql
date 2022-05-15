<?php
include "rejester.php";
if(isset($_POST['submit'])){
$id=$_POST['id'];
$courseid=$_POST['courseid'];
$name=$_POST['name'];
$insname=$_POST['insname'];
$time=$_POST['time'];
$faildB=$_POST['fb'];


echo 'HELLO '.$id.'<br>';

$query = "INSERT INTO courses (student_ID,course_ID,course_name,instructor_name,course_time,failed_before) VALUES ('$id','$courseid','$name','$insname','$time','$faildB')";
 

if(mysqli_query($connection,$query)){
    echo 'new record has been added';
}else{
    echo'error occured'.$query. mysqli_connect_error($connection); 
};
}

if(isset($_POST['delbutton'])){
    $id=$_POST['delbutton'];
    $query2 = "DELETE FROM courses WHERE student_ID= $id";

if(mysqli_query($connection,$query2)){
    echo ' record has been deleted';
}else{
    echo'error deleting'.$query2. mysqli_connect_error($connection); 
}

};



if(isset($_POST['modbutton'])){
    $query3 = "UPDATE  courses SET student_ID ='$id',course_ID='$courseid',course_name='$name',instructor_name='$insname',course_time='$time',failed_before='$faildB' WHERE student_ID=$id ";

if(mysqli_query($connection,$query3)){
    echo 'your record has been updated';
}else{
    echo'error'.$query3. mysqli_connect_error($connection); 
}

};


$query4 = "SELECT * FROM courses";

  $result = mysqli_query($connection,$query4);
if ($result) {
    
  while($row = mysqli_fetch_array($result)) {
    echo "<tr><td>".$row["student_ID"].
    "</td><td>".$row["course_ID"].
    "</td><td>".$row["course_name"].
    "</td><td>".$row["instructor_name"].
    "</td><td>".$row["course_time"].
    "</td><td>".$row["failed_before"].
    "</td><td><button type='submit' class='btn btn-danger' name='delbutton'>delete</button>".
    "</td><td><button type='submit' class='btn btn-primary' name='modbutton'>edit</button></td></tr>";
  }
  echo "</table>";
} ?>
 

