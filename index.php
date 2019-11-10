<?php
require_once('class/user.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
$user = new user($_POST);
$user->insert();
}
user::updateStatus($_GET);
require_once('main.html');
?>