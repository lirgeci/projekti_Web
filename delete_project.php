<?php
require_once('project.php');
$data = new Project();
if(isset($_GET['ProjectID'])){
    $myID = $_GET['ProjectID'];
    $data->delete($myID);
}
?>
