<?php 
require_once('service.php');

$data = new Service();
if (!isset($_GET['ServiceID'])) {
    header('Location: dashboard.php');
    exit();
}
$myId = $_GET['ServiceID'];
$record = $data->readByID($myId);

if (isset($_POST['edit'])) {
    $data->setId($myId);
    $data->setServiceName($_POST['ServiceName']);
    $data->setPrice($_POST['Price']);
    $data->setPhoto($_POST['Photo']);
    $data->update();

    echo "<script>
    alert('Service successfully updated');
    window.location.href='dashboard.php';
    </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Service</title>
</head>
<body>
    <h3>Perditeso te dhenat e Sherbimit</h3>
    <form method="POST">
        <label>Service Name</label>
        <input type="text" name="ServiceName" value="<?php echo $record['ServiceName']; ?>" required>
        <br><br>
        <label>Price</label>
        <input type="number" name="Price" value="<?php echo $record['Price']; ?>" required>
        <br><br>
        <label>Photo</label>
        <input type="text" name="Photo" value="<?php echo $record['Photo']; ?>" required>
        <br><br>
        <button type="submit" name="edit">RUAJ</button>
    </form>
</body>
</html>