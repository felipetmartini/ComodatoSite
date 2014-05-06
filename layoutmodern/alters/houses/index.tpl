<html> <head>   <title>{$title}</title> <link rel="shortcut icon" href="{$path}/templates/tibia/images/global/general/favicon.ico" type="image/x-icon">   <link rel="icon" href="{$path}/templates/tibia/images/global/general/favicon.ico" type="image/x-icon">    <link href="{$path}/templates/tibia/styles/basic.css" rel="stylesheet" type="text/css">       <link href="{$path}/templates/tibia/styles/news.css" rel="stylesheet" type="text/css">          <script type="text/javascript" src="{$path}/templates/tibia/javascripts/generic.js"></script>    <script type='text/javascript'>  var loginStatus=0; loginStatus='false';  var activeSubmenuItem='latestnews';  var IMAGES=0; IMAGES='{$path}/templates/tibia/images';  var LINK_ACCOUNT=0; LINK_ACCOUNT='{$path}/index.php/account';  var g_FormName='';  var g_FormField='';  var g_Deactivated=false;</script><SCRIPT TYPE="text/javascript">
<!-- // Framekiller
setTimeout ("changePage()", 6000);
function changePage()
{
  if (parent.frames.length > 2) {
    if (browserTyp == "ie") {
      parent.location=document.location;
    } else {
      self.top.location=document.location;
    }
  }
}
// -->
</SCRIPT>

  <script type="text/javascript" src="{$path}/templates/tibia/javascripts/initialize.js"></script> {$head} </head>  <body onBeforeUnLoad="SaveMenu();" onUnload="SaveMenu();" onLoad="SetFormFocus()">    <a name="top" ></a>    <div id="ArtworkHelper" style="background-image:url({$path}/templates/tibia/images/global/header/background-artwork.jpg);">   <div id="DeactivationContainer" ></div>         <div id="Bodycontainer" >         <div id="ContentRow">         <div id="MenuColumn">           
