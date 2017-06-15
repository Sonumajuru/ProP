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
<!--        <img id="Twitter" src="Images/Twitter.png">-->
        <div id="TextC">
     <article class="eventC">
    <span class="event">
        For any kind of issues you can find a solution at the manager's office. You can ask your questions on email address: manager@kokomo.festival.com or call the hot line 060-8654-9134. Please note that we cannot garentee you that we can respond in the best way by a phone call, so you may need to come in the manager's office after all. For all kinds of problems except reservations regarding the campsite, you should contact the <a href="http://www.molecaten.nl/contact">Molecaten Park Kuierpad management</a>.</span></article>
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