<?php
session_start();
session_destroy();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>login 2</title>
</head>
<body>
<form action=""method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input value="<?php if(isset($emailValue)) echo$emailValue?>" name="emailName type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <span stylee='color:red'><?php echo $emailErrorMsg ?></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="passName" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <span stylee='color:red'><?php echo $passworldErrorMsg ?></span>
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button name="submit" type="submit"class="btn btn-primary">Submit</button>
</form>
<?php 
if( $_SERVER['REQUEST_METHOD']=='post') {
    $emailvalue = $_POST['emailName'];
  $passwordValue = $_POST[' passName'];
 if( empty($emailValue) ||
 empty ($passwordValue)){
 echo' ch1> empty values </h1>';
 }else{    
echo 'Welcome, your information: <br>';
 echo "Email : $emailValue <br>";
 echo "password : $passwordValue <br>";
 }
 }else{
    echo ($_SERVER['REQUEST_METHOD']);
 }
 ?>
</body>
</html>