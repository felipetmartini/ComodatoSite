<div id="PremiumBox" class="Themebox" style="background-image:url(layout/index_pliki/panel-highscores.gif); text-align: center; height: 129px; padding-top: 35px;">
<!--<font size="4"><b>Highscores</b></font>-->
	<form action="highscores.php" method="post">
		Choose a category<br>
		<select name="selected">
		<option value="7">Experience</option>
		<option value="8">Magic</option>
		<option value="5">Shielding</option>
		<option value="4">Distance</option>
		<option value="2">Sword</option>
		<option value="1">Club</option>
		<option value="3">Axe</option>
		<option value="0">Fist</option>
		<option value="6">Fishing</option>
		</select> 
			<?php Token::create(); ?>
		<br>
		<input type="submit" value="Submit">
	</form>
</div>