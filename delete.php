<?php
require_once('users.php');
$data = new User();
if(isset($_GET['UserID'])){
$myID=$_GET['UserID'];
$data->delete($myID);
}
?>
