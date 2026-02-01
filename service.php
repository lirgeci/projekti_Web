<?php 
require_once('database.php');

class Service extends dbConnect {
    private $id;
    private $serviceName;
    private $price; 
    private $photo; 

    protected $dbconn;
    
    public function __construct($id='', $serviceName='', $price='', $photo='')
    {
        $this->id = $id;
        $this->serviceName = $serviceName;
        $this->price = $price;
        $this->photo = $photo;
        $this->dbconn = $this->connectDB();
    }

    public function setId($id){ $this->id = $id; }
    public function getId(){ return $this->id; }
    
    public function setServiceName($serviceName){ $this->serviceName = $serviceName; }
    public function getServiceName(){ return $this->serviceName; }

    public function setPrice($price){ $this->price = $price; }
    public function getPrice(){ return $this->price; }
    
    public function setPhoto($photo){ $this->photo = $photo; }
    public function getPhoto(){ return $this->photo; }

    public function insert(){
        $sql = "INSERT INTO services(ServiceName, Price, Photo) VALUES(?,?,?)";
        $stm = $this->dbconn->prepare($sql);
        $stm->execute([$this->serviceName, $this->price, $this->photo]);
        
        if($stm->rowCount()>0){
        echo "<script>
        alert('Service successfully inserted!'); 
        window.location.href = 'dashboard.php';
        </script>";
    }else{
        echo "<script>
        alert('Service could not insert, try again!'); 
        window.location.href = 'dashboard.php';
        </script>";
    }
    }

    public function read(){
        $sql = 'SELECT * FROM services';
        $stm = $this->dbconn->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC); 
    }

    public function delete($id){
        $sql = "DELETE FROM services WHERE ServiceID=:id";
        $stm = $this->dbconn->prepare($sql);
        $stm->execute([':id' => $id]);
         if($stm->rowCount()>0){
        echo "<script>
        alert('Service successfully deleted!'); 
        window.location.href = 'dashboard.php';
        </script>";
    }else{
        echo "<script>
        alert('Could not delete, try again!'); 
        window.location.href = 'dashboard.php';
        </script>";
    }
    }

    public function readByID($id){
        $sql = 'SELECT * FROM services WHERE ServiceID=:id';
        $stm = $this->dbconn->prepare($sql);
        $stm->execute([':id' => $id]);
        return $stm->fetch(PDO::FETCH_ASSOC); 
    }

    public function update(){
        $sql = 'UPDATE services SET ServiceName=?, Price=?  WHERE ServiceID=?';
        $stm = $this->dbconn->prepare($sql);
        $stm->execute([
            $this->serviceName,
            $this->price,
            $this->id
        ]);
    }
}
?>