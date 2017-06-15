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
    <div id="eventPart1">
            <article class="event">
        <h2 class="event">Tiki summer Bash</h2>
        <p class="event">Hello and welcome to everyone at Kokomo summer Festival! Join us for one kokolicious night and have a lot of fun. Let's celebrate the grand opening of Kokomo like only we can do- with a lot of drinks, dances and the best tropical music DJs.  Our special guest will be Jack Thomas, who is one of the co-founders of the ganre. The main event's star is one of the hottest artists of the Dutch stage-Kygo. If you would like to enjoy his unique music and dance till the morning, make sure you don't miss the Kokomo grand opening party. It's going to get Kokolicious!</p>
            </article>
        
            <article class="event">
        <h2 class="event">Kokomo Splash</h2>
        <p class="event">Get wild, get wet, get entertained that's the best foam party for 2016- this is Kokomo splash! Make sure that you take your swim suit, cause it's about to get crazy. We have prepared 8 big foam machines and more than 400 foam guns that you can shoot anything or anyone you want. The only rule is that there are no such. And all this is coming together with the best summer hits of bulgaria's biggest hip hop star Alex P, a lot of fresh summer cocktails and so much more. You just don't want to miss that fun</p>
            </article>
        
        <article class="event">
        <h2 class="event">Kokomo Midnight madness</h2>
            <p class="event">Kokomos midnight madness:
Beach, breeze, warm, drink, glow and the best dutch DJ of dance and house music - Afrojack! Experience the ultimate joy and let yourself to the sound of the music. </p>
        </article>
    </div>
    <div id="eventPart2">
        <article class="event">
        <h2 class="event">Kokomo Delice</h2>
            <p class="event">Take a little break from all dances and party for whole night, with the special eat and drink Kokomo party. This will be something like you have never seen before. You can taste some of the best tropical dishes and drinks. Experience what is it to live on the tropic. But this is not an ordenary lunch. We will have a lot of games where you can challange your friends and let's see who is going to win. Ofcourse there is no party without some noce sounds. Let WeezSims to take care about that. He is going to perform in front of you, so you can feel awsome and make you move like you never did before.</p>
        </article>
        
        <article class="event">
        <h2 class="event">Aloha Paradise</h2>
            <p class="event">
            Aloha amigo! This is how tropical people show hospitality. We would like to invite you to one of the best tropical parties for 2016 - This is Aloha Paradise. We have the best tropical dance music DJs around. Thomas Jack will take care of the good environment, so that you can feel unique and taste the tropical like never before. Get a cocktail and go dancing with your friends. It is going to be just amazing. Aloha !</p>
        </article>
        
        <article class="event">
        <h2 class="event">Kokomo Ocean Nightfall</h2>
            <p class="event">This will be a night to remember, since it is the last time that we party in Kokomo style for this year. People from the tropics are so emotional. They party crazy, dance wild drink a lot, but also love deep. Enjoy this special night with your boo on the sound of love!</p>
        </article>
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