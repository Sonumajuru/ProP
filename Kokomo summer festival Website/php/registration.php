
<?php
session_start();

$conn = new PDO('mysql:host=localhost;dbname=dbi336041','dbi336041','Guerrero');

    if(isset($_POST['submit'])){
        $firstname =$_POST['firstname'];
        $lastname =$_POST['lastname'];
        $email =$_POST['email'];
        $password=$_POST['password']; 
        $phonenr=$_POST['phonenr']; 
        
        $query = $conn->prepare("INSERT INTO customer ( Firstname,Lastname,Phonenumber,Email,Password,RFID,Status,Balance,inOrout) VALUES ('$firstname','$lastname',$phonenr,'$email','$password','',0,0,0)");
        $query->execute();
       
         $query2 = $conn->prepare("SELECT * FROM customer WHERE Email= :email AND Password = :password");
        $query2->execute(array(':email' => $email, ':password' => $password));
        $count = $query2->fetch();
        
        $query1 = $conn->prepare("SELECT FirstName FROM customer WHERE Email = :email");
        $query1->execute(array(':email' => $email));
        $firstname = $query1->fetch();
         if ($count > 0){
             $_SESSION['email']=$email;
             $_SESSION['Firstname']=$firstname[0];
             echo $firstname[0];
            header("Location: ../Loginpage.php");
         }
         }
        
       
$conn=null;


?>
