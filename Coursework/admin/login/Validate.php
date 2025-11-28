<?php
$RealPassword = "67";
if($_POST["password"] == $RealPassword){
    session_start();
    $_SESSION["Authorised"] = "Y";
    header("Location:index.php");
} else {
    header("Location:Wrongpassword.php");
}