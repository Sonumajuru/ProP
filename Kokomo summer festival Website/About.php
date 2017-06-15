<!DOCTYPE html>
<html>
<head>
<title>Kokomo Summer Festival</title>
   <link rel='stylesheet' media="screen and (max-width:2880px)" href='CSS/2880resHome.css'>
    <link href="CSS/Logo.css" rel="stylesheet" type="text/css">
      <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="Images/PalmtreeLogo.png">
    <link rel='stylesheet' media="screen and (max-width:1280px)" href='CSS/1280resHome.css'>
</head>

<body>
    
    
    
  <?php  
  session_start();
    if($_SESSION['email']!=null)
    { 
        $first = $_SESSION['Firstname'];
      echo"<h1 class='name' > Welcome $first</h1>"
    
      ;
    }
    ?>
  <?php
    if($_SESSION['email']!=null)
    { 
			$username = $_SESSION['email'];
			$conn = new PDO('mysql:host=localhost;dbname=dbi336041','dbi336041','Guerrero');
			$query = $conn->query("SELECT Balance FROM customer WHERE Email = '$username'")->fetch();
			 
    echo "<h1 class='balanceI' > Balance €$query[0]</h1>";
    }
		 
    ?> 
  <!--  <img src="Images/HeaderBg.png" id="headerimg">-->
    <div id="Signing">
        <form method="post" action="php/login.php">
            <label>E-mail: <input id="email" type="email" name="email"></label>
            <label>Password: <input id="password" type="password" name="password"></label>
           <input id="LoginB" type="image" src="Images/coconutlogin2.png" value="Login" name="submit">
        </form>
    </div>
   <div id="picturesI">
      <a href="index.php"><img id="homeP" src="Images/wood/Wood%20-%20Light%20Pink1.png"></a>
       <a href="Artists.php"><img id="artistP" src="Images/wood/Wood%20-%20Green1.png"></a>
       <a href="events.php"><img id="eventsP" src="Images/wood/Wood%20-%20Light%20Blue1.png"></a>
       <a href="Contact.php"><img id="contactsP" src="Images/wood/Wood%20-%20Blue1.png"></a>
       <a href="About.php"><img id="aboutP" src="Images/wood/Wood%20-%20Dark%20Yellow1.png"></a>

       <?php
    session_start();
     if($_SESSION['email'] != null){
      echo'<a href="tent.php"><img id="campsiteP" src="Images/wood/Wood%20-%20Light%20Purple1.png"></a>
<a href="Loginpage.php"><img id="accountP" src="Images/wood/Wood%20-%20Orange2.png"></a>
<form method="post" action="php/logout.php">
   <input id="logoutS" type="image" src="Images/wood/Wood%20-%20Pink1.png" name="submit" value="sign out">
    </form>
    <script>document.getElementById("Signing").setAttribute("hidden","hidden");document.getElementById("picturesI").setAttribute("id","picturesI2");</script>';
    }

    ?>

    </div>
        <div id="TextAbout">
 <span class="spanstyleAbout"><h1>Where and when is it going to take place</h1>
   Kokomo Summer Festival includes a whole weekend from 29th to 31st of July. You choose which days you would like to participate. The Festival will take place next to the "Molecaten Park Kuierpad" Camping site, on the other side of Oranjekanaal.   </span>
             <span class="spanstyleAbout"><h1>How do I get tickets</h1>
There are two ways you can see yourself with a Kokomo ticket. You can buy your ticket online or you can buy your ticket right at the entrance of Kokomo. Please note that buying a ticket at the entrance is time consuming and may take a while.</span>
        
     </div>
               <?php  
    session_start();
    if($_SESSION['email'] != null){
      echo'    <div id="Ktweet" hidden="hidden">
<a class="twitter-timeline" data-width="300" data-height="700" href="https://twitter.com/Kokomo_Festival">Tweets by Kokomo_Festival</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <div id="postTweet">
    <a href="https://twitter.com/intent/tweet?screen_name=Kokomo_Festival" class="twitter-mention-button">Tweet to @Kokomo_Festival</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>
    </div>
</div>


<img id="Twitter" src="Images/Twitter.png">';
    }
?>
        <script src="Script/Java3.js"></script>
        
    </body>
</html>