<?php
@session_start();
if (!$_SESSION['user'])
?>
<?
require_once '../include/config.php'; 
?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="UxRh4PoB5AuSVg5Y3FwlwnZpybgBIA2yy0pkN1by">
    <title><?php echo $title ?> - PvP Статистика</title>
	<meta name="description" content="<?php echo $description ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="no-referrer-when-downgrade">
        <link rel="icon" type="image/x-icon" href="../assets/img/logo-mini.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel:500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i&amp;display=swap">
    <script src="../assets/js/ladder/core.04c3634bf4bf834dbb46.js"></script>
    <script id="init">window.trigger("init");</script>
    <link href="../assets/css/ladder/core.b15be49248362418ef78.css" rel="stylesheet" type="text/css"/>
    <link href="../assets/css/ladder/navbar.css@v=8.27.2.css" rel="stylesheet">
    <link href="../assets/css/ladder/photoswipe.css@v=8.27.2.css" rel="stylesheet">
    <link href="../assets/css/ladder/izimodal.css@v=8.27.2.css" rel="stylesheet">
    <link href="../assets/css/ladder/simplebar.css@v=8.27.2.css" rel="stylesheet">
    <link href="../assets/css/ladder/5.60a3b147f091048d9af5.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../assets/css/ladder/styles.css"></head>
        </head>
<body class="ru-ru">


    <div class="body">
        <div class="page">
		
		
<?php $pvpstat = "-active"; ?>	
<?php include "../include/leftmenu.php" ?>
         

