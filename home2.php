<?php
session_start();
$_SESSION[ "prenom"]="Ali";
$_SESSION[" nom" ]="El";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>home2</title>
</head>
<body>
<?php
include("navbar.php");
echo 'Welcome, to home2 informarion: <br>';
echo 'Email:' .$_SESSION['emails'] .'<br>';
echo 'passworld:' .$_SESSION['passworld'] .'<br>';
if(isset($_SESSION[ 'nom' ])){
echo '<p> Hi '. $_SESSION['prenom']. ''.$_SESSION['nom']. ' you are in home page </p>';
}else{
    echo"sestion expired";


}

?>
</body>
</html>