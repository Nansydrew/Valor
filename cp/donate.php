<?
require_once '../include/config.php';
?>
<?php
@session_start();
if (!$_SESSION['user']) {

    header('Location: ../cp/login.php');
}

?>
<html lang="ru">

<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $title ?> - Пожертвование</title>
	<meta name="description" content="<?php echo $description ?>">
    <link rel="icon" type="image/x-icon" href="../assets/img/logo-mini.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel:500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100i,300,300i,400,400i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="../assets/css/styles.css">
	<link rel="stylesheet" href="../assets/css/panel.css">
	<link rel="stylesheet" href="../assets/css/panel_mobile.css">
	<script src="../assets/js/formval.js"></script>    
	<script src="../assets/js/vue.js"></script>    
	<script src="../assets/js/jquery-2.1.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	</head> 

<body>

  
          <video class="videoh" autoplay="true" loop="true" muted="muted">
	  <source src="../video/header-bg2.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></video>


<?php $cp = "-active"; ?>
<?php include "../include/leftmenu.php" ?>
         
<?php include "../include/social.php" ?>

<?php include "../include/menu.php" ?>
    
                         
            <!--header-->
    <div class="header">         
            <div class="page-header">
                
            <img id="logo-header" src="../assets/img/logo-header.png"/>
                
                 <div class="page">
                
 
                        
<?php
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }

	
$userid=  $_SESSION["user"]["id"];
$sql = "SELECT * FROM account WHERE id = '$userid'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $bonuses = $row["bonus"];
                $votes = $row["vote"];
                
            }
        }
        mysqli_free_result($result);
    } 

	
	
	else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);

?>                
<div class="content-bg">
    <div class="content inner-content flex-ss">
        <div class="cp-nav">
<?php $donate = "active"; ?>
<?php include "../include/menucp.php" ?>
			
			<br>	
			

			
			<br>	
					
        </div>
        <div class="cp-content">
            <div class="cp-title flex-cc">Панель пользователя</div>
            <div class="cp-banners flex-sbc">
                <a class="banner flex-cc" href="shop.php"><img class="bg" src="../assets/img/banner_1_bg.png"><span class="text">МАГАЗИН</span></a>
                <a class="banner flex-cc" href="vote.php"><img class="bg" src="../assets/img/banner_2_bg.png"><span class="text">ГОЛОСОВАНИЕ</span></a>                
				<a class="banner flex-cc" href="donate.php"><img class="bg" src="../assets/img/banner_3_bg.png"><span class="text">ПОПОЛНИТЬ</span></a>            </div>
<div class="cp-form-block">
                
                <div class="title">Пополнить баланс</div>
					<div class="note">
						<div><span><font color="orange">
						<ya-tr-span data-index="16-0">ПРИМЕЧАНИЕ:</ya-tr-span></font></span>
						<ya-tr-span> Укажите логин аккаунта куда придут бонусы.</ya-tr-span><br>
						<span><font color="orange">
						<ya-tr-span data-index="16-0">ЭКВИВАЛЕНТ:</ya-tr-span></font></span>
						<ya-tr-span>  1 бонус = <?php echo"$colbonus"; ?> рубль</ya-tr-span>
						</div>
					</div>
					
					
					
					
					<script>
				document.addEventListener( "DOMContentLoaded", function( event )
				{
					$( "#enotForm" ).submit( function( event )
					{
						var char = $( "#char" ).val();
						var count = $( "#count" ).val();

						$.ajax(
						{
							type: "POST",
							url: "sign.php",
							data: ( { "char" : char, "count" : count } ),
							async: false,
							dataType: "json",
							success: function( response )
							{
								$( "#MERCHANT_ID" ).val( response["merchant_id"] );
								$( "#PAY_SUM" ).val( response["sum"] );
								$( "#PAY_ID" ).val( response["payment_id"] );
								$( "#SIGN" ).val( response["sign"] );
								
								$( 'input[name^="cf[char]"]' ).val( char );
							}
						});
					});
				});
			</script>
			<form id="enotForm" class="inner-form" method="get" action="https://enot.io/pay">
				<input type="hidden" name="m" id="MERCHANT_ID" value="{MERCHANT_ID}">
				<input type="hidden" name="oa" id="PAY_SUM" value="{PAY_SUM}">
				<input type="hidden" name="o" id="PAY_ID" value="{PAY_ID}">
				<input type="hidden" name="s" id="SIGN" value="{SIGN}">
				<input type="hidden" name="cf[char]" value="YOUR_PARAMS">
				
				

							<div class="lines">
                        <div class="icon flex-cc"><i class="fa fa-user" aria-hidden="true"></i></div>
                        <div class="form-group field-changepasswordform-password_repeat required">
<input type="text" id="char" name="char" class="form-control-pass" placeholder="Логин аккаунта" value="<?= $_SESSION['user']['username'] ?>" aria-required="true">
<div class="help-block"></div>
</div>                    </div>

	
						
						<div class="lines">
                        <div class="icon flex-cc"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>
                        <div class="form-group field-changepasswordform-password_repeat required">
<input type="number" min="1" max="10000" id="count" name="count" value="0" class="form-control-pass" placeholder="Количество монет" aria-required="true">
<div class="help-block"></div>
</div>                    </div>
						
						
                        <button class="main-btn donate-btn"><ya-tr-span data-index="19-0" data-translated="true" data-source-lang="en" data-target-lang="ru" data-value="Buy Coins" data-translation="Купить монеты" data-type="trSpan" data-selected="false">Купить монеты</ya-tr-span></button>
                    </form>
				
            </div>        </div>
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