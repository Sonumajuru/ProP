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
        
      
        
        
        <div id="ArtistContent">
            
            <div id="Afro">
           
            <a href="http://live.afrojack.com/"> <img class="artists" src="Images/Artists/Afrojackimage.png" alt="Afrojack"></a>
                <div id="AfroIc">
            <a href="https://www.facebook.com/djafrojack/"><img class="icons" src="Images/icons/F_icon.svg.png" alt="facebook icon"></a>
            <a href="https://twitter.com/afrojack"><img class="icons" src="Images/icons/Twitter_bird_icon.png" alt="twitter icon"></a> 
            <a href="https://www.youtube.com/user/AFROJACKTV"><img class="icons" src="Images/icons/youtube.png" alt="youtube icon"></a>
            <a href="https://www.instagram.com/afrojack/"><img class="icons" src="Images/icons/Uiconstock-Socialmedia-Instagram.ico" alt="instagram icon"></a>
                </div>
            </div>   
                
            
            <div id="Kygo">
            
            <a href="http://kygomusic.com/"><img class="artists" src="Images/Artists/Kygoimage.png" alt="Kygo" ></a>
            <div id="KygoIc"><a href="https://www.facebook.com/kygoofficial"><img class="icons" src="Images/icons/F_icon.svg.png" alt="facebook icon"></a>
            <a href="https://twitter.com/kygomusic"><img class="icons" src="Images/icons/Twitter_bird_icon.png" alt="twitter icon"></a>
            <a href="https://www.youtube.com/user/KygoMusic"><img class="icons" src="Images/icons/youtube.png" alt="youtube icon"></a>
            <a href="https://www.instagram.com/kygomusic/"><img class="icons" src="Images/icons/Uiconstock-Socialmedia-Instagram.ico" alt="instagram icon"></a>
                </div>
            </div>
            
            <div id="Weesz">
            <img class="artists" src="Images/Artists/weezsims.png" alt="WeezsimS">
            <div id="WeeszIc"><a href="https://www.facebook.com/Weezsims/"><img class="icons" src="Images/icons/F_icon.svg.png" alt="facebook icon"></a>
            <a href="https://twitter.com/weezsims"><img class="icons" src="Images/icons/Twitter_bird_icon.png" alt="twitter icon"></a>   
            <a href="https://www.youtube.com/user/WeezsimS"><img class="icons" src="Images/icons/youtube.png" alt="youtube icon"></a>
            <a href="https://www.instagram.com/weezsims/"><img class="icons" src="Images/icons/Uiconstock-Socialmedia-Instagram.ico" alt="instagram icon"></a>
                </div>
            </div>
            
            <div id="Jeff">
            
            <a href="http://www.djjazzyjeff.com/"><img class="artists" src="Images/Artists/JazzyJeff.png" alt="Jazzy Jeff"></a>
            <div id="JeffIc"><a href="https://www.facebook.com/djjazzyjeff/"><img class="icons" src="Images/icons/F_icon.svg.png" alt="facebook icon"></a>
            <a href="https://twitter.com/djjazzyjeff215"><img class="icons" src="Images/icons/Twitter_bird_icon.png" alt="twitter icon"></a>
            <a href="https://www.youtube.com/user/jefftownes"><img class="icons" src="Images/icons/youtube.png" alt="youtube icon"></a>
            <a href="https://www.instagram.com/djjazzyjeff/"><img class="icons" src="Images/icons/Uiconstock-Socialmedia-Instagram.ico" alt="instagram icon"></a>
                </div>
            </div>
            
            <div id="Mari">
              
            <a href="http://www.mariferrari.com/"><img class="artists" src="Images/Artists/MariFerrari.png" alt="Mari Ferrari"></a>
            <div id="MariIc">
                <a href="https://www.facebook.com/DjMariF"><img class="icons" src="Images/icons/F_icon.svg.png" alt="facebook icon"></a>
            <a href="https://twitter.com/djmariferrari"><img class="icons" src="Images/icons/Twitter_bird_icon.png" alt="twitter icon"></a>  
            <a href="https://www.youtube.com/user/djmarif"><img class="icons" src="Images/icons/youtube.png" alt="youtube icon"></a>
            <a href="https://www.instagram.com/djmariferrari/"><img class="icons" src="Images/icons/Uiconstock-Socialmedia-Instagram.ico" alt="instagram icon"></a>
                </div>
            </div>
            
            <div id="Alex">
            <img class="artists" src="Images/Artists/AlexP.png" alt="Alex P">
            <div id="AlexIc">
                <a href="https://www.facebook.com/LULIN4/"><img class="icons" src="Images/icons/F_icon.svg.png" alt="facebook icon"></a>
            <a href="https://twitter.com/darealALEXP"><img class="icons" src="Images/icons/Twitter_bird_icon.png" alt="twitter icon"></a>    
            <a href="https://www.youtube.com/channel/UChPk_18WKxKUq98AgyPkKhQ"><img class="icons" src="Images/icons/youtube.png" alt="youtube icon"></a>
                </div>
            </div>
            
            
            <div id="Jack">
            <img class="artists" src="Images/Artists/ThomasJack.png" alt="Thomas Jack">
            <div id="JackIc">
                <a href="https://www.facebook.com/thomasjackmusic/"><img class="icons" src="Images/icons/F_icon.svg.png" alt="facebook icon"></a>
            <a href="https://twitter.com/thomasjack"><img class="icons" src="Images/icons/Twitter_bird_icon.png" alt="twitter icon"></a>
            <a href="https://www.youtube.com/channel/UCtdVJ1dXaDEIDnsDIwrSQrg"><img class="icons" src="Images/icons/youtube.png" alt="youtube icon"></a>
            <a href="https://www.instagram.com/thomasjackmusic/"><img src="Images/icons/Uiconstock-Socialmedia-Instagram.ico" alt="instagram icon" class="icons"></a>
                </div>
            </div>
        
        </div>
  <img id="rock" src="Images/Rock.png">
        <img id="seashell" src="Images/seashell-777838_960_720.png">
        <img id="rock1" src="Images/Rock.png">
        <img id="rock2" src="Images/Rock.png">
        <img id="rock3" src="Images/Rock.png">
        <img id="rock4" src="Images/Rock.png">
        <img id="seashell1" src="Images/seashell-777838_960_720.png">
        <img id="seashell2" src="Images/seashell-777838_960_720.png">
        <img id="seashell3" src="Images/seashell-777838_960_720.png">
           <img id="seashell4" src="Images/seashell-777838_960_720.png">
        
<!--
<div id="Ktweet" hidden="hidden">
<a class="twitter-timeline" data-width="300" data-height="700" href="https://twitter.com/Kokomo_Festival">Tweets by Kokomo_Festival</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <div id="postTweet">
     <a href="https://twitter.com/intent/tweet?screen_name=Kokomo_Festival" class="twitter-mention-button">Tweet to @Kokomo_Festival</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
    </div>
</div>

<img id="Twitter" src="Images/Twitter.png">
-->
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