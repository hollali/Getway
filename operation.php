<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passport</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <button class="btn btn-primary my-5"><a href="index.php"class="text-light text-decoration-none">Add user</a>
    </button>
    <table class="table w-100">
  <thead>
    <tr class="bg-dark text-light pb-2">
      <th scope="col">s1</th>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">id</th>
      <th scope="col">Nationality</th>
      <th scope="col">D.O.B</th>
      <th scope="col">Gender</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php
$sql="Select * from `reg`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $lastname=$row['lastname'];
        $idNum=$row['idNum'];
        $nationality=$row['nationality'];
        $date=$row['date'];
        $gender=$row['gender'];
        $mobile=$row['mobile'];
        $email=$row['email'];
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'<td>
        <td>'.$lastname.'<td>
        <td>'.$idNum.'<td>
        <td>'.$nationality.'<td>
        <td>'.$date.'<td>
        <td>'.$gender.'<td>
        <td>'.$mobile.'<td>
        <td>'.$email.'<td>
        <td>
        
        <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"class="text-light text-decoration-none">Delete</a></button>
        </td>
        </tr>';
        
    }
}
?>
 </tbody>
</table>
</div>

</body>
</html>