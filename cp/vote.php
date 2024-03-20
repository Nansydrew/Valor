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
    <title><?php echo $title ?> - Голосовать</title>
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
<?php $vote = "active"; ?>
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
						<td><img alt="wow.png" src="../assets/img/icons/wow.png"><font color="orange"> Примечание:</font> Раз в день вы можете голосовать за сервер и получать по 1 голосу. </td>
					</tr>
					<tr>
						<td> </td>
					</tr>
					
				</tbody></table>
				</center> 
				<br>
			</div>
<div class="shop_top">	
            </div>
<div class="vote-buttons flex-sbs">



<?php
require_once "../include/config.php";

$connectAuth = new mysqli($lichdbip, $lichdbuser, $lichdbpass, $lichdbauth);
$connectChar = new mysqli($lichdbip, $lichdbuser, $lichdbpass, $lichdbchar);
$connectChar->query("SET NAMES `utf8` COLLATE `utf8_general_ci`");
$connectAuth->query("SET NAMES `utf8` COLLATE `utf8_general_ci`");

if ($connectChar->connect_errno and $connectAuth->connectAuth) {
  echo @$connectChar->connect_error . " " . @$connectAuth->connect_error;
}


$countVote = [0, 1, 10, 50, 100];
$current_day = date('j');

$asnwer = "<a class='blue-button flex-cc' data-id='1' target='_blank' href='$mmotop_link'>
                        <i class='fa fa-thumbs-up' aria-hidden='true'></i><i>$mmotop_name</i><i><img src='../assets/img/vote/mmotop.png' height='56' width='88'></i></a>";


$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }

	
$userid=  $_SESSION["user"]["id"];
$sql = "SELECT * FROM account WHERE id = '$userid'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            foreach($result as $row){
                $bonus = $row["bonus"];
                $vote = $row["vote"];
                
            }
        }
        mysqli_free_result($result);
    } 

	
	
	else{
        echo "Ошибка: " . mysqli_error($conn);
    }
    mysqli_close($conn);
	
	
$sql = "SELECT MAX(`vote_id`) AS 'max_id' FROM `mmotop_vote`";
$res = $connectAuth->query($sql);
if ($res) {
  $data = $res->fetch_assoc();
  $max_id = $data["max_id"] ? $data["max_id"] : 0; 
  if ((@$fileConnect = fopen($file_path_mmotop, 'r')) !== false) {
    while (($parseFile = fgetcsv($fileConnect, 0, "\t")) !== false) { 
      if (count($parseFile) != 5 or $max_id >= $parseFile[0]) {
        continue;
      } else {
        $vote_id = $parseFile[0];
        $vote_date = date('j', strtotime($parseFile[1]));
        $vote_ip = $parseFile[2];
        $vote_name = $parseFile[3];
        $vote_count = $countVote[$parseFile[4]];
        $sql = "SELECT `id` FROM `account` WHERE `username` = '$vote_name'";
        $res = $connectAuth->query($sql);
        if ($res and $data = $res->fetch_assoc()) {
          $vote_acc_id = $data["id"];
        } else { 
          $vote_acc_id = -1;
        }
        $sql = "INSERT INTO `mmotop_vote`(`vote_id`, `vote_date`, `vote_ip`, `vote_name`, `vote_count`, `acc_id`) 
        VALUES($vote_id, $vote_date, '$vote_ip', '$vote_name', $vote_count, $vote_acc_id)";
        $res = $connectAuth->query($sql);
        if (!$res) {
          echo $connectAuth->error;
        }
      }
    } 
    $sql = "SELECT * FROM mmotop_vote WHERE vote_today = 0 AND vote_date = '$current_day'";
    $res = $connectAuth->query($sql);
    if ($res) {
      while ($data = $res->fetch_assoc()) { // Если такие найдены, то начинаем цикл с проверкой
        $current_acc_id = $data["acc_id"];
        $sql_inner = "SELECT * FROM mmotop_vote WHERE vote_today != 0 AND acc_id =  '$current_acc_id' AND vote_date = '$current_day'";
        $res_inner = $connectAuth->query($sql_inner);
        if ($res_inner and $data_inner = $res_inner->fetch_assoc()) { 
          continue; 
        } else {  
          $count_bonus = $data["vote_count"] * $mmotop_vote_count;
          $sql_add_bonus = "UPDATE account SET vote = (vote + '$count_bonus') WHERE id = '$current_acc_id'";
          $res_add_bonus = $connectAuth->query($sql_add_bonus);
         if ($vote_today = 1) { 
            $asnwer = "<a class='blue-button flex-cc' data-id='1' target='_blank' href='$mmotop_link'>
                        <i class='fa fa-thumbs-up' aria-hidden='true'></i><i>MMOTOP</i><i><img src='../assets/img/vote/mmotop.png' height='56' width='88'></i></a>";
          }
          $sql_add_vote = "UPDATE mmotop_vote SET vote_today = 1 WHERE acc_id = '$current_acc_id'";
          $res_add_vote = $connectAuth->query($sql_add_vote);
        }
      }
      
    } 	
	
	
	$conn = mysqli_connect("$lichdbip", "$lichdbuser", "$lichdbpass", "$lichdbauth");
    if (!$conn) {
      die("Ошибка: " . mysqli_connect_error());
    }

$current_day = date('j');	
$userid=  $_SESSION["user"]["id"];
$sqll = "SELECT * FROM mmotop_vote WHERE vote_today = 1 AND vote_date = '$current_day' AND acc_id = '$userid'";
$res = $connectAuth->query($sqll);

 
    $res = $connectAuth->query($sqll);
    if ($res) {
      while ($data = $res->fetch_assoc()) { 
        $sql_innerr = "SELECT * FROM `mmotop_vote` WHERE `vote_today` != 1 AND `acc_id` =  $userid AND `vote_date` = $current_day";
        $res_inner = $connectAuth->query($sql_innerr);
        if ($res_inner and $data_inner = $res_inner->fetch_assoc()) { 
          continue; 
        } else {  
          if ($vote_today = 1) { 
            $asnwer = "<a class='blue-button flex-cc disabled' data-id='1' target='_blank'>
                        <i class='fa fa-thumbs-up' aria-hidden='true'></i><i>MMOTOP</i><i><img src='../assets/img/vote/mmotop.png' height='56' width='88'></i></a>";
          }
        }
      }
      
    }else {
      echo $connectAuth->error;
    }
  } else {
    echo "Файл со статистикой голосов не найден MMOTOP";
  }
} else {
  echo $connectAuth->error;
}
?>



<? echo $asnwer; ?>



                                    

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