<div id="LeftArtwork">             
             <a href="{$path}" ><img id="TibiaLogoArtworkTop" src="{$path}/templates/tibia/images/global/header/tibia-logo-artwork-top.gif" alt="logoartwork" /></a>
                         
           </div>
{if $logged == 1}
<div id="Loginbox">
    <div id="LoginTop" style="background-image:url({$path}/templates/tibia/images/global/general/box-top.gif)"></div>
    <div id="BorderLeft" class="LoginBorder" style="background-image:url({$path}/templates/tibia/images/global/general/chain.gif)"></div>

    <div class="Loginstatus" style="background-image:url({$path}/templates/tibia/images/global/loginbox/loginbox-textfield-background.gif)">
      <div id="LoginstatusText_12" class="LoginstatusText" style="background-image: url({$path}/templates/tibia/images/global/loginbox/loginbox-font-welcome.gif); "></div>
    </div>

    <div id="LoginButtonContainer" style="background-image:url({$path}/templates/tibia/images/global/loginbox/loginbox-textfield-background.gif)">
      <div id="LoginButton" style="background-image:url({$path}/templates/tibia/images/global/buttons/sbutton.gif)">
        <a href="{$path}/index.php/account"><div onclick="LoginButtonAction();" onmouseover="MouseOverBigButton(this);" onmouseout="MouseOutBigButton(this);"><div class="Button" style="background-image: url({$path}/templates/tibia/images/global/buttons/sbutton_over.gif); visibility: hidden; "></div>
          <div id="ButtonText2" style="background-image: url({$path}/templates/tibia/images/global/buttons/_sbutton_myaccount.gif); "></div>
        </div></a>
      </div>
    </div>

    <div style="clear:both"></div>

    <div class="Loginstatus" style="background-image:url({$path}/templates/tibia/images/global/loginbox/loginbox-textfield-background.gif)">
      <div id="LoginstatusText_2" onclick="LoginstatusTextAction(this);" onmouseover="MouseOverLoginBoxText(this);" onmouseout="MouseOutLoginBoxText(this);" style="background-image: url({$path}/templates/tibia/images/global/loginbox/loginbox-font-logout.gif); "><div id="LoginstatusText_2_1" class="LoginstatusText" style="background-image: url({$path}/templates/tibia/images/global/loginbox/loginbox-font-logout.gif); visibility: visible; "></div><div id="LoginstatusText_2_2" class="LoginstatusText" style="background-image: url({$path}/templates/tibia/images/global/loginbox/loginbox-font-logout-over.gif); visibility: hidden; "></div></div>
    </div>

    <div id="BorderRight" class="LoginBorder" style="background-image:url({$path}/templates/tibia/images/global/general/chain.gif)"></div>
    <div id="LoginBottom" class="Loginstatus" style="background-image:url({$path}/templates/tibia/images/global/general/box-bottom.gif)"></div>
  </div>
{else}
            <div id="Loginbox" >     <div id="LoginTop" style="background-image:url({$path}/templates/tibia/images/global/general/box-top.gif)" ></div>     <div id="BorderLeft" class="LoginBorder" style="background-image:url({$path}/templates/tibia/images/global/general/chain.gif)" ></div>
      <div class="Loginstatus" style="background-image:url({$path}/templates/tibia/images/global/loginbox/loginbox-textfield-background.gif)" >       <div id="LoginstatusText_1" class="LoginstatusText" style="background-image:url({$path}/templates/tibia/images/global/loginbox/loginbox-font-you-are-not-logged-in.gif)" ></div>     </div>      <div id="LoginButtonContainer" style="background-image:url({$path}/templates/tibia/images/global/loginbox/loginbox-textfield-background.gif)" >       <div id="LoginButton" style="background-image:url({$path}/templates/tibia/images/global/buttons/sbutton.gif)" >         <a href="{$path}/index.php/account" ><div onClick="LoginButtonAction();" onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);"><div class="Button" style="background-image:url({$path}/templates/tibia/images/global/buttons/sbutton_over.gif)" ></div>           <div id="ButtonText" style="background-image:url({$path}/templates/tibia/images/global/buttons/_sbutton_login.gif)" ></div>         </div></a>       </div>     </div>      <div style="clear:both" ></div>      <div class="Loginstatus" style="background-image:url({$path}/templates/tibia/images/global/loginbox/loginbox-textfield-background.gif)" >       <div id="LoginstatusText_2" onClick="LoginstatusTextAction(this);" onMouseOver="MouseOverLoginBoxText(this);" onMouseOut="MouseOutLoginBoxText(this);" ><div id="LoginstatusText_2_1" class="LoginstatusText" style="background-image:url({$path}/templates/tibia/images/global/loginbox/loginbox-font-create-account.gif)" ></div><div id="LoginstatusText_2_2" class="LoginstatusText" style="background-image:url({$path}/templates/tibia/images/global/loginbox/loginbox-font-create-account-over.gif)" ></div></div>     </div>      <div id="BorderRight" class="LoginBorder" style="background-image:url({$path}/templates/tibia/images/global/general/chain.gif)" ></div>     <div id="LoginBottom" class="Loginstatus" style="background-image:url({$path}/templates/tibia/images/global/general/box-bottom.gif)" ></div>   </div> 
{/if}

<div id='Menu'>
<div id='MenuTop' style='background-image:url({$path}/templates/tibia/images/global/general/box-top.gif);'></div>
<div id='news' class='menuitem'>
<span onClick="MenuItemAction('news')">
  <div class='MenuButton' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background-over.gif);'></div>
      <span id='news_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
      </span>
      <div id='news_Icon' class='Icon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-news.gif);'></div>
      <div id='news_Label' class='Label' style='background-image:url({$path}/templates/tibia/images/global/menu/label-news.gif);'></div>
      <div id='news_Extend' class='Extend' style='background-image:url({$path}/templates/tibia/images/global/general/plus.gif);'></div>
    </div>
  </div>
</span>
<div id='news_Submenu' class='Submenu'>
<a href='{$path}/index.php/'>
  <div id='submenu_latestnews' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_latestnews' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_latestnews' class='SubmenuitemLabel'>Latest News</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='{$path}/index.php/home/archive'>
  <div id='submenu_newsarchive' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_newsarchive' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_newsarchive' class='SubmenuitemLabel'>News Archive</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>
