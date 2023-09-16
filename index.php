<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $idNum=$_POST['idNum'];
    $nationality=$_POST['nationality'];
    $date=$_POST['date'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

    $sql="insert into `reg`(name,lastname,idNum,nationality,date,gender,mobile,email)
    values('$name','$lastname','$idNum','$nationality','$date','$gender','$mobile','$email')";
    $result=mysqli_query($con,$sql);
    echo'<script>
    alert("Registration Successful");
    window.location="./index.php";
    </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghana Passport Office</title>
    <!---Bootstrap css --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="admin.php">Admin</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 
<div class="container text-center my-5">  
<form method="post">
  <div class="mb-3">
    <input type="text" class="form-control w-50 m-auto"placeholder="Enter Your Name"
    name="name"autocomplete="off">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control w-50 m-auto"placeholder="Enter Your Last Name"
    name="lastname"autocomplete="off">
  </div>
  <div class="mb-3">
    <input type="text" class="form-control w-50 m-auto"placeholder="Enter Your National ID Number"
    name="idNum"autocomplete="off">
  </div>
  <div class="mb-3">
  <select name="nationality" class="form-select w-50 m-auto">    
         <option value="Ghanaian">Ghanaian</option>
         <option value="Foreigner">Foreigner</option>
    </select>
  </div>
  <div class="mb-3">
    <input type="date" class="form-control w-50 m-auto"
    name="date">
  </div>
  <div class="mb-3">
  <select name="gender" class="form-select w-50 m-auto">    
         <option value="Male">Male</option>
         <option value="Female">Female</option>
    </select>  
  </div>
  <div class="mb-3">
    <input type="text" class="form-control w-50 m-auto"placeholder="Enter Your Mobile Number"
    name="mobile"autocomplete="off">
  </div>
  <div class="mb-3">
    <input type="email" class="form-control w-50 m-auto"placeholder="Enter Your Email Address"
    name="email"autocomplete="off">
  </div>
    <button type="submit" class="btn btn-primary"name="submit">Submit</button>
</form>
</div>

  <!---Bootstrap js--->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>