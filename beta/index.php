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
    <title><?php echo $title ?> - О сервере</title>
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


<?php $about = "-active"; ?>
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
                        <h1>Описание игрового проекта</h1>
                        <img src="../assets/img/line-title.png"/>
<h2>Уважаемые игроки, рады сообщить вам о скором открытии нового сервера.</h2>
<p>Будущий мир воплотит в себе все лучшие идеи и реализации проекта с потрясающей кастомизацией геймплея.</p>
<p>Вас ждут грандиозный онлайн и масштабные сражения! Теперь предлагаем вам познакомиться с нашим форумом - принять участие в акциях проекта! </p>
<p>Мы искренне надеемся, что каждый найдет на нашем сервере что-то свое, то, что он давно искал. </p>
<h2>Сервер будет открыт в Июне 20 числа в 14:00 по Московскому времени. </h2>
<p>Открытие ОБТ состоится в Июне 11 числа в 16:00 по Московскому времени. </p>
<p>Что Вам следует знать о нашем PVE/PvP:<br>
	Высокая работа онлайн-сервера до последнего игрока.<br>
	Уникальная реализация игрового процесса для каждого класса/персонажа. Система улучшения предметов, фарм-зоны, бои с экстремальными боссами, PvP, рейтинговая система без автоботов и многое другое.</p>
<p>Защита отсека через IP/HWID.</p>
<p>Стабильная работа компонентов игры и обновление мира каждую неделю.</p>
<p>Прорисованные предметы и оружия для поддержки игрового баланса.</p>
<p>Заклинания и затраты маны так же повышены что и статы.</p>
<p>Множество трансмогрификации и верховых питомцых на которых можно летать абсолютно везде!</p>
                        

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