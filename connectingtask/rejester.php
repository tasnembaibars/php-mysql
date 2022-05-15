<!doctype html>
<html lang="en">
  <head>
    <title>rejester</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  
  <body>
  <?php

$connection=mysqli_connect('localhost','tasnem','1234','courses_info');

if($connection){
    echo 'connected DB';
}else{
    echo (mysqli_connect_errno());
}


?>
    <fieldset>
        <legend>Summer semester rejestration form</legend>
        <form method="POST" action="connect.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Student ID</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter ID" name="id">
              <small id="studentHelp" class="form-text text-muted">no body have the same ID as yours </small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Course ID</label>
              <input type="text" class="form-control" id="exampleInputPassword1" placeholder="course name" name="courseid">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Course name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="course name" name="name">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Instructor name</label>
                <!-- <input type="text" class="form-control" id="exampleInputPassword1" placeholder="instructor name" name="insname"> -->
                <select class="custom-select"  name="insname">
                    <option selected>Open this select menu</option>
                    <option value="abed">abed</option>
                    <option value="yahya">yahya</option>
                    <option value="sara">sara</option>
                  </select>
               
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Course time</label>
                <input type="time" class="form-control" id="exampleInputPassword1" placeholder="course time" name="time">
              </div>
            
            <div class="form-check">
            <label for="">failed before</label>
                <br>
              <input type="checkbox" class="form-check-input" id="exampleCheck1" value="yes" name="fb" onclick="return option_select(this);" >
              <label class="form-check-label" for="exampleCheck1">yes</label>
              <br>
              <input type="checkbox" class="form-check-input" id="exampleCheck1" name="fb" value="no"   onclick="return option_select(this);" >
              <label class="form-check-label" for="exampleCheck1">no</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            
            
          </form>
    </fieldset>

    <div class="container">
  <table class="table">
  <thead>
    <tr  style="background-color:#DCDCDC;  ">
     
      <th scope="col" >Student ID</th>
      <th scope="col">Course ID</th>
      <th scope="col">Course name</th>
      <th scope="col">Instructor name</th>
      <th scope="col">Course time</th>
      <th scope="col">failed before</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>