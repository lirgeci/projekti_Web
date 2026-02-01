<?php 
require_once('database.php');

class Project extends dbConnect{
    private $id;
    private $projectName;
    private $category; 
    private $photo; 

    protected $dbconn;
    
    public function __construct($id='', $projectName='', $category='', $photo='')
    {
        $this->id = $id;
        $this->projectName = $projectName;
        $this->category = $category;
        $this->photo = $photo;
        $this->dbconn = $this->connectDB();
    }

    public function setId($id){
        $this->id = $id;
    }
    
    public function getId(){ 
        return $this->id;
    }
    
    public function setProjectName($projectName){
        $this->projectName = $projectName;
    }
    
    public function getProjectName(){ 
        return $this->projectName;
    }

    public function setCategory($category){
        $this->category = $category;
    }
    
    public function getCategory(){
        return $this->category;
    }
    
    public function setPhoto($photo){
        $this->photo = $photo;
    }
    
    public function getPhoto(){ 
        return $this->photo;
    }

    public function insert(){
        $sql = "INSERT INTO projects(ProjectName, Category, Photo) VALUES(?,?,?)";
        $stm = $this->dbconn->prepare($sql);
        $stm->execute([$this->projectName, $this->category, $this->photo]);
        if($stm->rowCount()>0){
        echo "<script>
        alert('Project successfully inserted'); 
        window.location.href = 'dashboard.php';
        </script>";
    }else{
        echo "<script>
        alert('Project could not insert, try again!'); 
        window.location.href = 'dashboard.php';
        </script>";
    }
    }

    public function read(){
        $sql = 'SELECT * FROM projects';
        $stm = $this->dbconn->prepare($sql);
        $stm->execute();
        $rezultati = $stm->fetchAll(PDO::FETCH_ASSOC); 
        return $rezultati;
    }

    public function delete($id){
        $sql = "DELETE FROM projects WHERE ProjectID=:id";
        $stm = $this->dbconn->prepare($sql);
        $stm->bindParam(':id', $id);
        $stm->execute();
        if($stm->rowCount()>0){
        echo "<script>
        alert('Project successfully deleted'); 
        window.location.href = 'dashboard.php';
        </script>";
    }else{
        echo "<script>
        alert('Project could not delete, try again!'); 
        window.location.href = 'dashboard.php';
        </script>";
    }
    }

    public function readByID($id){
        $sql = 'SELECT * FROM projects WHERE ProjectID=:id';
        $stm = $this->dbconn->prepare($sql);
        $stm->execute([':id' => $id]);
        $rezultati = $stm->fetch(PDO::FETCH_ASSOC); 
        return $rezultati;
    }

    public function update(){
        $sql = 'UPDATE projects SET ProjectName=?, Category=? WHERE ProjectID=?';
        $stm = $this->dbconn->prepare($sql);
        $stm->execute([
            $this->projectName,
            $this->category,
            $this->id
        ]);
    }
}
?>