<div id='account' class='menuitem'>
<span onClick="MenuItemAction('account')">
  <div class='MenuButton' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background-over.gif);'></div>
      <span id='account_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
      </span>
      <div id='account_Icon' class='Icon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-account.gif);'></div>
      <div id='account_Label' class='Label' style='background-image:url({$path}/templates/tibia/images/global/menu/label-account.gif);'></div>
      <div id='account_Extend' class='Extend' style='background-image:url({$path}/templates/tibia/images/global/general/plus.gif);'></div>
    </div>
  </div>
</span>
<div id='account_Submenu' class='Submenu'>
<a href='{$path}/index.php/account'>
  <div id='submenu_accountmanagement' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_accountmanagement' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_accountmanagement' class='SubmenuitemLabel'>Account Management</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='{$path}/index.php/account/create'>
  <div id='submenu_createaccountanddownload' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_createaccountanddownload' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_createaccountanddownload' class='SubmenuitemLabel'>Create Account</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='{$path}/index.php/p/v/downloads'>
  <div id='submenu_downloadclient' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_downloadclient' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_downloadclient' class='SubmenuitemLabel'>Download Client</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='{$path}/index.php/account/lost'>
  <div id='submenu_lostaccount' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_lostaccount' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_lostaccount' class='SubmenuitemLabel'>Lost Account?</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>
<div id='community' class='menuitem'>
<span onClick="MenuItemAction('community')">
  <div class='MenuButton' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background-over.gif);'></div>
      <span id='community_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
      </span>
      <div id='community_Icon' class='Icon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-community.gif);'></div>
      <div id='community_Label' class='Label' style='background-image:url({$path}/templates/tibia/images/global/menu/label-community.gif);'></div>
      <div id='community_Extend' class='Extend' style='background-image:url({$path}/templates/tibia/images/global/general/plus.gif);'></div>
    </div>
  </div>
</span>
<div id='community_Submenu' class='Submenu'>
<a href='{$path}/index.php/character/view'>
  <div id='submenu_characters' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_characters' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_characters' class='SubmenuitemLabel'>Characters</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='{$path}/index.php/highscores'>
  <div id='submenu_highscores' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_highscores' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_highscores' class='SubmenuitemLabel'>Highscores</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='{$path}/index.php/p/v/deaths'>
  <div id='submenu_killstatistics' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_killstatistics' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_killstatistics' class='SubmenuitemLabel'>Kill Statistics</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='{$path}/index.php/houses/main'>
  <div id='submenu_houses' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_houses' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_houses' class='SubmenuitemLabel'>Houses</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='{$path}/index.php/guilds'>
  <div id='submenu_guilds' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_guilds' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_guilds' class='SubmenuitemLabel'>Guilds</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>


<div id='forum' class='menuitem'>
<span onClick="MenuItemAction('forum')">
  <div class='MenuButton' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background-over.gif);'></div>
      <span id='forum_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
      </span>
      <div id='forum_Icon' class='Icon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-forum.gif);'></div>
      <div id='forum_Label' class='Label' style='background-image:url({$path}/templates/tibia/images/global/menu/label-forum.gif);'></div>
      <div id='forum_Extend' class='Extend' style='background-image:url({$path}/templates/tibia/images/global/general/plus.gif);'></div>
    </div>
  </div>
</span>
<div id='forum_Submenu' class='Submenu'>
<a href='{$path}/index.php/forum'>
  <div id='submenu_worldboards' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_worldboards' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_worldboards' class='SubmenuitemLabel'>Forum</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>
<div id='library' class='menuitem'>
<span onClick="MenuItemAction('library')">
  <div class='MenuButton' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background-over.gif);'></div>
      <span id='library_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
      </span>
      <div id='library_Icon' class='Icon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-library.gif);'></div>
      <div id='library_Label' class='Label' style='background-image:url({$path}/templates/tibia/images/global/menu/label-library.gif);'></div>
      <div id='library_Extend' class='Extend' style='background-image:url({$path}/templates/tibia/images/global/general/plus.gif);'></div>
    </div>
  </div>
