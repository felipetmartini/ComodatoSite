<?php
// Fetch and sanitize POST and GET values
function getValue($value) {
	return (!empty($value)) ? sanitize($value) : false;
}

function SendGet($getArray, $location = 'error.php') {
	$string = "";
	$count = 0;
	foreach ($getArray as $getKey => $getValue) {
		if ($count > 0) $string .= '&';
		$string .= "{$getKey}={$getValue}";
	}
	header("Location: {$location}?{$string}");
	exit();
}

// Sweet error reporting
function data_dump($print = false, $var = false, $title = false) {
	if ($title !== false) echo "<pre><font color='red' size='5'>$title</font><br>";
	else echo '<pre>';
	if ($print !== false) {
		echo 'Print: - ';
		print_r($print);
		echo "<br>";
	}
	if ($var !== false) {
		echo 'Var_dump: - ';
		var_dump($var);
	}
	echo '</pre><br>';
}

function accountAccess($accountId, $TFS) {
	$accountId = (int)$accountId;
	$access = 0;

	// TFS 0.3/4
	$yourChars = mysql_select_multi("SELECT `name`, `group_id`, `account_id` FROM `players` WHERE `account_id`='$accountId';");
	if ($yourChars !== false) {
		foreach ($yourChars as $char) {
			if ($TFS === 'TFS_03') {
				if ($char['group_id'] > $access) $access = $char['group_id'];
			} else {
				if ($char['group_id'] > 1) {
					if ($access == 0) {
						$acc = mysql_select_single("SELECT `type` FROM `accounts` WHERE `id`='". $char['account_id'] ."' LIMIT 1;");
						$access = $acc['type'];
					}
				}
			}
		}
		if ($access == 0) $access++;
		return $access;
	} else return false;
	//
}
// Generate recovery key
function generate_recovery_key($lenght) {
	$lenght = (int)$lenght;
	$tmp = rand(1000, 9000);
	$tmp += time();
	$tmp = sha1($tmp);
	
	$results = '';
	for ($i = 0; $i < $lenght; $i++) $results = $results.''.$tmp[$i];
	
	return $results;
}

// Calculate discount
function calculate_discount($orig, $new) {
	$orig = (int)$orig;
	$new = (int)$new;
	
	$tmp = '';
	if ($new >= $orig) {
		if ($new != $orig) {
			$calc = ($new/$orig) - 1;
			$calc *= 100;
			$tmp = '+'. $calc .'%';
		} else $tmp = '0%';
	} else {
		$calc = 1 - ($new/$orig);
		$calc *= 100;
		$tmp = '-'. $calc .'%';
	}
	return $tmp;
}

// Proper URLs
function url($path = false) {
	$protocol = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://';
	$domain   = $_SERVER['SERVER_NAME'] . ($_SERVER['SERVER_PORT'] != 80 ? ':' . $_SERVER['SERVER_PORT'] : null);
	$folder   = dirname($_SERVER['SCRIPT_NAME']);

	return $protocol . $domain . ($folder == '/' ? '' : $folder) . '/' . $path;
}

function getCache() {
	$results = mysql_select_single("SELECT `cached` FROM `znote`;");
	return ($results !== false) ? $results['cached'] : false;
}

function setCache($time) {
	$time = (int)$time;
	mysql_update("UPDATE `znote` set `cached`='$time'");
}

// Get visitor basic data
function znote_visitors_get_data() {
	return mysql_select_multi("SELECT `ip`, `value` FROM `znote_visitors`");
}

// Set visitor basic data
function znote_visitor_set_data($visitor_data) {
	$exist = false;
	$ip = ip2long(getIP());
	
	foreach ((array)$visitor_data as $row) {
		if ($ip == $row['ip']) {
			$exist = true;
			$value = $row['value'];
		}
	}
	
	if ($exist && isset($value)) {
		// Update the value
		$value++;
		mysql_update("UPDATE `znote_visitors` SET `value` = '$value' WHERE `ip` = '$ip'");
	} else {
		// Insert new row
		mysql_insert("INSERT INTO `znote_visitors` (`ip`, `value`) VALUES ('$ip', '1')");
	}
}

// Get visitor basic data
function znote_visitors_get_detailed_data($cache_time) {
	$period = (int)time() - (int)$cache_time;
	return mysql_select_multi("SELECT `ip`, `time`, `type`, `account_id` FROM `znote_visitors_details` WHERE `time` >= '$period' LIMIT 0, 50");
}

