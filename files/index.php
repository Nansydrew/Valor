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
    <title><?php echo $title ?> - Файлы</title>
	<meta name="description" content="<?php echo $description ?>">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo-mini.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel:500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/styles.css">
	</head>

<body>

  
          <video class="videoh" autoplay="true" loop="true" muted="muted">
	  <source src="../video/header-bg2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></video>


<?php $files = "-active"; ?>
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
                        <h1>Файлы и как подключиться</h1>
                        <img src="../assets/img/line-title.png"/>
                        <p>Скачать патчи вручную и установить реалмлист:</p>
						<p>set realmlist dualaxe.net</p>
                        
                        <div class="d-options">
                            <a href="https://google.com" target="_blank" class="option1">Google Drive [10GB]</a>
                            <a href="https://yandex.ru" target="_blank" class="option2">Yandex Disk[10GB]</a>
                        </div>
                        </div>
                        
                        <div class="page-content">
                        <h1>Установить лаунчер</h1>
                        <img src="../assets/img/line-title.png"/>
                        <p>Автоматически будет обновлять ваш игровой клиент при выходе новых обновлений.</p>
                        
                        <div class="d-options">
                            <a href="../download/launcher.zip" target="_blank" class="option1">Launcher [200MB]</a>
                            
                        </div>
                        </div>    
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
</body>

</html>