</span>
<div id='library_Submenu' class='Submenu'>
<a href='{$path}/index.php/p/v/deaths'>
  <div id='submenu_creatures' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_creatures' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_creatures' class='SubmenuitemLabel'>Latest Deaths</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='{$path}index.php/p/v/fragers'>
  <div id='submenu_spells' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_spells' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_spells' class='SubmenuitemLabel'>Top Fragers</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='{$path}index.php/p/v/gallery'>
  <div id='submenu_achievements' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_achievements' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_achievements' class='SubmenuitemLabel'>Gallery</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='{$path}/index.php/video/main'>
  <div id='submenu_worldquests' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_worldquests' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_worldquests' class='SubmenuitemLabel'>Video Gallery</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
<a href='/index.php/p/v/minimap'>
  <div id='submenu_maps' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_maps' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_maps' class='SubmenuitemLabel'>Maps</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>
<div id='shops' class='menuitem'>
<span onClick="MenuItemAction('shops')">
  <div class='MenuButton' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background.gif);'>
    <div onMouseOver='MouseOverMenuItem(this);' onMouseOut='MouseOutMenuItem(this);'><div class='Button' style='background-image:url({$path}/templates/tibia/images/global/menu/button-background-over.gif);'></div>
      <span id='shops_Lights' class='Lights'>
        <div class='light_lu' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ld' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
        <div class='light_ru' style='background-image:url({$path}/templates/tibia/images/global/menu/green-light.gif);'></div>
      </span>
      <div id='shops_Icon' class='Icon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-shops.gif);'></div>
      <div id='shops_Label' class='Label' style='background-image:url({$path}/templates/tibia/images/global/menu/label-shops.gif);'></div>
      <div id='shops_Extend' class='Extend' style='background-image:url({$path}/templates/tibia/images/global/general/plus.gif);'></div>
    </div>
  </div>
</span>
<div id='shops_Submenu' class='Submenu'>
<a href='{$path}/index.php/donate'>
  <div id='submenu_cafepress' class='Submenuitem' onMouseOver='MouseOverSubmenuItem(this)' onMouseOut='MouseOutSubmenuItem(this)'>
    <div class='LeftChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
    <div id='ActiveSubmenuItemIcon_cafepress' class='ActiveSubmenuItemIcon' style='background-image:url({$path}/templates/tibia/images/global/menu/icon-activesubmenu.gif);'></div>
    <div id='ActiveSubmenuItemLabel_cafepress' class='SubmenuitemLabel'>Donate</div>
    <div class='RightChain' style='background-image:url({$path}/templates/tibia/images/global/general/chain.gif);'></div>
  </div>
</a>
</div>
</div>
<div id='MenuBottom' style='background-image:url({$path}/templates/tibia/images/global/general/box-bottom.gif);'></div>
</div>
<script type='text/javascript'>InitializePage();</script>        </div>         <div id="ContentColumn">           <div id="Content" class="Content">             <div id="ContentHelper"><script type="text/javascript" src="{$path}/templates/tibia/javascripts/newsticker.js"></script>    <div id="news" class="Box">     <div class="Corner-tl" style="background-image:url({$path}/templates/tibia/images/global/content/corner-tl.gif);"></div>     <div class="Corner-tr" style="background-image:url({$path}/templates/tibia/images/global/content/corner-tr.gif);"></div>     <div class="Border_1" style="background-image:url({$path}/templates/tibia/images/global/content/border-1.gif);"></div>     <div class="BorderTitleText" style="background-image:url({$path}/templates/tibia/images/global/content/title-background-green.gif);"></div>     <img id="ContentBoxHeadline" class="Title" src="{$path}/templates/tibia/images/global/strings/headline-houses.gif" alt="Contentbox headline" />     <div class="Border_2">       <div class="Border_3">         <div class="BoxContent" style="background-image:url({$path}/templates/tibia/images/global/content/scroll.gif);">
   {$main}      