<?php include "../include/menu.php" ?>
		
		
		
		
		

            <span class="SkipLink-target" id="skip-link-target"></span>
            <main id="main" role="main">
                <div class="Pane bordered Pane--underSiteNav Pane--above Pane--full Pane--abover" media-medium="!Pane--full">
        <div class="Pane-bgg">          <video class="videoh" autoplay="true" loop="true" muted="muted">
	  <source src="../video/header-bg2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></video>
            <div class="Pane-overlay"></div>
        </div>
		
		
		













		
		
        <div class="Pane-content">
            <div class="space-medium"></div>
            <div media-huge="space-medium"></div>
            <div class="align-center" media-wide="!align-center align-left">
                <h1 class="margin-none font-semp-xxxLarge-white">Рейтинговая таблица PvP</h1>
            </div>
            <div class="space-rhythm-medium"></div>
            <div class="contain-large align-center" media-wide="!align-center !contain-large contain-wide contain-left align-left">
                <p class="margin-none font-bliz-light-small-beige">Могучие герои Альянса и Орды сражаются за славу на аренах и полях боя. Подвиги 1000 лучших игроков вашего региона навеки входят в анналы истории.</p>
            </div>
            <div class="space-rhythm-medium"></div>
            <div class="contain-medium gutter-small" media-medium="!gutter-small" media-nav="!contain-medium">
                <div class="List List--vertical List--full" media-nav="!List--full !List--vertical List--gutters">
                    <div class="List-item">
                        <div class="SelectMenu SelectMenu--fullscreen" media-medium="!SelectMenu--fullscreen">
                            <div class="SelectMenu-toggle"><?php
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
?><?php echo "$row[name]"; ?></div>
                            <div class="SelectMenu-menu">
                                <div class="SelectMenu-close">
                                    <span class="Icon Icon--closeGold SelectMenu-close-icon"></span>
                                </div>
                                <div class="SelectMenu-inputContainer">
                                    <input class="SelectMenu-input" type="search"/></div>
                                <div class="SelectMenu-items">
                                                                            <div class="SelectMenu-item" data-value="<?php echo "$row[name]"; ?>">
                                            <a class="Link SelectMenu-link" href="./">
                                                <?php echo "$row[name]"; ?>
                                            </a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="space-normal" media-nav="!space-normal"></div>
                    </div>
                    <div class="List-item">
                        <div class="SelectMenu SelectMenu--fullscreen" media-medium="!SelectMenu--fullscreen">
                            <div class="SelectMenu-toggle">Арена 2х2</div>
                            <div class="SelectMenu-menu">
                                <div class="SelectMenu-close">
                                    <span class="Icon Icon--closeGold SelectMenu-close-icon"></span>
                                </div>
                                <div class="SelectMenu-inputContainer">
                                    <input class="SelectMenu-input" type="search"/></div>
                                <div class="SelectMenu-items">
                                                                            <div class="SelectMenu-item" data-value="Арена 1х1">
                                            <a class="Link SelectMenu-link" href="./">
                                                Арена 1х1
                                            </a>
                                        </div>
                                                                        <div class="SelectMenu-item" data-value="Арена 2х2">
                                        <a class="Link SelectMenu-link" href="2v2.php">
                                            Арена 2х2
                                        </a>
                                    </div>
                                    <div class="SelectMenu-item" data-value="Арена 3х3">
                                        <a class="Link SelectMenu-link" href="3v3.php">
                                            Арена 3х3
                                        </a>
                                    </div>
                                                                        <div class="SelectMenu-exception">Результатов не найдено.</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space-medium" media-wide="space-huge"></div>
        </div>
    </div>
	
	
	
	
	
    <div class="Divider"></div>
    <div class="Pane Pane--dirtBlue bordered">
        <div class="Pane-bgg">
            <div class="Pane-overlay"></div>
        </div>

        <div class="Pane-content">
            <div media-wide="space-normal"></div>
            <div class="space-normal"></div>
            <div class="Paginator" data-page="1" data-size="30" data-total="10">
                <div class="Paginator-pages">
                    <div class="Paginator-page" data-page="1">
                        <div class="SortTable SortTable--flex">
                            <div class="SortTable-head">
                                                                    <div class="SortTable-row">
                                    <div class="SortTable-col SortTable-label is-sorted" data-priority="1">
                                        <div class="SortTable-labelOuter">
                                            <div class="SortTable-labelInner">
                                                <div class="SortTable-labelText">Ранг</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="SortTable-col SortTable-label" data-priority="2">
                                        <div class="SortTable-labelOuter">
                                            <div class="SortTable-labelInner">
                                                <div class="SortTable-labelText">Ступень/Рейтинг</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="SortTable-col SortTable-label SortTable-label--left" data-priority="1">
                                        <div class="SortTable-labelOuter">
                                            <div class="SortTable-labelInner">
                                                <div class="SortTable-labelText">Команда</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="SortTable-col SortTable-label hide" data-priority="4" media-wide="!hide">
                                        <div class="SortTable-labelOuter">
                                            <div class="SortTable-labelInner">
                                                <div class="SortTable-labelText">Игр за сезон</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="SortTable-col SortTable-label hide" data-priority="4" media-wide="!hide">
                                        <div class="SortTable-labelOuter">
                                            <div class="SortTable-labelInner">
                                                <div class="SortTable-labelText">Побед за сезон</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="SortTable-col SortTable-label hide" data-priority="4" media-wide="!hide">
                                        <div class="SortTable-labelOuter">
                                            <div class="SortTable-labelInner">
                                                <div class="SortTable-labelText">Игр за неделю</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="SortTable-col SortTable-label hide" data-priority="4" media-wide="!hide">
                                        <div class="SortTable-labelOuter">
                                            <div class="SortTable-labelInner">
                                                <div class="SortTable-labelText">Побед за неделю</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            </div>
															
															
															
															
                            <div class="SortTable-body">

<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbchar");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");  
$sql =  "SELECT * FROM arena_team where type = 2 ORDER BY `rating` DESC LIMIT 50";



