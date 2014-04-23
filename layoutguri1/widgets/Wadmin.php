	<div id="PremiumBox" class="Themebox" style="background-image:url(layout/index_pliki/panel-admin.gif); text-align: center; height: 129px; padding-top: 35px;">
	<!--<font size="4"><b>Administration</b></font><br>-->
		<a href='admin.php'>Admin Page</a><br>
		<a href='admin_news.php'>Admin News</a><br>
		<a href='admin_gallery.php'>Admin Gallery</a><br>
		<a href='admin_skills.php'>Admin Skills</a><br>
			<?php
			$new = 0;
			$cat = 4; //Category ID for feedback section
			$threads = mysql_select_multi("SELECT `id`, `player_id` FROM `znote_forum_threads` WHERE `forum_id`='$cat' AND `closed`='0';");
			if ($threads !== false) {
				$staffs = mysql_select_multi("SELECT `id` FROM `players` WHERE `group_id` > '1';");
				
				foreach($threads as $thread) {
					$response = false;
					$posts = mysql_select_multi("SELECT `id`, `player_id` FROM `znote_forum_posts` WHERE `thread_id`='". $thread['id'] ."';");
					if ($posts !== false) {
						foreach($posts as $post) {
							foreach ($staffs as $staff) {
								if ($post['player_id'] == $staff['id']) $response = true;
							}
						}
					}

					if (!$response) $new++;
				}
			}
			?>
		<a href='forum.php?cat=4'>Feedback: [<?php echo $new; ?>]</a>
	</div>