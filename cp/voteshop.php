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
    <title><?php echo $title ?> - Отправить голоса</title>
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
<?php $shopvote = "active"; ?>
<?php include "../include/menucp.php" ?>
			
			<br>	
			

			
			<br>	
					
        </div>
        <div class="cp-content">
            <div class="cp-title flex-cc">Панель пользователя</div>
<div>
				<br>
				<center> 
				<table>
					<tbody><tr>
						<td><img alt="wow.png" src="../assets/img/icons/wow.png"><font color="orange"> Примечание:</font>  Перед отправкой убедитесь на какого персонажа вы отправляете <font color="orange">монеты.</font></a></td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					<tr>
						<td><li>Если у вас появились проблемы с отправкой, то напишите нам на <a href = "<? echo $forum ?>"><font color="orange">форум.</font></a></li></td>
					</tr>
					<tr>
						<td><li>Помните что все отправки окончательные, <b><font color="red">возвратов и обменов не будет!</font></b></li></td>
					</tr>
					<tr>
						<td><li>Перезайдите на персонажа чтобы получить <font color="orange">монеты.</font></li></td>
					</tr>
					<tr>
						<td><li><font color="orange">ЭКВИВАЛЕНТ:</font> <? echo $colvote ?> голоса = 1 монета</li></td>
					</tr>
				</tbody></table>
				</center> 
				<br>
			</div>
			
			
			
			
<div class="shop_top">	
            </div>
			


            <div class="cp-form-block">
                <div class="title">Отправить монеты</div>
				<? include"../include/voteshop.php";?>
                <form method="POST" action="" class="inner-form">
                    <div class="lines">
                        <div class="form-group">
                    <div class="select">
                        <select id="selectchar" name="selectchar" required>
                            <option value="">Выберите персонажа</option>
							<?php
$userid=  $_SESSION["user"]["id"];
$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbchar");
if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM characters where account = '$userid'";
if($result = mysqli_query($conn, $sql)){
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){
		$charname = $row["name"];
		    echo "<option value='$row[guid]'>$row[name]</option>";
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
<input type="hidden" name="charname" value="<?php echo $charname;?>"/>
                                                            
                                                    </select>
                        <div class="arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>
                    </div>
</div>                    </div>

                    <div class="lines">
                        <div class="icon flex-cc"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <div class="form-group">
						
<input type="number" id="price" name="price" class="form-control-donate" placeholder="Введите количество монет" aria-required="true" required>

<div class="help-block"></div>
</div>                    </div>
                <button type="submit" name="submit" class="main-btn">Отправить</button>            
				</form>            
				<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
								<div class="messagesuc"><?php if(isset($messagesuc)) { echo $messagesuc; } ?></div>
				
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
	<script src="../assets/js/main.js"></script>
	
</body>

</html>