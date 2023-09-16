<?php
$username="";
$password="";

$admin = array("username"=>"Admin","password"=>"0000");

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    if(($admin['username']==$username) &&($admin['password']==$password)){
        echo '<script>
        alert("Access Granted !!!");
        window.location="operation.php";
        </script>';
    }else{
        echo '<script>
        alert("Access denied !!!");
        window.location="./login.php";
        </script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghana Passport -Page</title>
    <!---Bootstrap css--->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="">
    <h1 class="my-5 text-center">ADMIN</h1>
<div class="py-2">
<div class="container text-center">    
<form action="<?php echo $_SERVER['PHP_SELF']?>"method="POST">
  <div class="mb-3">
    <input type="text" class="form-control w-50 m-auto"
    placeholder="Username"required="required"id="username"name="username" autocomplete="off">
  </div>
  <div class="mb-3">
    <input type="password" class="form-control w-50 m-auto"
    placeholder="Password"required="required"id="password"name="password" autocomplete="off">
  </div>
  <button type="submit"value="submit" name="submit"id="submit" class="btn btn-primary">LOGIN</button>
</form>
</div>
</div>
</body>
</html>