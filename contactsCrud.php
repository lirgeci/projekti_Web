<?php

require_once('database.php');

class Contacts extends dbConnect{
    private $ContactID;
    private $Name;
    private $Email;
    private $Message;
    private $UserID;
    protected $dbconn;
    public function __construct($ContactID='',$Name='',$Email='',$Message='',$UserID=''){
        $this->ContactID=$ContactID;
        $this->Name=$Name;
        $this->Email=$Email;
        $this->UserID=$UserID;
        $this->dbconn=$this->connectDB();
        }

        public function getContactID(){
            return $this->ContactID;
        }
        public function setContactID($ContactID){
            $this->ContactID=$ContactID;
        }

        public function getName(){
            return $this->Name;
        }
        public function setName($Name){
            $this->Name=$Name;
        }

        public function getEmail(){
            return $this->Email;
        }
        public function setEmail($Email){
            $this->Email=$Email;
        }

        public function getMessage(){
            return $this->Message;
        }
        public function setMessage($Message){
            $this->Message=$Message;
        }
         public function getUserID(){
            return $this->UserID;
        }
        public function setUserID($UserID){
            $this->UserID=$UserID;
        }
      public function insert(){
    $sql="INSERT INTO contacts(Name,Email,Message,UserID) values (?,?,?,?)";
    $stm= $this->dbconn->prepare($sql);
    $stm->execute([$this->Name,$this->Email,$this->Message,$this->UserID]);
    if($stm->rowCount()>0){
        echo "<script>alert('Message sent successfully!');</script>";
    }
}

        
    public function read(){
$sql='SELECT * FROM contacts';
$stm=$this->dbconn->prepare($sql);
$stm->execute();
$rezultati =$stm->fetchAll(PDO::FETCH_ASSOC); 
return $rezultati;
}

}

?>