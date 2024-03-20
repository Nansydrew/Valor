	            <div class="forum">
                    
                        <div class="body1"></div>
                    <div class="body2">
                    <p class="p5">Latest threads from the forum</p>    
                    <img class="line-title" src="assets/img/line-title.png">


	
      
<div class='topic'>
                <a href='<?php echo $forum ?>index.php?/topic/<?php echo"$row[tid]"; ?>-<?php echo"$row[title]"; ?>/' class='topic-link'><img id='title-icon' src='assets/img/title-icon.png'/><?php echo"$row[title]"; ?></a>
                <span>					<?php $timestamp = $row['start_date'];
echo(date("d.m.Y", $timestamp));?></span>           
                    </div>

			
					

        
                                            
                    <div><a  class="forum-link" href="<?php echo $forum ?>">Go to forum</a></div>
        
                    </div>
          
                </div>   