</div>       </div>     </div>     <div class="Border_1" style="background-image:url({$path}/templates/tibia/images/global/content/border-1.gif);"></div>     <div class="CornerWrapper-b"><div class="Corner-bl" style="background-image:url({$path}/templates/tibia/images/global/content/corner-bl.gif);"></div></div>     <div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url({$path}/templates/tibia/images/global/content/corner-br.gif);"></div></div>   </div>             <div id="ThemeboxesColumn" >               <div id="DeactivationContainerThemebox" ></div>               <div id="RightArtwork">                 <img id="Monster" src="{$path}/templates/tibia/images/global/header/monsters/hero.gif" onClick="window.location = '{$path}';" alt="Monster of the Week" />                 <img id="PedestalAndOnline" src="{$path}/templates/tibia/images/global/header/pedestal-and-online.gif" alt="Monster Pedestal and Players Online Box"/>                 <div id="PlayersOnline" onClick="window.location = '{$path}';">{foreach from=$worlds key=id item=world}
									{if $serverOnline[$id]}
{$serverPlayers[$id]}		<br />Players Online							{else}
										<span style="color: red;font-weight: bold;">Server Offline</span>
									{/if}
							
								{/foreach}

</div>               </div>               <div id="Themeboxes">                    <div id="NewcomerBox" class="Themebox" style="background-image:url({$path}/templates/tibia/images/global/themeboxes/newcomer/newcomerbox.gif);">     <a class="ThemeboxButton" href="{$path}/index.php/account/create" onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" style="background-image:url({$path}/templates/tibia/images/global/buttons/sbutton.gif);"><div class="BigButtonOver" style="background-image:url({$path}/templates/tibia/images/global/buttons/sbutton_over.gif);"></div>       <div class="ButtonText" style="background-image:url({$path}/templates/tibia/images/global/buttons/_sbutton_jointibia.gif);"></div>     </a>     <div class="Bottom" style="background-image:url({$path}/templates/tibia/images/global/general/box-bottom.gif);"></div>   </div>    <div id="PremiumBox" class="Themebox" style="background-image:url({$path}/templates/tibia/images/global/themeboxes/premium/premiumbox.gif);">     <a class="ThemeboxButton" href="{$path}" onMouseOver="MouseOverBigButton(this);" onMouseOut="MouseOutBigButton(this);" style="background-image:url({$path}/templates/tibia/images/global/buttons/sbutton.gif);"><div class="BigButtonOver" style="background-image:url({$path}/templates/tibia/images/global/buttons/sbutton_over.gif);"></div>       <div class="ButtonText" style="background-image:url({$path}/templates/tibia/images/global/buttons/_sbutton_getpremium.gif);"></div>     </a>     <div class="Bottom" style="background-image:url({$path}/templates/tibia/images/global/general/box-bottom.gif);"></div>   </div>
                     </div>             </div>           </div>           </div>           <div id="Footer">             Copyright by CipSoft GmbH. All Rights reserved.<br/>             <a href="{$path}">About CipSoft</a> | <a href="{$path}">Service Agreement</a> | <a href="{$path}/index.php/p/v/support">Privacy Policy</a>           </div>         </div>       </div>      </div>     </div>   </div>   <script type="text/javascript" >     // disable all control elements which are not part of the content container element     if (g_Deactivated == true) {       document.getElementById('DeactivationContainer').style.display = "block";       document.getElementById('DeactivationContainer').style.zIndex = "50";       document.getElementById('DeactivationContainerThemebox').style.display = "block";       document.getElementById('Monster').style.cursor = "auto";       document.getElementById('PlayersOnline').style.cursor = "auto";       document.getElementById('ThemeboxesColumn').style.opacity = "0.30";       document.getElementById('ThemeboxesColumn').style.MozOpacity = "0.30";       document.getElementById('ThemeboxesColumn').filters.alpha.opacity = "0.75";       document.getElementById('ThemeboxesColumn').style.filter = "alpha(opacity=50); opacity: 0.30";       document.getElementById('Monster').setAttribute("onclick", "")       document.getElementById('PlayersOnline').setAttribute("onclick", "")     }   </script>   <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-1287546-1");
pageTracker._setDomainName("tibia.com");
pageTracker._initData();
pageTracker._trackPageview("/news/latestnews");
</script>
</body> </html>