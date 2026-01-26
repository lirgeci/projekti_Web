<?php 
require_once('service.php');

if (isset($_POST['save'])) {
    $data = new Service();
    $data->setServiceName($_POST['ServiceName']);
    $data->setPrice($_POST['Price']);
    $data->setPhoto($_POST['Photo']);
    $data->insert();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Service</title>
</head>
<body>
    <h3>Shto Sherbim te Ri</h3>
    <form method="POST">
        <input type="text" name="ServiceName" placeholder="Service Name" required>
        <br><br>
        <input type="number" name="Price" placeholder="Price" required>
        <br><br>
        <input type="text" name="Photo" placeholder="Photo Path (eg: foto.png)" required>
        <br><br>
        <button type="submit" name="save">SHTO</button>
    </form>
</body>
</html>