function znote_visitor_insert_detailed_data($type) {
	$type = (int)$type;
	/*
	type 0 = normal visits
	type 1 = register form
	type 2 = character creation
	type 3 = fetch highscores
	type 4 = search character
	*/
	$time = time();
	$ip = ip2long(getIP());
	if (user_logged_in()) {
		$acc = $_SESSION['user_id'];
		mysql_insert("INSERT INTO `znote_visitors_details` (`ip`, `time`, `type`, `account_id`) VALUES ('$ip', '$time', '$type', '$acc')");
	} else mysql_insert("INSERT INTO `znote_visitors_details` (`ip`, `time`, `type`, `account_id`) VALUES ('$ip', '$time', '$type', '0')");
}

function something () {
	// Make acc data compatible:
	$ip = ip2long(getIP());
}

// Secret token
function create_token() {
	echo 'Checking whether to create token or not<br />';
	#if (empty($_SESSION['token'])) {
		echo 'Creating token<br />';
		$token = sha1(uniqid(time(), true));
		$token2 = $token;
		var_dump($token, $token2);
		$_SESSION['token'] = $token2;
	#}
	
	echo "<input type=\"hidden\" name=\"token\" value=\"". $_SESSION['token'] ."\" />";
}
function reset_token() {
	echo 'Reseting token<br />';
	unset($_SESSION['token']);
}

// Time based functions
// 60 seconds to 1 minute
function second_to_minute($seconds) {
	return ($seconds / 60);
}

// 1 minute to 60 seconds
function minute_to_seconds($minutes) {
	return ($minutes * 60);
}

// 60 minutes to 1 hour
function minute_to_hour($minutes) {
	return ($minutes / 60);
}

// 1 hour to 60 minutes
function hour_to_minute($hours) {
	return ($hour * 60);
}

// seconds / 60 / 60 = hours.
function seconds_to_hours($seconds) {
	$minutes = second_to_minute($seconds);
	$hours = minute_to_hour($minutes);
	return $hours;
}

function remaining_seconds_to_clock($seconds) {
	return date("(H:i)",time() + $seconds);
}

// Returns false if name contains more than configured max words, returns name otherwise.
function validate_name($string) {
	//edit: make sure only one space separates words: 
	//(found this regex through a search and havent tested it)
	$string  = preg_replace("/\\s+/", " ", $string);

	//trim off beginning and end spaces;
	$string = trim($string);

	//get an array of the words
	$wordArray = explode(" ", $string);

	//get the word count
	$wordCount = sizeof($wordArray);

	//see if its too big
	if($wordCount > config('maxW')) {
		return false;
	} else {
		return $string;
	}
}

// Checks if an IPv4(or localhost IPv6) address is valid
function validate_ip($ip) {
	$ipL = ip2long($ip);
	$ipR = long2ip($ipL);
	
	if ($ip === $ipR) {
		return true;
	} elseif ($ip=='::1')  {
		return true;
	} else {
		return false;
	}
}

// Fetch a config value. Etc config('vocations') will return vocation array from config.php.
function config($value) {
	global $config;
	return $config[$value];
}

// Some functions uses several configurations from config.php, so it sounds
// smarter to give them the whole array instead of calling the function all the time.
function fullConfig() {
	global $config;
	return $config;
}

// Capitalize Every Word In String.
function format_character_name($name) {
	return ucwords(strtolower($name));
}

// Returns a list of players online
function online_list() {
    if (config('TFSVersion') == 'TFS_10') return mysql_select_multi("SELECT `o`.`player_id` AS `id`, `p`.`looktype` as `looktype`, `p`.`lookaddons` as `lookaddons`, `p`.`lookhead` as `lookhead`, `p`.`lookbody` as `lookbody`, `p`.`looklegs` as `looklegs`, `p`.`lookfeet` as `lookfeet`, `p`.`name` as `name`, `p`.`level` as `level`, `p`.`vocation` as `vocation`, `g`.`name` as `gname` FROM `players_online` as `o` INNER JOIN `players` as `p` ON o.player_id = p.id LEFT JOIN `guild_membership` gm ON `o`.`player_id` = `gm`.`player_id` LEFT JOIN `guilds` g ON `gm`.`guild_id` = `g`.`id`");
    else return mysql_select_multi("SELECT `name`, `level`, `vocation`, `looktype`, `lookaddons`, `lookhead`, `lookbody`, `looklegs`, `lookfeet` FROM `players` WHERE `online`='1' ORDER BY `name` DESC;");
}

