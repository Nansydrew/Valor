<?php
@session_start();
if (!$_SESSION['user'])
?>
<?
require_once '../include/config.php';
?>
<html lang="ru">

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title ?> - Ошибка 404</title>
	<meta name="description" content="<?php echo $description ?>">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo-mini.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel:500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/styles.css"></head>

<body>
 
          <video class="videoh" autoplay="true" loop="true" muted="muted">
	  <source src="../video/header-bg2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></video>

          <div><img class="particle" src="../assets/img/particle.png"/></div>  


<?php include "../include/leftmenu.php" ?>
         
<?php include "../include/social.php" ?>

<?php include "../include/menu.php" ?>
    
<?php $home = "-active"; ?>    
            <!--header-->
            
             <div class="header">
                
             <img id="logo-header" src="../assets/img/logo-header.png"/>
             <!-- MAIN TITTLE -->   
             <div id="main-text"><p>Ничего не найдено...</p></div>
                           
             <div><a  class="play2" href="javascript:history.go(-1)">Вернуться</a></div> 
                
             <div><img class="line" src="../assets/img/line.png"/></div> 
                							
                
     
             </div>