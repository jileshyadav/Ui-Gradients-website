<?php
include('header.php');
include('connection.php');
include('footer.php');
// include('index.html');
// include('style.css');

?>
<!-- sign up section start -->
<style>
.btn12{
  display : flex;
  justify-content:center;
  margin-bottom : 20px;
  
}
.btn{
  padding:15px;
}
</style>
    

    <!-- Button trigger modal -->
<div class="btn12" >
<button  type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
  Sign up
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form method="post">
            name <input type="text" name="name"></br>
            email <input type="email" name="email" required></br>
            password <input type="password" name="pass"></br>
        
      </div>
      <div class="modal-footer justify-content-md-end">
        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary  me-md-2"  name="sign">SIGN UP </button>
      </div>
</form>
    </div>
  </div>
</div>

<?php

if(isset($_POST['sign'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql = "INSERT INTO signup(name,email,pass) VALUES('$name','$email','$pass');";

    if($conn ->query($sql)== TRUE){
        echo "sign up successfully";
    }
    else{
        echo "sign up failed";
    }
}
?>




<!-- Button trigger modal -->
<div class="btn12">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
  log in</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post">
            Email <input type="email" name="email1"></br>
            password <input type="password" name="pass1"></br>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="login">LOG IN</button>
      </div>
</form>
    </div>
  </div>
</div>

<?php
if(isset($_POST['login'])){
$email1 =$_POST['email1'];
$pass1 = $_POST['pass1'];

$sql1 = "SELECT * FROM signup WHERE email = '$email1' AND pass = '$pass1';";

$res = $conn->query($sql1);
$row = $res->num_rows;

if($row === 1){
  echo "login successfully";
  header("refresh:1; url=show.php");
}
else{
  echo "login failed";
  header("refresh:1; url=next.php");

}
}
?>

<div class="btn12">
<button type="button" class="btn btn-primary justify-content-lg-end" data-bs-toggle="modal" data-bs-target="#exampleModal3">
  FREE LOG IN
</button>  
</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <!-- Email <input type="email" name="email1"></br>
            password <input type="password" name="pass1"></br> -->
            <label>Name:</label> <input type="text" id="name1"placeholder="Optional"></br>
            <p>write ur name plz</p>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="login3" onclick="location.href='next.php';"> FREE LOG IN</button>
        
      </div>
</form>
    </div>
  </div>
</div>

    
