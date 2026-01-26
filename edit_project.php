<?php 
require_once('project.php');

$data = new Project();
if (!isset($_GET['ProjectID'])) {
    header('Location: dashboard.php');
    exit();
}
$myId = $_GET['ProjectID'];

$record = $data->readByID($myId);

if (isset($_POST['edit'])) {
    $data->setId($myId);
    $data->setProjectName($_POST['ProjectName']);
    $data->setCategory($_POST['Category']);
    $data->setPhoto($_POST['Photo']);
    $data->update();

    echo "<script>
alert('Project successfully updated');
window.location.href='dashboard.php';
</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>
</head>
<body>

<h3>Perditeso te dhenat e Projektit</h3>

<form method="POST">
    <label>Project Name</label>
    <input type="text" name="ProjectName" value="<?php echo $record['ProjectName']; ?>" required>
    <br><br>

    <label>Category</label>
    <input type="text" name="Category" value="<?php echo $record['Category']; ?>" required>
    <br><br>

    <label>Photo</label>
    <input type="text" name="Photo" value="<?php echo $record['Photo']; ?>" required>
    <br><br>

    <button type="submit" name="edit">RUAJ</button>
</form>



</body>
</html>
