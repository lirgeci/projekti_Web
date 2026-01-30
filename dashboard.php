<?php
require_once('users.php');
require_once('project.php');
require_once('service.php'); // Shtova
require_once('contactsCrud.php');
session_start();

$useri = new User();
$all = $useri->read();

$projekti = new Project();
$allProjects = $projekti->read();

$sherbimi = new Service(); // Kri
$allServices = $sherbimi->read(); // Merri

$contact = new Contacts();
$allContacts=$contact->read();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="dashboard.css" />
</head>
<body>
    <header>
    <nav class="nav">
    <ul type="none">
        <li><a href="services.php">SERVICES</a></li>
        <li><a href="projects.php">PROJECTS</a></li>
        <li><a href="index.php">iSTUDIO</a></li>
        <li><a href="aboutus.php">ABOUT US</a></li>
        <li><a href="contact.php">CONTACT</a></li>

        <?php if (isset($_SESSION['user_id']) && isset($_SESSION['role']) && $_SESSION['role'] == 1): ?>
          <li id="D"><a href="dashboard.php">DASHBOARD</a></li>
          <li id="D"><a href="logout.php">LOGOUT</a></li>
        <?php elseif (isset($_SESSION['user_id'])): ?>
          <li id="D"><a href="logout.php">LOGOUT</a></li>
        <?php endif; ?>
    </ul>
</nav>
    </header>
    <div class="table-wrapper">
   <table border="1" class="tabela">
    <tr>
        <th id="thUsers" colspan="4">Users</th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    <tr>

<tr>
    <?php
foreach($all as $key=>$value){
?>
    <td><?php echo $value['FullName']?></td>
    <td><?php echo $value['Email']?></td>
    <td><?php echo $value['Password']?></td>
    <td id='de'><a href="delete.php?UserID=<?php echo $value['UserID']?>"><button id="d">DELETE</button></a>
                <a href="edit.php?UserID=<?php echo $value['UserID']?>"><button id='e'>EDIT</button></a>
 </td>
</tr>
<?php
}
?>
</table>
   <table border="1" class="tabela">
    <br><br><br><br><br>
    <tr>
        <th id="thUsers" colspan="4">Services 
            <a href="add_service.php" style="float:right; text-decoration:none;">
                <button style="padding:5px 15px; background:#4CAF50; color:white; border:none; border-radius:4px; cursor:pointer;">+ Add Service</button>
            </a>
        </th>
    </tr>
    <tr>
        <th>ServicesID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    
    <?php
    if(!empty($allServices)){
        foreach($allServices as $key => $value){
    ?>
    <tr>
        <td><?php echo $value['ServiceID']?></td>
        <td><?php echo $value['ServiceName']?></td>
        <td><?php echo $value['Price']?> &euro;</td>
        <td id='de'>
            <a href="delete_service.php?ServiceID=<?php echo $value['ServiceID']?>">
                <button id="d">DELETE</button>
            </a>
            <a href="edit_service.php?ServiceID=<?php echo $value['ServiceID']?>">
                <button id='e'>EDIT</button>
            </a>
        </td>
    </tr>
    <?php
        }
    } else {
    ?>
    <tr>
        <td colspan="4" style="text-align:center; padding:20px;">Nuk ka shërbime të regjistruara.</td>
    </tr>
    <?php
    }
    ?>
</table>




   <br><br><br><br><br>
    <table border="1" class="tabela">
    <tr>
        <th id="thUsers" colspan="4">Projects 
            <a href="add_project.php" style="float:right; text-decoration:none;">
                <button style="padding:5px 15px; background:#4CAF50; color:white; border:none; border-radius:4px; cursor:pointer;">+ Add Project</button>
            </a>
        </th>
    </tr>
    <tr>
        <th>Project Name</th>
        <th>Category</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>
    <?php
    if(!empty($allProjects)){
        foreach($allProjects as $key => $value){
    ?>
    <tr>
        <td><?php echo $value['ProjectName']?></td>
        <td><?php echo $value['Category']?></td>
        <td><?php echo $value['Photo']?></td>
        <td id='de'>
            <a href="delete_project.php?ProjectID=<?php echo $value['ProjectID']?>"><button id="d">DELETE</button></a>
            <a href="edit_project.php?ProjectID=<?php echo $value['ProjectID']?>"><button id='e'>EDIT</button></a>
        </td>
    </tr>
    <?php
        }
    } else {
    ?>
    <tr>
        <td colspan="4" style="text-align:center; padding:20px;">No projects yet. Click "+ Add Project" to create one.</td>
    </tr>
    <?php
    }
    ?>
   </table>
   <br><br>
   <table border="1" class="tabela">
    <br><br><br><br><br>
    <tr>
        <th id="thUsers" colspan="3">Contacts
        </th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
    </tr>
    
    <?php
    if(!empty($allContacts)){
        foreach($allContacts as $key => $value){
    ?>
    <tr>
        <td><?php echo $value['Name']?></td>
        <td><?php echo $value['Email']?></td>
        <td><?php echo $value['Message']?></td>
    </tr>
    <?php
        }
    } else {
    ?>
    <tr>
        <td colspan="4" style="text-align:center; padding:20px;">No messages</td>
    </tr>
    <?php
    }
    ?>
</table>
<br><br><br>
  </div>

</body>
</html>