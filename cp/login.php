<?
require_once '../include/config.php';
?>
<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: ../cp/index.php');
    }
?>
<html lang="ru">

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title ?> - Вход</title>
	<meta name="description" content="<?php echo $description ?>">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo-mini.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel:500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/styles.css">
	<script src="../assets/js/formval.js"></script>    
	<script src="../assets/js/vue.js"></script>    
	<script src="../assets/js/jquery-2.1.1.min.js"></script>
	</head> 

<body>

  
          <video class="videoh" autoplay="true" loop="true" muted="muted">
	  <source src="../video/header-bg2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></video>



<?php include "../include/leftmenu.php" ?>
         
<?php include "../include/social.php" ?>

<?php include "../include/menu.php" ?>
    
                         
            <!--header-->
            <div class="header">
            <div class="page-header">
                
            <img id="logo-header" src="../assets/img/logo-header.png"/>
                
                 <div class="page">
                
                    <div class="page-top"></div>
                    <div class="page-body">
                    
                        <div class="page-content">
                        <h1>Вход в личный кабинет</h1>
                        <img src="../assets/img/line-title.png"/>
                        
                        
<form>
		<div class="f-form login">
			<input id="username" name="username"  placeholder="Введите ваш логин">
		</div>
		<div class="f-form pass">
			<input type="password" id="password" name="password" placeholder="Введите ваш пароль">
		</div>


		<div class="f-form emailsub submit">
			<input type="submit" class="main-btn login-btn" value="Войти">
		</div>
		<div class="msg none"></div>
	</form>
	<a class ="resethov" id='item2' href ="reset.php"><p>Забыли пароль?</p></a>
             </div>       
                </div>
                </div>
            
                    
                </div>   
            
            <!--end header-->
            
<?php include "../include/footer.php" ?>

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
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/sidenav.js"></script>    
	<script src="../assets/js/main.js"></script>
	
</body>

</html>