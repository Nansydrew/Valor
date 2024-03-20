            <div class="user-info">
                <div class="desc">Вы вошли в систему как:</div>
                <div class="name flex-scs"><?= $_SESSION['user']['username'] ?> <a class="exit_button" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Выйти</a></div>
                <div class="balance coins">Бонусов: <span><? echo $bonuses ?> монет</span></div>
                <div class="balance">Голосований: <span><? echo $votes / 2 ?> монет</span></div>
                <div class="balance">Реферал система ID: <span><? echo 23570 + $userid ?></span></div>
            </div>
            <div class="navv flex-cc">
			    <a class="flex-sc <?php echo $infomenu ?>" href="./"><div class="icon flex-cc"><i class="fa fa-user" aria-hidden="true"></i></div>Информация</a>                
                <a class="flex-sc <?php echo $passmenu ?>" href="password.php"><div class="icon flex-cc"><i class="fa fa-key" aria-hidden="true"></i></div>Сменить пароль</a>                
				<a class="flex-sc <?php echo $donate ?>" href="donate.php"><div class="icon flex-cc"><i class="fa fa-plus-circle" aria-hidden="true"></i></div>Пополнить баланс</a>                
				<a class="flex-sc <?php echo $shop ?>" href="shop.php"><div class="icon flex-cc"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>Отправить бонусы</a>  
				<a class="flex-sc <?php echo $shopvote ?>" href="voteshop.php"><div class="icon flex-cc"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>Отправить голоса</a>    				
				<a class="flex-sc <?php echo $vote ?>" href="vote.php"><div class="icon flex-cc"><i class="fa fa-thumbs-up" aria-hidden="true"></i></div>Голосование</a>                
				<a class="flex-sc <?php echo $resetchar ?>" href="resetchar.php"><div class="icon flex-cc"><i class="fa fa-repeat" aria-hidden="true"></i></div>Исправление</a>
				
                <a class="flex-sc <?php echo $promocode ?>" href="promocode.php"><div class="icon flex-cc"><i class="fa fa-tags" aria-hidden="true"></i></div>Промокод</a>            </div>