<?php
require_once('users.php');
require_once('project.php');

$useri = new User();
$all = $useri->read();

$projekti = new Project();
$allProjects = $projekti->read();
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
          <li> <a href="services.html">SERVICES</a></li>
          <li>
            <a href="projects.php">PROJECTS</a>

          </li>
          <li>
            <h2><a href="#">iSTUDIO</a></h2>
          </li>
          <li><a href="aboutus.html">ABOUT US</a></li>
          <li><a href="contact.html">CONTACT</a></li>
          <li id="D"><a href="da.html">DASHBOARD</a></li>
        </ul>
    
    </nav>
    </header>
    <div class="table-wrapper">
   <table border="1" class="tabela">
    <tr>
        <th id="thUsers" colspan="3">Users</th>
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
<br><br><br><br><br>
    <table border="1" class="tabela">
    <tr>
        <th id="thUsers" colspan="3">Services</th>
    </tr>
    <tr>
        <th>ServicesID</th>
        <th>Name</th>
       
        <th>Price</th>
        
    </tr>
    <tr>
        <th>1</th>
        <th>Anesa</th>
       
        <th>Prishtina</th>
       
    </tr>
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
   <br><br><br>
  </div>

</body>
</html>