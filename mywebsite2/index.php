<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="javascript" href="script.js">
	<link rel="stylesheet" href="https://icono-49d6.kxcdn.com/icono.min.css">
    <title>Portfolio</title>
</head>
<body>
    
   
    
   
	
<!-- Home -->
<div class="cl">
 <?php if (isset($user)): ?>
        <div class="logut">
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p class="out"><a href="logout.php">Log out</a></p>
        </div>
    <?php else: ?>
        <div class="in">
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        </div>
    <?php endif; ?>
 <nav>
	
 <img src="LOGO.jpg" class="logo">
   <ul>
       <li><a href ="#home">Home</a></li>
	   <li><a href ="#About">About</a></li>
       <li><a href ="#Include">Include</a></li>
       <li><a href ="#footer">Contact</a></li>

   
   </ul>
  </nav>
  
  <div class="content">
        
        <h2 id="dynamicHeading">Over the river and through the woods...</h2>

        </div>
   </div>
   <!-- About -->
   <section id="About">
   <h2 > <u>Hiking</u></h2>
        <div id="main">
		 
            <div id="text">
                
                
                <p>Walking over long distances, typically on trails or roads, is a moderately demanding pastime known as hiking.
				From brief half-day programs to extensive itineraries lasting more than 20 days, the activity's duration varies. 
				The majority of the time, it is an activity that accepts groups of various sizes.<br>A hike is a protracted,
				strenuous stroll that typically takes place on country walks or trails. In Europe, the eighteenth century saw the emergence of leisure walking.
				Religious pilgrimages have been around for much longer, but they typically include long walks for a spiritual goal connected to a particular religion.<br>
				In North America, "hiking" is the preferred term; "walking" is used there for shorter, especially urban walks.
				The term "walking" is used to refer to all types of walking in the United Kingdom and the Republic of Ireland, whether it be a stroll through the park or backcountry hiking through the Alps. 
				In the UK, the terms "hiking," "rambling," "hillwalking," and "fell walking" (a phrase mostly used for hillwalking in northern England) are all often used.
				The Sydney Bush Walkers club coined the word "bushwalking" in 1927, making it an endemic of Australia. The term "tramping" refers to a long, strenuous trek or hike in New Zealand.
				Numerous hiking groups exist all around the world, and studies indicate that walking in any form is good for your health.
                </p>
            </div>
        </div>
    </section>
<!-- Include -->
    <section id="Include">
   <h2 >Include</h2>
		<div class="sec">	
		
		
		    <div class="s3">
                <br><br><br><br><h5>Essential Needs</h5>
                <br><p>	The essentials to bring hiking include navigation, first aid and emergency supplies, and sun protection. You should also carry a headlamp, multitool, and extra clothing and sustenance.
        	</p>
            </div>
			<div class="s4">
                <br><br><br><br><h5>Before the Hike</h5>
                <br><p>
				Find Some Hiking Buddies.
                Research Trail Options.
                Make Sure You Have Enough Time.
                Read Up on Local Regulations.
                Check Trail Conditions.
                Get the Weather and Avalanche Forecasts.
                Dress for the Conditions.
                Take Care of Your Feet.	</p>
            </div>
            <div class="s1">
                <br><br><br><br><h5>Benifits</h5>
                <br><p>hiking is a unique experience that offers advantages above and above those of regular exercise. 
				It not only helps your heart get the oxygen it needs, but it also keeps your body relaxed, your mind alert, your creativity alive, and your relationships happy.
				</p>
            </div>
			<div class="s2">
                <br><br><br><br><h5>Camping</h5>
                <br><p>An overnight hike combines two skill sets: day hiking + lightweight camping. It's a given that backpacking, even for one night, requires equipment that you may not have acquired yet - but will need for a comfortable and safe camping experience.
				</p>
            </div>
			
        </div>	
        
    </section>
 <!-- footer -->
 <footer id="footer">
        <p>It's Adventure Time</p>
        <div class="social">
            <a href="https://www.instagram.com/" target="_blank"><i class="icono-instagram"></i></a>
			<a href="https://www.facebook.com/" target="_blank"><i class="icono-facebook"></i></a>
            <a href="https://www.linkedin.com/" target="_blank"><i class="icono-linkedIn"></i></a>
        </div>
        <p class="email"><b>Email: </b>hikeadventure@gmail.com</p>
        <p class="motto">...Over the river and through the woods...</p>
    </footer>
    
    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    