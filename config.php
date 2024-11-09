<?php 
 $emailErrorMsg ="";
 $passworldErrorMsg ="";
if(isset($_POST[" submit"])){     
$emailValue = $_POST["emailname"];
$passwordValue=$_POST["passname"];
}

if ($emailValue==""){
$emailErrorMsg="email must be filled out!";
}else if (preg_match("/\w+(@emsi.ma){1}$", $emailValue)){
    $emailErrorMsg="please enter a valid emsi email";
}else if ($passwordValue==""){
    $passworldErrorMsg="password must be filled out!";
}else{
    session_start();
    $_SESSION["emails"]=$emailValue;
    $_SESSION["passworld"]=$passwordValue;
    header("loction:home2.php");
}



?>