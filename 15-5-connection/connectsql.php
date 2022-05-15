<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

$connection=mysqli_connect('localhost','tasnem','1234','students');
if($connection){
    echo 'connected DB';
}else{
    echo (mysqli_connect_errno());
}


?>
<body>
    <form action="index.php" method="POST">
    <label for="">student name</label>
    <input type="text" name="studentName">
    <br>
    <label for="">student major</label>
    <input type="text" name="studentMajor">
    <br>
    <label for="">student ID numder</label>
    <input type="text" name="studentID">
    <br>
    <label for="">student garduation year</label>
    <input type="date" name="studentGrad">
    <br>
   
    <input type="submit" name="submit">

    </form>
</body>
</html>