// Gets you the actual IP address even from users behind ISP proxies and so on.
function getIP() {
	/*
  $IP = '';
  if (getenv('HTTP_CLIENT_IP')) {
    $IP =getenv('HTTP_CLIENT_IP');
  } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
    $IP =getenv('HTTP_X_FORWARDED_FOR');
  } elseif (getenv('HTTP_X_FORWARDED')) {
    $IP =getenv('HTTP_X_FORWARDED');
  } elseif (getenv('HTTP_FORWARDED_FOR')) {
    $IP =getenv('HTTP_FORWARDED_FOR');
  } elseif (getenv('HTTP_FORWARDED')) {
    $IP = getenv('HTTP_FORWARDED');
  } else {
    $IP = $_SERVER['REMOTE_ADDR'];
  } */
return $_SERVER['REMOTE_ADDR'];
}

// Deprecated, just use count($array) instead.
function array_length($ar) {
	$r = 1;
	foreach($ar as $a) {
		$r++;
	}
	return $r;
}
// Parameter: level, returns experience for that level from an experience table.
function level_to_experience($level) {
	return 50/3*(pow($level, 3) - 6*pow($level, 2) + 17*$level - 12);
}

// Parameter: players.hide_char returns: Status word inside a font with class identifier so it can be designed later on by CSS.
function hide_char_to_name($id) {
	$id = (int)$id;
	if ($id == 1) {
		return 'hidden';
	} else {
		return 'visible';
	}
}

// Parameter: players.online returns: Status word inside a font with class identifier so it can be designed later on by CSS.
function online_id_to_name($id) {
	$id = (int)$id;
	if ($id == 1) {
		return '<font class="status_online">ONLINE</font>';
	} else {
		return '<font class="status_offline">offline</font>';
	}
}

// Parameter: players.vocation_id. Returns: Configured vocation name.
function vocation_id_to_name($id) {
	$vocations = config('vocations');
	return ($vocations[$id] >= 0) ? $vocations[$id] : false;
}

function gender_exist($gender) {
	// Range of allowed gender ids, fromid toid
	if ($gender >= 0 && $gender <= 1) {
		return true;
	} else {
		return false;
	}
}

function skillid_to_name($skillid) {
	$skillname = array(
		0 => 'fist fighting',
		1 => 'club fighting',
		2 => 'sword fighting',
		3 => 'axe fighting',
		4 => 'distance fighting',
		5 => 'shielding',
		6 => 'fishing',
		7 => 'experience', // Hardcoded, does not actually exist in database as a skillid.
		8 => 'magic level' // Hardcoded, does not actually exist in database as a skillid.
	);

	return ($skillname[$skillid] >= 0) ? $skillname[$skillid] : false;
}

// Parameter: players.town_id. Returns: Configured town name.
function town_id_to_name($id) {
	$towns = config('towns');
	return (array_key_exists($id, $towns)) ? $towns[$id] : 'Missing Town';
}

// Unless you have an internal mail server then mail sending will not be supported in this version.
function email($to, $subject, $body) {
	mail($to, $subject, $body, 'From: TEST');
}

function logged_in_redirect() {
	if (user_logged_in() === true) {
		header('Location: myaccount.php');
	}
}

function protect_page() {
	if (user_logged_in() === false) {
		header('Location: protected.php');
		exit();
	}
}

// When function is called, you will be redirected to protect_page and deny access to rest of page, as long as you are not admin.
function admin_only($user_data) {	
	// Chris way
	$gotAccess = is_admin($user_data);
	
	if ($gotAccess == false) {
		logged_in_redirect();
		exit();
	}
}

// When function is called, you will be redirected to protect_page and deny access to rest of page, as long as you are not admin.
function mask_only($user_data) {	
	// Chris way
	$gotAccess = is_mask($user_data);
	
	if ($gotAccess == false) {
		logged_in_redirect();
		exit();
	}
}

function is_admin($user_data) {
	return in_array($user_data['name'], config('page_admin_access')) ? true : false;
}

function is_mask($user_data) {
	return in_array($user_data['name'], config('page_mask_access')) ? true : false;
}

