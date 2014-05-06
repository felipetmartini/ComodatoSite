	<div id="PremiumBox" class="Themebox" style="background-image:url(layout/index_pliki/panel-login.gif); text-align: center; height: 129px; padding-top: 35px;">
	<form action="login.php" method="post">
			Username: <br>
			<input type="text" name="username">
			Password: <br>
			<input type="password" name="password">
			<input type="submit" value="Log in">
			<?php
				Token::create();
			?>
			
			<a href="register.php">Register</a>
	</form>
	</div>