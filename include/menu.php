
           <!--navbar top-->

             <div class="nav">  
             
             <div id="left-nav">
             
             <span id="open-nav" onclick="openNav()"><img src="../assets/img/open-nav.png"/></span>

             <img id="logo-mini" src="../assets/img/logo-mini.png"/>
             <a id="item<?php echo $home ?>" href="../">Home</a>
             <a id="item<?php echo $about ?>" href="../about">About</a>
             <a id="item" href="<?php echo $forum ?>">Forum</a>
             <a id="item<?php echo $files ?>" href="../files">Files</a>
             <a id="item<?php echo $pvpstat ?>" href="../pvp">Ladder</a>
<?php
session_start();
if(isset($_SESSION['user']))
{
print "<a id='item$cp'  href='../cp'>Личный кабинет</a>";
}
else
{
print "";
}
?>
             </div>
            

			 
			 
<?php
session_start();
if(isset($_SESSION['user']))
{
print "<div id='right'>
           
             <img src='../assets/img/user-icon.png'/>
             
             <a id='item2' href='../cp'>";
?>
<?= $_SESSION['user']['username'] ?>
<? print "</a><a id='item2' href='../cp/logout.php'>Выйти</a></div>";?>
<?
}
else
{
print "             <div id='right'>
           
             <img src='../assets/img/user-icon.png'/>
             
             <a id='item2' href='../cp/login.php'>Log in</a>
             <span>or</span>
             <a id='item2' href='../cp/register.php'>Register</a>
                
            
             </div>";
}
?>
             </div>
            
            <!--end navbar top-->