<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
</head>
<body>
    <?php
 if( isset($_POST[' submit'])) {
  $emailvalue = $_POST['emailName'];
  $passwordValue = $_POST[' passName'];
 if( empty($emailValue) ||
 empty ($passwordValue)){
 echo' ch1> empty values </h1>';
 }else{
 echo 'Welcome, your information: <br>';
 echo "Email : $emailValue <br>";
 echo "password : $passwordValue <br>" ;
 }
}  

    ?>
</body>
</html>