<?php 
require_once('database.php');
class User extends dbConnect{
    private $id;
private $name;
private $email; 
private $password; 

protected $dbconn;
public function __construct($id='', $name='',
$email='', $password='')
{
$this->id=$id;
$this->name=$name;
$this->password=$password;
$this->email=$email;
$this->dbconn=$this->connectDB();
}
public function setId($id){
$this->id=$id;
}
public function getId(){ 
return $this->id;
}
public function setName($name){
$this->name=$name;
}
public function getName(){ 
    return $this->name;
}

public function setEmail($email){
$this->email=$email;
}
public function getEmail(){
return $this->email;
}
public function setPassword($password){
$this->password=$password;
}
public function getPassword(){ 
return $this->password;
}

public function insert(){
    $sql="INSERT INTO users(FullName,Email,Password) values(?,?,?)";
    $stm=$this->dbconn->prepare($sql);
    $stm->execute([$this->name,$this->email,$this->password]);
    echo"<script>
alert('Info successfully inserted'); 
window.location.href = 'login.php';
</script>";
}


public function read(){
$sql='SELECT * FROM users';
$stm=$this->dbconn->prepare($sql);
$stm->execute();
$rezultati =$stm->fetchAll(PDO::FETCH_ASSOC); 
return $rezultati;
}


public function delete($id){
$sql="DELETE FROM users WHERE UserID=:id";
$stm=$this->dbconn->prepare($sql);
$stm->bindParam(':id',$id);
$stm->execute();
echo "<script>
alert('Data successfully deleted!'); 
window.location.href = 'dashboard.php';
</script>";
}


public function readByID($id){
$sql='SELECT * FROM users where UserID=:id';
$stm=$this->dbconn->prepare($sql);
$stm->execute([':id'=>$id]);
$rezultati =$stm->fetch(PDO::FETCH_ASSOC); 
return $rezultati;

}

public function update(){
$sql='UPDATE users SET FullName=?, Email=?, Password=? where UserID=?';
$stm=$this->dbconn->prepare($sql);
$stm->execute([$this->name,
        $this->email,
        $this->password,
        $this->id]);
}

public function login($email, $password){
    $sql='SELECT * FROM users WHERE Email=?';
    $stm=$this->dbconn->prepare($sql);
    $stm->execute([$email]);
    $user = $stm->fetch(PDO::FETCH_ASSOC);
    
    if($user && $user['Password'] === $password){
        return $user;
    }
    return false;
}
    
}

?>