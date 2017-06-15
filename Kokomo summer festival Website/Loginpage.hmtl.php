<!DOCTYPE html>
<html>
<head>
<title>Kokomo Summer Festival</title>
    <link href="CSS/Logo.css" rel="stylesheet" type="text/css">
      <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
       <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <style type="text/css">
        
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
   
    <link rel="icon" href="Images/PalmtreeLogo.png">
</head>

<body>
    <?php
    session_start();
     if($_SESSION['email'] != null){
        
    }
    else{
        header ('Location: index.php');
    }
    
    ?>
    
    <div id="pictures">
         <a href="index.php"><img id="homeP" src="Images/wood/Wood%20-%20Light%20Pink1.png"></a>
    <a href="tent.php"><img id="campsiteP" src="Images/wood/Wood%20-%20Light%20Purple1.png"></a>
    <img id="accountP" src="Images/wood/Wood%20-%20Orange2.png">
        <a href="Artists.php"><img id="artistP" src="Images/wood/Wood%20-%20Green1.png"></a>
        <a href="events.php"> <img id="eventsP" src="Images/wood/Wood%20-%20Light%20Blue1.png"></a>
        <a href="Contact.php"><img id="contactsP" src="Images/wood/Wood%20-%20Blue1.png"></a>
        <a href="About.php"><img id="aboutP" src="Images/wood/Wood%20-%20Dark%20Yellow1.png"></a>
    
    
    
    <form method="post" action="php/logout.php">
   <input id="logoutS" type="image" src="Images/wood/Wood%20-%20Pink1.png" name="submit" value="sign out">
    </form>
    </div>
    
    
   <?php  
  session_start();
    if($_SESSION['email']!=null)
    { 
        $first = $_SESSION['Firstname'];
      echo"<h1 class='nameAccount' > Welcome $first</h1>"
    
      ;
    }
    ?>
    
  <!--  <img src="Images/HeaderBg.png" id="headerimg">-->
    
 
 	<?php 
			$username = $_SESSION['email'];
			$conn = new PDO('mysql:host=localhost;dbname=dbi336041','dbi336041','Guerrero');
			$query = $conn->query("SELECT Balance FROM customer WHERE Email = '$username'")->fetch();
			 
    echo "<h1 class='balance' > Balance $query[0]</h1>";
		$conn=null;	
		 
    ?> 
    	<?php 
			$username = $_SESSION['email'];
			$conn = new PDO('mysql:host=localhost;dbname=dbi336041','dbi336041','Guerrero');
			$query = $conn->query("SELECT Status FROM customer WHERE Email = '$username'")->fetch();
			 session_start();
           $_SESSION['status']=$query[0];
			$conn=null;
		 
    ?> 
<?php
     session_start();
    if($_SESSION['status']==1){
   
    }
    else{
        
       echo '<button id="buyl" class="action-button shadow color animate buy" >Buy Tickets</button>';

    }
    
    ?>
 
<!--<button id="buyl" class="action-button shadow color animate buy" hidden="hidden">Buy Tickets</button>-->

    <div id="form2" class="container" hidden="hidden"><div class="row"><div class="span12">
        <form class="form-horizontal span6" action="" method="post">
            <fieldset><legend>Payment</legend><div class="control-group"><label class="control-label">Card Holder\'s Name</label><div class="controls"><input type="text" class="input-block-level" pattern="\w+ \w+.*" title="Fill your first and last name"></div></div><div class="control-group"><label class="control-label">Card Number</label><div class="controls"><div class="row-fluid"><div class="span3"><input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="First four digits" ></div><div class="span3"><input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="Second four digits" ></div><div class="span3"> <input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="Third four digits" ></div><div class="span3"><input type="text" class="input-block-level" autocomplete="off" maxlength="4" pattern="\d{4}" title="Fourth four digits" ></div></div></div></div><div class="control-group"><label class="control-label">Card Expiry Date</label><div class="controls"><div class="row-fluid"><div class="span9"><select class="input-block-level"><option>January</option><option>...</option><option>December</option></select></div><div class="span3"><select class="input-block-level"><option>2013</option><option>...</option><option>2015</option></select></div></div></div></div><div class="control-group"><label class="control-label">Card CVV</label><div class="controls"><div class="row-fluid"><div class="span3"><input type="text" class="input-block-level" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" ></div> <!--  <div class="control-group" id="cost"><div class="controls"><div class="row-fluid"><div class="span9" id="costf">Cost: 55 euros</div></div></div></div>--><div class="span8"></div></div></div></div><div class="form-actions"> <button type="submit" class="btn btn-primary" name="submit">Submit</button> <button id="cancel" type="button" class="btn">Cancel</button> </div></fieldset>
        </form>

        </div></div></div>



<?php
   
try{
    if(isset($_POST['submit'])) {
$conn = new PDO('mysql:host=localhost;dbname=dbi336041','dbi336041','Guerrero');

   
        $email =$_SESSION['email'];
      
        
        $query = $conn->prepare("UPDATE customer SET Status = 1 WHERE Email = :email");
        $query->execute(array(':email' => $email));
  
        echo '<script language="javascript">';
  echo 'alert("success")';  
  echo '</script>';
        
$conn=null;
    }
}
catch(PDOException $e) {
    
    
}
    
    
    
    
    ?>

<div id="Ktweet" hidden="hidden">
<a class="twitter-timeline" data-width="300" data-height="700" href="https://twitter.com/Kokomo_Festival">Tweets by Kokomo_Festival</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <div id="postTweet">
     <a href="https://twitter.com/intent/tweet?screen_name=Kokomo_Festival" class="twitter-mention-button">Tweet to @Kokomo_Festival</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
</div>

<img id="Twitter" src="Images/Twitter.png">
 <script src="Script/Java2.js"></script>

    
    </body>
</html>
