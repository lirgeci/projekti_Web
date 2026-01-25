<?php 
require_once('users.php');

$data = new User();
$myId = $_GET['UserID'];

// 1️⃣ Merr të dhënat ekzistuese për userin
$record = $data->readByID($myId);

// 2️⃣ Kur shtypet RUAJ
if (isset($_POST['edit'])) {
    // Vendosim ID-në e userit
    $data->setId($myId);

    // Vendosim të dhënat e reja nga forma
    $data->setName($_POST['FullName']);
    $data->setEmail($_POST['Email']);
    $data->setPassword($_POST['Password']);

    // Thirr update
    $data->update();

    // Alert + ridrejtim pas update
    echo "<script>
        alert('Te dhenat jane PERDITESUAR me sukses');
        window.location.href='dashboard.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h3>Perditeso te dhenat e User-it</h3>

<form method="POST">
    <label>Full Name</label><br>
    <input type="text" name="FullName" value="<?= $record['FullName']; ?>" required>
    <br><br>

    <label>Email</label><br>
    <input type="email" name="Email" value="<?= $record['Email']; ?>" required>
    <br><br>

    <label>Password</label><br>
    <input type="text" name="Password" value="<?= $record['Password']; ?>" required>
    <br><br>

    <button type="submit" name="edit">RUAJ</button>
</form>

</body>
</html>
