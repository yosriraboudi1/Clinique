<?php

include '../Model/user.php';
include '../Controller/usercontroller.php';
$empC = new user();

if(isset($_GET['ee'])){
$empC->delete($_GET['ee']);
header('location: gestion_des_clients.php');

}
?>