function array_sanitize(&$item) {
	$item = htmlentities(strip_tags(mysql_znote_escape_string($item)));
}

function sanitize($data) {
	return htmlentities(strip_tags(mysql_znote_escape_string($data)));
}

function output_errors($errors) {
	return '<ul><li>'. implode('</li><li>', $errors) .'</li></ul>';
}

function build_spells($xml, $display_groups) {
    $t_count = 0;
    $rune = array();
    $string = '<?php'."\n".'#Generated spells file from admin panel'."\n".'#Edit at your own risk!';
    $string .= "\n".'$show_spells_groups = '.($display_groups ? 'true' : 'false').';'."\n".'$spells = array(';
    foreach($xml as $key => $value)
    {        
        if($value['lvl'])
        {
            if($key == 'rune')
            {
                if($display_groups)
                {
                    if($value['group'] == NULL)
                    {
                        echo '<span style="color:orange;font-weight:bold">WARNING: Group not found at spell "'.$value['name'].'", set to "Attack".</span><br>';
                    }
                    $rune[(string)$value['name']] = ($value['group'] == NULL) ? 'Attack' : $value['group'];
                }
                continue;
            }

            $t_count++;
            $string .= "\n\t".'array(';
            
            if($display_groups)
            {
                $string .= "\n\t\t".'"group" => ';
                {
                    if($value['conjureId'] !== NULL)
                    {
                        $string .= '\''.ucfirst($rune[(string)$value['name']]).'\'';
                    }
                    else
                    {
                        if($value['group'] == NULL)
                        {
                            echo '<span style="color:orange;font-weight:bold">WARNING: Group not found at spell "'.$value['name'].'", set to "Attack".</span><br>';
                        }
                        $string .= '\''.ucfirst(($value['group'] == NULL) ? 'Attack' : $value['group']).'\'';
                    }
                }
                $string .= ',';
            }

            $string .= "\n\t\t".'"type" => ';
            if(config('TFSVersion') == 'TFS_02')
            {
                $string .= (($value['function'] == 'conjure') ? '\'Rune\'' : '\'Instant\'');
            }
            if(config('TFSVersion') == 'TFS_10')
            {
                $string .= (($value['conjureId'] == NULL) ? '\'Instant\'' : '\'Rune\'');
            }
            $string .= ',';
            $string .= "\n\t\t".'"name" => "'.$value['name'].'",';
            $string .= "\n\t\t".'"words" => \''.$value['words'].'\',';
            $string .= "\n\t\t".'"level" => '.$value['lvl'].',';
            $string .= "\n\t\t".'"mana" => ';
            $string .= (($value['mana'] == NULL) or ($value['mana'] == '')) ? '\'Var.\'' : $value['mana'];
            $string .= ',';
            $string .= "\n\t\t".'"premium" => ';
            if($value['prem'])
            {
                $string .= ($value['prem'] == 1) ? '\'yes\'' : '\'no\'';
            }
            else
            {
                $string .= '\'no\'';
            }
            $string .= ',';
            $vocs = array();
            $string .= "\n\t\t".'"vocation" => array(';
            foreach($value->vocation as $vocation)
            {
                if(config('TFSVersion') == 'TFS_02')
                {
                    $vocs[] = '\''.$vocation[0]['name'].'\'';
                }
                elseif(config('TFSVersion') == 'TFS_03')
                {
                    if(strpos($vocation[0]['id'], ';') !== FALSE)
                    {
                        $array = explode(';', $vocation[0]['id']);
                        foreach($array as $voc)
                        {
                            $vocs[] = '\''.vocation_id_to_name($voc).'\'';
                        }
                    }
                    else
                    {
                        $vocs[] = '\''.vocation_id_to_name((int)$vocation[0]['id']).'\'';
                    }
                }
            }
            if(count($vocs) < 1) foreach(config('vocations') as $id => $name) if($id > 0) $vocs[] = '\''.$name.'\'';
            $string .= implode(', ',$vocs).')'."\n\t".'),';
        } 
    }    
    $string .= "\n".'); ?>';
    echo('Loaded '. $t_count .' spells!<br>');
    echo 'File "spell.php" '.(file_exists('spell.php') ? 'updated' : 'created').'!<br>';
    $file = fopen('spell.php', 'w');
    fwrite($file, $string);
    fclose($file);
}

?>