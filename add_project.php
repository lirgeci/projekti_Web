<?php 
require_once('project.php');

if (isset($_POST['save'])){
    $p = new Project();
    $p->setProjectName($_POST['ProjectName']);
    $p->setCategory($_POST['Category']);
    $p->setPhoto($_POST['Photo']);
    $p->insert();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Project</title>
</head>
<body>

<h3>Add New Project</h3>

<form method="POST">
    <label>Project Name</label>
    <input type="text" name="ProjectName" required>
    <br><br>

    <label>Category</label>
    <input type="text" name="Category"  required>
    <br><br>

    <label>Photo (filename)</label>
    <input type="text" name="Photo"  required>
    <br><br>

    <button type="submit" name="save">Save Project</button>
</form>



</body>
</html>
