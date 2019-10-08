<?php 
  
// Abstract class 
abstract class Base { 
    // This is abstract function 
   
      
    abstract function viewall(); 
} 
class User extends base { 

    private $host="localhost";
    private $user="root";// change according to your database config
    private $db="jobdata";//change according to your database config
    private $pass="";//change according to your database config
    private $conn;
    private $resultdata;
    private $errordata;
    public function __construct(){
   
        $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
        $this->db="test";
         }

function viewall() { 
       
       
 $sql="SELECT id,first_name,surname,email FROM users";
 $q = $this->conn->query($sql) or die("failed!");

 while($r = $q->fetch(PDO::FETCH_ASSOC)){
 $data[]=$r;//save all returning data to array
 
 }
 
 $mydata = json_encode($data); //convert to json format before sending back to client

echo $mydata; //send data to client then client can be able to access it using ajax
 

    } 
    function insert($first_name,$surname,$email,$username,$password){
        
        $this->validate($first_name,$surname,$email,$username,$password);//check validation
       
        if(empty($this->resultdata))//check if array is empty means that there is no errors returned by textfields
        {
            $sql = "INSERT INTO users SET first_name=:first_name,surname=:surname,email=:email,username=:username,password=:password";
     $q = $this->conn->prepare($sql);
     $q->execute(array(':first_name'=>$first_name,':surname'=>$surname,
     ':email'=>$email,':username'=>$username,':password'=>$password));
            
echo"1";//after insert send data to ajax(front end app or client)
        }
        else{
         echo json_encode($this->resultdata);//when Text fields returns errors and then send errors to clients or front end app
        }
                
     
    }
    function view_user($id){
        $sql="SELECT * FROM users WHERE id = :id";
 $q = $this->conn->prepare($sql);
 $q->execute(array(':id'=>$id));
 $data = $q->fetch(PDO::FETCH_ASSOC);
//var_dump($data);
$mydata = json_encode($data);

echo $mydata;
//echo "hello";


    }
    function update($id,$first_name,$surname,$email,$username,$password){

        $this->validate($first_name,$surname,$email,$username,$password);//check validation
       
        if(empty($this->resultdata))//check if array is empty means that there is no errors returned by textfields
        {
            $sql = "UPDATE users
 SET first_name=:first_name,surname=:surname,email=:email,username=:username,password=:password
 WHERE id=:id";
 $q = $this->conn->prepare($sql);
 $q->execute(array(':id'=>$id,':first_name'=>$first_name,':surname'=>$surname,
 ':email'=>$email,':username'=>$username,':password'=>$password));
            
echo"1";//send status on ajax
        }
        else{
         echo json_encode($this->resultdata);//when Text fields returns errors and send to ajax
        }

     

    }

function validate($first_name,$surname,$email,$username,$password){
    $this->resultdata=array();//create array
    if (empty($first_name))
    {
        $errors="first_name";
    
      
    $this->errordata=array_push($this->resultdata,$errors);//take every errors of text_field and add to resultdata array using array_push
       
    }
    if (empty($surname))
    {
        $errors="surname";
    
       
        $this->errordata=array_push($this->resultdata,$errors);//take every errors of text_field and add to resultdata array using array_push
     
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $errors="email";
    
      
        $this->errordata=array_push($this->resultdata,$errors);//take every errors of text_field and add to resultdata array using array_push
     
    }
   if (empty($username))
    {
        $errors="username";
    
    
   
    $this->errordata=array_push($this->resultdata,$errors);//take every errors of text_field and add to resultdata array using array_push
    
   
    }
 
    if (empty($password) || !preg_match('@[A-Z]@',$password) || !preg_match('@[a-z]@',$password))
    {
        $errors="password";
        
    
   
    $this->errordata=array_push($this->resultdata,$errors);//take every errors of text_field and add to resultdata array using array_push
    }
 
}



    function delete_user($id){
        $sql="DELETE FROM users WHERE id=:id";
        $q = $this->conn->prepare($sql);
        $q->execute(array(':id'=>$id));
        echo"1";
    }
    
} 
  

      
 

?> 