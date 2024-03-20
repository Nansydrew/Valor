	            <div class="forum">
                    
                        <div class="body1"></div>
                    <div class="body2">
                    <p class="p5">Последние темы с форума</p>    
                    <img class="line-title" src="assets/img/line-title.png">

<?php
$conn = mysqli_connect("$forumdbip", "$forumdbuser", "$forumdbpass", "$forumdb");

if (!$conn) {
  die("Ошибка: " . mysqli_connect_error());
}
$sql = "SELECT * FROM forums_topics ORDER BY tid DESC LIMIT 10";


if($result = mysqli_query($conn, $sql)){
     
    $rowsCount = mysqli_num_rows($result);
    foreach($result as $row){


		 
		    echo "";
?>
	
      
<div class='topic'>
                <a href='<?php echo $forum ?>index.php?/topic/<?php echo"$row[tid]"; ?>-<?php echo"$row[title]"; ?>/' class='topic-link'><img id='title-icon' src='assets/img/title-icon.png'/><?php echo"$row[title]"; ?></a>
                <span>					<?php $timestamp = $row['start_date'];
echo(date("d.m.Y", $timestamp));?></span>           
                    </div>

	
<?php
    }
    mysqli_free_result($result);
} else{
    echo "Ошибка: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
					
					

        
                                            
                    <div><a  class="forum-link" href="<?php echo $forum ?>">Перейти на форум</a></div>
        
                    </div>
          
                </div>   