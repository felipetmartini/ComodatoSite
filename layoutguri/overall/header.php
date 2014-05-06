<html>
<head>
	<title>Tibia OTS</title>

	<meta http-equiv="content-type" content="text/html; charset=windows-1252">
	<meta name="description" content="Tibia is a free massively multiplayer online role-playing game (MMORPG). Join this fascinating game that has thousands of fans from all over the world! - http://www.tibia.com">
	<meta name="author" content="LuisPro">
	<meta http-equiv="content-language" content="en">
	<meta name="keywords" content="free online game, free multiplayer game, free online rpg, free mmorpg, mmorpg, mmog, online role playing game, online multiplayer game, internet game, online rpg, rpg">
	<meta name="google-site-verification" content="DnO3wR8m-XUPrU02NoZt9x3vMB0fjpOXXJshbKucEj8">

	<link rel="shortcut icon" href="layout/index_pliki/favicon.ico" type="image/x-icon">
	<link rel="icon" href="layout/index_pliki/favicon.ico" type="image/x-icon">

	<link href="layout/index_pliki/basic_d.css" rel="stylesheet" type="text/css">
	<link href="layout/index_pliki/news.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="layout/index_pliki/jquery.js"></script>
	<script type="text/javascript" src="layout/index_pliki/jquery-ui.js"></script>
	<script type="text/javascript" src="layout/index_pliki/jquery-ui_002.js"></script>
	<script type="text/javascript" src="layout/index_pliki/ajaxcip.js"></script>
	<script type="text/javascript" src="layout/index_pliki/generic.js"></script>
	<!--<script type="text/javascript">  var loginStatus=0; loginStatus='false';  var activeSubmenuItem='latestnews';  var JS_DIR_IMAGES=0; JS_DIR_IMAGES='http://static.tibia.com/images/';  var JS_DIR_ACCOUNT=0; JS_DIR_ACCOUNT='https://secure.tibia.com/account/';  var g_FormName='';  var g_FormField='';  var g_Deactivated=false;var FB_TryLogin = 0;var FB_ForceReload = 0;</script>-->
	<script type="text/javascript">
  if(top.location != window.location) {
    top.location = self.location;
  }
	</script>
	<script type="text/javascript" src="layout/index_pliki/initialize.js"></script>
</head>

<body onbeforeunload="SaveMenu();" onUnload="SaveMenu();" onLoad="SetFormFocus()">

<a name="top"></a>

<div id="MainHelper1">
	<div id="MainHelper2">
		<div id="ArtworkHelper1">
			<div id="ArtworkHelper2">
            <div id="HeaderArtworkDiv" style="background-image:url(layout/index_pliki/background-artwork.jpg);"></div>
        </div>
      </div>
      <div id="DeactivationContainer" onClick="DisableDeactivationContainer();"></div>

      <div id="Bodycontainer">
      <div id="ContentRow">
          <div id="MenuColumn">
            <div id="LeftArtwork">
              <a href="http://localhost/"><img id="TibiaLogoArtworkTop" src="layout/index_pliki/tibia-logo-artwork-top.gif" alt="logoartwork"></a>
              <!--<img id="LogoLink" src="layout/index_pliki/tibia-logo-artwork-string.gif" onClick="window.location = 'http://www.tibia.com/abouttibia/?subtopic=aboutcipsoft';" alt="logoartwork">-->
            <div id="LogoLink">
			<?php
	$port=7171;
	if($lacze=@fsockopen("localhost",$port,$errno,$errstr,5)){
	fclose($lacze);
		echo "<font color='green'><b>Server Online</b></font>";
	}else{
		echo "<font color='red'><b>Server Offline</b></font>";
	}
?>
</div>
</div>

<div id="Loginbox">
    <!--<div id="LoginTop" style="background-image:url(http://static.tibia.com/images/global/general/box-top.gif)"></div>
    <div id="BorderLeft" class="LoginBorder" style="background-image:url(http://static.tibia.com/images/global/general/chain.gif)"></div>
    <div id="LoginButtonContainer" style="background-image:url(http://static.tibia.com/images/global/loginbox/loginbox-textfield-background.gif)">
    <div id="PlayNowContainer"><form class="MediumButtonForm" action="register.php" method="post"><input name="page" value="overview" type="hidden"><div class="MediumButtonBackground" style="background-image:url(http://static.tibia.com/images/global/buttons/mediumbutton.gif)" onMouseOver="MouseOverMediumButton(this);" onMouseOut="MouseOutMediumButton(this);"><div class="MediumButtonOver" style="background-image: url(&quot;http://static.tibia.com/images/global/buttons/mediumbutton-over.gif&quot;); visibility: hidden;" onMouseOver="MouseOverMediumButton(this);" onMouseOut="MouseOutMediumButton(this);"></div><input class="MediumButtonText" name="Play Now" alt="Play Now" src="layout/index_pliki/mediumbutton_playnow.png" type="image"></div></form></div>
    </div>
    <div class="Loginstatus" style="background-image:url(http://static.tibia.com/images/global/loginbox/loginbox-textfield-background.gif)">
    <div id="LoginstatusText" onClick="LoginstatusTextAction(this);" onMouseOver="MouseOverLoginBoxText(this);" onMouseOut="MouseOutLoginBoxText(this);"><div id="LoginstatusText_1" class="LoginstatusText" style="background-image:url(http://static.tibia.com/images/global/loginbox/loginbox-font-create-account.gif)"></div><div id="LoginstatusText_2" class="LoginstatusText" style="background-image:url(http://static.tibia.com/images/global/loginbox/loginbox-font-create-account-over.gif)"></div></div>
    </div>
    <div id="BorderRight" class="LoginBorder" style="background-image:url(http://static.tibia.com/images/global/general/chain.gif)"></div>
    <div id="LoginBottom" class="Loginstatus" style="background-image:url(http://static.tibia.com/images/global/general/box-bottom.gif)"></div>-->
</div>

<?php include 'layout/leftmenu.php'; ?>

<script type="text/javascript">InitializePage();</script>          </div>
          <div id="ContentColumn">
            <div id="Content" class="Content">
              <div id="ContentHelper">
<script type="text/javascript" src="layout/index_pliki/newsticker.js"></script>

<?php include 'layout/ticker.php'; ?>

<!--<?php include 'layout/article.php'; ?>-->

  <div id="news" class="Box">
    <div class="Corner-tl" style="background-image:url(layout/index_pliki/corner-tl.gif);"></div>
    <div class="Corner-tr" style="background-image:url(layout/index_pliki/corner-tr.gif);"></div>
    <div class="Border_1" style="background-image:url(layout/index_pliki/border-1.gif);"></div>
    <!--<div class="BorderTitleText" style="background-image:url(layout/index_pliki/title-background-green.gif);"></div>
    <img id="ContentBoxHeadline" class="Title" src="layout/index_pliki/headline-news.gif" alt="Contentbox headline">-->
    <div class="Border_2">
      <div class="Border_3">
        <div class="BoxContent" style="background-image:url(layout/index_pliki/scroll.gif);">