if($result = mysqli_query($conn, $sql))
{
     $id = 1;

    $rowsCount = mysqli_num_rows($result);

    foreach($result as $row)

	{ 	
			

 	

	
include "../include/ratinginf.php";
	



		    echo "<div class='SortTable-row'>
                                                <div class='SortTable-col SortTable-data align-center text-nowrap' data-value='$id'>$id</div>
                                                <div class='SortTable-col SortTable-data align-center text-nowrap'>
                                                    <div class='flex flex-align-center flex-justify-center'>
                                                        <a class='Link' data-tooltip='$ratinginf'>
                                                            <div class='List'>
                                                                <div class='List-item'>
                                                                    <img src='../assets/img/ladder/arena/$ratinginf.png' style='max-width: 32px; margin-right: 5px;'></div>
                                                                <div class='List-item'>$row[rating]</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class='SortTable-col SortTable-data' data-value='$row[name]'>
                                                    <a class='Link Character Character--$classimg Character--inline Character--small Character--name margin-top-xSmall' ' media-wide='Character--avatar'>
                                                        <div class='Character-link'>
                                                            <div class='Character-table'>
                                                                <div class='Character-bust'>
                                                                    <div class='Art Art--above'>
                                                                        <div class='Art-size' style='padding-top:50.43478260869565%'></div>
                                                                        <div class='Art-image' style='background-image:url(../assets/img/icons/Icon-wow-ocho.png);'></div>
                                                                        <div class='Art-overlay'></div>
                                                                    </div>
                                                                </div>
                                                                <div class='Character-avatar'>
                                                                    <div class='Avatar Avatar--medium'>
                                                                        <div class='Avatar-image' style='background-image:url(../assets/img/icons/Icon-wow-ocho.png);'></div>
                                                                    </div>
                                                                </div>
                                                                <div class='Character-details'>
                                                                    <div class='Character-role'></div>
                                                                    <div class='Character-name'>$row[name]</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class='clearfix'></div>
                                                </div>
												
												<div class='SortTable-col SortTable-data hide text-nowrap align-center' data-value='$row[seasonGames]' media-wide='!hide'>$row[seasonGames]</div>
                                                <div class='SortTable-col SortTable-data hide text-nowrap align-center color-status-success' data-value='$row[seasonWins]' media-wide='!hide'>$row[seasonWins]</div>
                                                <div class='SortTable-col SortTable-data hide text-nowrap align-center' data-value='$row[weekGames]' media-wide='!hide'>$row[weekGames]</div>
                                                <div class='SortTable-col SortTable-data hide text-nowrap align-center color-status-success' data-value='$row[weekWins]' media-wide='!hide'>$row[weekWins]</div>
                                            </div>"; $id++;
    }
	
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

								
											
											
											
											
											
											
											
											
											
											
											
											
											
                                                                                                                                        </div>
																																		
																																		
																																		
																																		
																																		
																																		
																																		
																																		
																																		
																																		
																																		
																																		
																																		
																																		
																																		
																																		
																								
                                                                                                                        </div>
                    </div>
                </div>

            </div>
            <div class="space-huge"></div>
            <div media-wide="space-large"></div>
            <div class="Tooltip" name="pvp-tier-tooltip-8">
                <div class="GameTooltip"><div class="ui-tooltip"><div class="List"><div class="List-item"><img src="../assets/img/ladder/arena/pvp-tier-tooltip-8.png" style="max-width: 32px;"></div><div class="List-item gutter-small-left"><div class="font-bliz-light-small-white">Без ранга</div></div></div><div class="space-small"></div><div class="font-size-xSmall color-beige-medium">Присуждается игрокам с рейтингом 0+.</div></div></div>
            </div>
            <div class="Tooltip" name="pvp-tier-tooltip-9">
                <div class="GameTooltip"><div class="ui-tooltip"><div class="List"><div class="List-item"><img src="../assets/img/ladder/arena/pvp-tier-tooltip-9.png" style="max-width: 32px;"></div><div class="List-item gutter-small-left"><div class="font-bliz-light-small-white">Боец</div></div></div><div class="space-small"></div><div class="font-size-xSmall color-beige-medium">Присуждается игрокам с рейтингом 1370+.</div></div></div></div>
            <div class="Tooltip" name="pvp-tier-tooltip-11">
                <div class="GameTooltip"><div class="ui-tooltip"><div class="List"><div class="List-item"><img src="../assets/img/ladder/arena/pvp-tier-tooltip-11.png" style="max-width: 32px;"></div><div class="List-item gutter-small-left"><div class="font-bliz-light-small-white">Претендент</div></div></div><div class="space-small"></div><div class="font-size-xSmall color-beige-medium">Присуждается игрокам с рейтингом 1570+.</div></div></div></div>
            <div class="Tooltip" name="pvp-tier-tooltip-12">
                <div class="GameTooltip"><div class="ui-tooltip"><div class="List"><div class="List-item"><img src="../assets/img/ladder/arena/pvp-tier-tooltip-12.png" style="max-width: 32px;"></div><div class="List-item gutter-small-left"><div class="font-bliz-light-small-white">Фаворит</div></div></div><div class="space-small"></div><div class="font-size-xSmall color-beige-medium">Присуждается игрокам с рейтингом 1770+.</div></div></div></div>
            <div class="Tooltip" name="pvp-tier-tooltip-13">
                <div class="GameTooltip"><div class="ui-tooltip"><div class="List"><div class="List-item"><img src="../assets/img/ladder/arena/pvp-tier-tooltip-13.png" style="max-width: 32px;"></div><div class="List-item gutter-small-left"><div class="font-bliz-light-small-white">Дуэлянт</div></div></div><div class="space-small"></div><div class="font-size-xSmall color-beige-medium">Присуждается игрокам с рейтингом 2070+.</div></div></div></div>
            <div class="Tooltip" name="pvp-tier-tooltip-14">
                <div class="GameTooltip"><div class="ui-tooltip"><div class="List"><div class="List-item"><img src="../assets/img/ladder/arena/pvp-tier-tooltip-14.png" style="max-width: 32px;"></div><div class="List-item gutter-small-left"><div class="font-bliz-light-small-white">Ветеран</div></div></div><div class="space-small"></div><div class="font-size-xSmall color-beige-medium">Присуждается игрокам с рейтингом 2370+.</div></div></div></div>
        </div>
    </div>
            </main>
            <footer id="footer">
                <div class="Divider"></div>
<div class="Pane Pane--dirtDark Pane--above">
    <div class="Pane-bgg">
        <div class="Pane-overlay"></div>
    </div>
    <div class="Pane-content">
        <div class="SiteFooter">
            <div class="NavbarFooter is-regionless" >

				

                <style>.NavbarFooter-doNotSell {
                        display: none;
                    }
                    .NavbarFooter[data-country="US"][data-administrative-division="CA"] > .NavbarFooter-doNotSell,
                    .NavbarFooter[data-country="US"][data-administrative-division="NV"] > .NavbarFooter-doNotSell {
                        display: block;
                    }
                </style>
                <nav class="NavbarFooter-links NavbarFooter-mainLinks">

                </nav>
                <div class="NavbarFooter-copyright">© Copyright 2022 <?php echo $title ?></div>
            </div>
        </div>
    </div>
</div>
            </footer>

        </div>
    </div>



		<script src="../assets/js/ladder/navbar.js@v=8.27.2"></script>
        <script src="../assets/js/ladder/runtime.c86dff083122a451b1af.js"></script>
        <script src="../assets/js/ladder/vendor.ac7a75610385e9b40211.js"></script>
        <script src="../assets/js/ladder/3.20dec79f412b658fa525.js"></script>
        <script src="../assets/js/ladder/legacy-components.24c8e8ac1040f44e6717.js"></script>
        <script src="../assets/js/ladder/livewire.js@id=83b555bb3e243bc25f35" data-turbo-eval="false" data-turbolinks-eval="false"></script><script data-turbo-eval="false" data-turbolinks-eval="false">window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'UxRh4PoB5AuSVg5Y3FwlwnZpybgBIA2yy0pkN1by';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/sidenav.js"></script>    
    </body>
</html>
