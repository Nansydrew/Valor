                    <!--side nav-->

             <div id="mySidenav" class="sidenav">
  
             <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
             <img src="../assets/img/logo-mini.png"/>  
  
             <a href="../">Home</a>
             <a href="../about">About</a>
             <a href="<?php echo $forum ?>">Forum</a>
             <a href="../files">Files</a>
             <a href="../pvp">PvP Ladder</a>
			 <a href="../partners">Partners</a>
             <a target="_blank" href="<?php echo $discord ?>">Discord</a>
			 <?php
session_start();
if(isset($_SESSION['user']))
{
print "<a href='../cp'>Личный кабинет</a>";
}
else
{
print "             <a href='../cp/login.php'>Log in</a>
             <a href='../cp/register.php'>Register</a>  ";
}
?>
             </div>

          <!--end side nav-->