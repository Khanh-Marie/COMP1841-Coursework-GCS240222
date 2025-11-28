<?php
session_start();
if(empty($_SESSION['count'])){
    $_SESSION['count'] = 1;
} else{
    $_SESSION['count']++;
}
echo "Welcome guest, this is your " . $_SESSION['count'] . " time visiting.";?>