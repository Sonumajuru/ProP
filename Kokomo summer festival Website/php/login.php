<?php
/*$host = "localhost";
$user = "root";
$pass = "root";
$db = "kokomo";
*/



session_start();
try{
$conn = new PDO('mysql:host=localhost;dbname=dbi336041','dbi336041','Guerrero');

    if(isset($_POST['submit'])){
        $email =$_POST['email'];
        $password=$_POST['password']; 
        
        $query = $conn->prepare("SELECT * FROM customer WHERE Email= :email AND Password = :password");
        $query->execute(array(':email' => $email, ':password' => $password));
        $count = $query->fetch();
     
           $query1 = $conn->prepare("SELECT FirstName FROM customer WHERE Email = :email");
        $query1->execute(array(':email' => $email));
        $firstname = $query1->fetch();
//        
//          $query3 = $conn->prepare("SELECT c.OrderId,ProductId FROM customer_order c JOIN product_order p ON(c.OrderId = p.OrderId) WHERE p.Email = :email");
//        $query3->execute(array(':email' => $email));
//        $orderhistory = $query3->fetch();
        
          $query4 = $conn->prepare("SELECT Balance FROM customer WHERE Email = :email");
        $query4->execute(array(':email' => $email));
        $balance = $query4->fetch();
          
        
         if ($count > 0){
             $_SESSION['email']=$email;
             $_SESSION['Firstname']=$firstname[0];
             $_SESSION['Balance'] =$balance[0];
           
            //     $_SESSION['order'] =$orderhistory[0];
             echo $balance[0];
           //  echo $orderhistory['ProductId'];
             echo $firstname[0];
            header("Location: ../Loginpage.php");
         }
        else{header("Location: ../index.php");}
    }   
$conn=null;
}
catch(PDOException $e) {
echo $e->getMessage();
    
}

?>
