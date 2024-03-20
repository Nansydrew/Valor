<!-- ISDteam.ru Разработка и создание сайтов для вашего проекта. -->

<?php
@session_start();
if (!$_SESSION['user'])
?>
<?
require_once 'include/config.php';
?>
<html lang="ru">

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title ?> - Home</title>
	<meta name="description" content="<?php echo $description ?>">
    <link rel="icon" type="image/x-icon" href="assets/img/logo-mini.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel:500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/styles.css"></head>

<body>
 
          <video class="videoh" autoplay="true" loop="true" muted="muted">
	  <source src="video/header-bg2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></video>

          <div><img class="particle" src="assets/img/particle.png"/></div>  


<?php include "include/leftmenu.php" ?>
         
<?php include "include/social.php" ?>
<?php $home = "-active"; ?>  
<?php include "include/menu.php" ?>
    
  
            <!--header-->
            
             <div class="header">
                
             <img id="logo-header" src="assets/img/logo-header.png"/>
             <!-- MAIN TITTLE -->   
             <div id="main-text"><p>World of Warcrafdt Without Restrictions 7.3.5</p></div>
                           
             <div><a  class="play2" href="/files">PLAY</a></div> 
                
             <div><img class="line" src="assets/img/line.png"/></div> 
                							<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM realmlist";
if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
     
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
                 <div id="server"><span class="p"><?php echo "$row[name]"; ?>: </span><span class="green">
<?php
$link = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
if (mysqli_connect_errno()) {
    printf("Ошибка подключения: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($link, "SELECT online FROM account where online = 1")) {
    $row_cnt = mysqli_num_rows($result);
    mysqli_free_result($result);
}
mysqli_close($link);
?>
				 <? printf("%d", $row_cnt); ?></span></div>                 
             <div><a href="#game-info"><img class="scroll" src="assets/img/scroll.png"/></a></div>    
     
             </div>
            
            <!--end header-->
            
            <!--game info-->

             <div id="game-info" class="gameinfo">
  
                 <p>Welcome to legion game server <?php echo $title ?></p>
             
             <div><img class="line2" src="assets/img/line.png"/></div>
                
             <div class="text-info">
            
             <div class="info">

             <span class="p2">Dear players, we are glad to inform you about the imminent opening of a new World of Warcraft Legion server. The future world will embody all the best ideas and project implementations with amazing gameplay customization.<br><br>Grandiose online and large-scale battles are waiting for you! And now we invite you to get acquainted with our forum!
Participate in project promotions!</br></br></span></div>
                
             <div class="info">
            
             <span class="p2">We sincerely hope that everyone will find something of their own on our server, something that they have been looking for for a long time.</br><br>Server will be open</br> at the end of 2022 - beginning of 2023.</br></br>Open beta testing will take place </br>Soon!</span></div>
          
             </div> 
            
                 <p>Why are we:</p>   
    
             <div class="about">
    

             <!--about 1-->            


             <div class="about-info">
                    
             <div class="about-body1"></div>
             <div class="about-body">
             <img src="assets/img/about-1.png">
            
             <p class="p3">We are trying to create the perfect server. Players for players!</p></div>
                
             </div>    
                

             <!--about 2-->


             <div class="about-info">
                    
             <div class="about-body1"></div>
             <div class="about-body">
             <img src="assets/img/about-2.png">
                    
             <p class="p3">24/7 support and development service. Each report will be corrected.</p></div>
                    
             </div> 
                
   
             <!--about 3-->             


             <div class="about-info">
                    
             <div class="about-body1"></div>
             <div class="about-body">
             <img src="assets/img/about-3.png">
             <p class="p3">The game world in the original version of the legion add-on</p></div>
                

             </div>    
             </div>
            
             </div>
            
            <!--end about-->
        
         
            <!--slide-->         

             <div>
             <div class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3500" data-bs-pause="false" id="carousel-1">
             <div class="carousel-inner" style="height: 551px;">
      
                 
             <!--slide 1-->
 
             <div class="carousel-item active" id="slide1">

             <p id="h1">News about beta testing<br></p>
            
             <p class="p4">Very soon we will open beta testing. Apply for participation and get access and the opportunity to leave your treasure in the history of the server.<br></p>
             </div>

    
             <!--slide 2-->

             <div class="carousel-item" id="slide2">

             <p id="h1">Welcome to Dualaxe wow WoW<br></p>

             <p class="p4"> We have created a unique world that contains both elements familiar to 7.3.5 and new exclusive content, in which each of you will find something special for yourself, regardless of whether you are a beginner or an experienced player.<br></p>
             </div>


             <!--slide 3-->

             <div class="carousel-item" id="slide3">
                    
             <p id="h1">PvP<br></p>
             
             <p class="p4">On our server, everyone is free to choose their own path - for the Horde or for the Alliance, or maybe even the path of the Outcast. The choice between which side to fight in the confrontation between factions, in the open world, on the battlefield, or in the arena. Or perhaps abandon this war and focus on fighting the monsters that threaten all of Azeroth? The choice is yours.<br></p>
             </div>    
             </div>
            
             
             <!--controls-->

             <div>
             <a class="carousel-control-prev" href="index.html#carousel-1" role="button" data-bs-slide="prev" id="prev"><img src="assets/img/prev.png"></a>
             <a class="carousel-control-next" href="index.html#carousel-1" role="button" data-bs-slide="next" id="next"><img src="assets/img/next.png"></a></div>
             
             </div>
             </div>

            <!--end slide-->


   
            <!--forum and rank-->
           
            <div class="forum-rank">

<?php include "include/forum.php" ?> 
 
                <div class="forum">
                    
                        <div class="body1"></div>
                    <div class="body2">
                    <p class="p5">PvP kills rating</p>    
                    <img class="line-title" src="assets/img/line-title.png">

                    <div class="rank-title">
                    <span>#</span>
                    <span>Name</span>
                    <span>PvP</span></div>
    
							<?php
$connlich = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbchar");
if (!$connlich) {
  die("Ошибка: " . mysqli_connect_error());
}
mysqli_set_charset($connlich, "utf8");  
$sql = "SELECT * FROM characters ORDER BY `totalKills` DESC LIMIT 5";
	
if($result = mysqli_query($connlich, $sql))
{
	
	$id = 1;
	
    $rowsCount = ($result);

    foreach($result as $row)

	{
		
		
		
echo "

								
								
								<div class='player'>
                    <span><img src='assets/img/rank$id.png'/></span>
                    <span class='p6'>$row[name]</span>
                    <span class='p6'>$row[totalKills]</span></div>
								
								
								
								";$id++;

			    }
    $result->free();
} 
else{
    echo "Ошибка: " . $connlich->error;
}
$connlich->close();
?>

		
                    
		
                             
                        
                    </div>
                
                </div>    
    
                </div>

              <!--end forum and rank-->

<?php include "include/footer.php" ?>

        <script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}
 
    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
    </script> 

    <script>

    var video = document.getElementById("header-video");

    </script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/sidenav.js"></script></body>

</html>