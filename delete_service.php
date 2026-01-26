<?php
require_once('service.php');
$data = new Service();
if(isset($_GET['ServiceID'])){
    $myID = $_GET['ServiceID'];
    $data->delete($myID);
}
?>