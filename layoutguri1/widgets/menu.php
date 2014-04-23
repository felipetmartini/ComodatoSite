<div id="Menu">
<div id="MenuTop" style="background-image:url(layout/index_pliki/box-top.gif);"></div>
<div id="news" class="menuitem">
<span onClick="MenuItemAction('news')">
  <div class="MenuButton" style="background-image:url(layout/index_pliki/button-background.gif);">
    <div onMouseOver="MouseOverMenuItem(this);" onMouseOut="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(layout/index_pliki/button-background-over.gif);"></div>
      <span style="visibility: hidden;" id="news_Lights" class="Lights">
        <div class="light_lu" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ld" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ru" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
      </span>
      <div id="news_Icon" class="Icon" style="background-image:url(layout/index_pliki/icon-news.gif);"></div>
      <div id="news_Label" class="Label" style="background-image:url(layout/index_pliki/label-news.gif);"></div>
      <div id="news_Extend" class="Extend" style="background-image: url(&quot;layout/index_pliki/minus.gif&quot;);"></div>
    </div>
  </div>
</span>
<div style="visibility: visible; display: block;" id="news_Submenu" class="Submenu">
<a href="index.php">
  <div style="color: white;" id="submenu_latestnews" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_latestnews" class="ActiveSubmenuItemIcon" style="background-image: url(&quot;layout/index_pliki/icon-activesubmenu.gif&quot;); visibility: visible;"></div>
    <div id="ActiveSubmenuItemLabel_latestnews" class="SubmenuitemLabel">Latest News</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
</div>
</div>
<div id="community" class="menuitem">
<span onClick="MenuItemAction('community')">
  <div class="MenuButton" style="background-image:url(layout/index_pliki/button-background.gif);">
    <div onMouseOver="MouseOverMenuItem(this);" onMouseOut="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(layout/index_pliki/button-background-over.gif);"></div>
      <span style="visibility: visible;" id="community_Lights" class="Lights">
        <div class="light_lu" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ld" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ru" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
      </span>
      <div id="community_Icon" class="Icon" style="background-image:url(layout/index_pliki/icon-community.gif);"></div>
      <div id="community_Label" class="Label" style="background-image:url(layout/index_pliki/label-community.gif);"></div>
      <div id="community_Extend" class="Extend" style="background-image:url(layout/index_pliki/plus.gif);"></div>
    </div>
  </div>
</span>
<div style="visibility: hidden; display: none;" id="community_Submenu" class="Submenu">
<a href="http://localhost/characters.php">
  <div id="submenu_characters" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_characters" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_characters" class="SubmenuitemLabel">Characters</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="killers.php">
  <div id="submenu_killstatistics" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_killstatistics" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_killstatistics" class="SubmenuitemLabel">Killers</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="deaths.php">
  <div id="submenu_killstatistics" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_killstatistics" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_killstatistics" class="SubmenuitemLabel">Deaths</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="houses.php">
  <div id="submenu_houses" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_houses" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_houses" class="SubmenuitemLabel">Houses</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="guilds.php">
  <div id="submenu_guilds" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_guilds" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_guilds" class="SubmenuitemLabel">Guilds</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="guildwar.php">
  <div id="submenu_guilds" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_guilds" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_guilds" class="SubmenuitemLabel">Guild Wars</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
</div>
</div>
<div id="forum" class="menuitem">
<span onClick="MenuItemAction('forum')">
  <div class="MenuButton" style="background-image:url(layout/index_pliki/button-background.gif);">
    <div onMouseOver="MouseOverMenuItem(this);" onMouseOut="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(layout/index_pliki/button-background-over.gif);"></div>
      <span style="visibility: visible;" id="forum_Lights" class="Lights">
        <div class="light_lu" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ld" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ru" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
      </span>
      <div id="forum_Icon" class="Icon" style="background-image:url(http://static.tibia.com/images/global/menu/icon-forum.gif);"></div>
      <div id="forum_Label" class="Label" style="background-image:url(http://static.tibia.com/images/global/menu/label-forum.gif);"></div>
      <div id="forum_Extend" class="Extend" style="background-image:url(layout/index_pliki/plus.gif);"></div>
    </div>
  </div>
</span>
<div style="visibility: hidden; display: none;" id="forum_Submenu" class="Submenu">
<a href="forum.php">
  <div id="submenu_communityboards" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_communityboards" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_communityboards" class="SubmenuitemLabel">Community Boards</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
</div>
</div>
<div id="account" class="menuitem">
<span onClick="MenuItemAction('account')">
  <div class="MenuButton" style="background-image:url(layout/index_pliki/button-background.gif);">
    <div onMouseOver="MouseOverMenuItem(this);" onMouseOut="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(layout/index_pliki/button-background-over.gif);"></div>
      <span style="visibility: visible;" id="account_Lights" class="Lights">
        <div class="light_lu" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ld" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ru" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
      </span>
      <div id="account_Icon" class="Icon" style="background-image:url(http://static.tibia.com/images/global/menu/icon-account.gif);"></div>
      <div id="account_Label" class="Label" style="background-image:url(http://static.tibia.com/images/global/menu/label-account.gif);"></div>
      <div id="account_Extend" class="Extend" style="background-image:url(layout/index_pliki/plus.gif);"></div>
    </div>
  </div>
</span>
<div style="visibility: hidden; display: none;" id="account_Submenu" class="Submenu">
<a href="myaccount.php">
  <div id="submenu_accountmanagement" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_accountmanagement" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_accountmanagement" class="SubmenuitemLabel">Account Management</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="register.php">
  <div id="submenu_createaccount" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_createaccount" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_createaccount" class="SubmenuitemLabel">Create Account</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="http://static.tibia.com/download/tibia1022.exe">
  <div id="submenu_downloadclient" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_downloadclient" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_downloadclient" class="SubmenuitemLabel">Download Client</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="http://static.otland.net/ipchanger.exe">
  <div id="submenu_downloadclient" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_downloadclient" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_downloadclient" class="SubmenuitemLabel">Download IP Changer</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="recovery.php?mode=username">
  <div id="submenu_lostaccount" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_lostaccount" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_lostaccount" class="SubmenuitemLabel">Lost Username?</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="recovery.php?mode=password">
  <div id="submenu_lostaccount" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_lostaccount" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_lostaccount" class="SubmenuitemLabel">Lost Password?</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
</div>
</div>
<div id="support" class="menuitem">
<span onClick="MenuItemAction('support')">
  <div class="MenuButton" style="background-image:url(layout/index_pliki/button-background.gif);">
    <div onMouseOver="MouseOverMenuItem(this);" onMouseOut="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(layout/index_pliki/button-background-over.gif);"></div>
      <span style="visibility: visible;" id="support_Lights" class="Lights">
        <div class="light_lu" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ld" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ru" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
      </span>
      <div id="support_Icon" class="Icon" style="background-image:url(http://static.tibia.com/images/global/menu/icon-support.gif);"></div>
      <div id="support_Label" class="Label" style="background-image:url(http://static.tibia.com/images/global/menu/label-support.gif);"></div>
      <div id="support_Extend" class="Extend" style="background-image:url(layout/index_pliki/plus.gif);"></div>
    </div>
  </div>
</span>
<div style="visibility: hidden; display: none;" id="support_Submenu" class="Submenu">
<a href="serverinfo.php">
  <div id="submenu_faq" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_faq" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_faq" class="SubmenuitemLabel">Server Info</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="support.php">
  <div id="submenu_faq" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_faq" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_faq" class="SubmenuitemLabel">Support Team</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
</div>
</div>
<div id="shops" class="menuitem">
<span onClick="MenuItemAction('shops')">
  <div class="MenuButton" style="background-image:url(layout/index_pliki/button-background.gif);">
    <div onMouseOver="MouseOverMenuItem(this);" onMouseOut="MouseOutMenuItem(this);"><div class="Button" style="background-image:url(layout/index_pliki/button-background-over.gif);"></div>
      <span style="visibility: visible;" id="shops_Lights" class="Lights">
        <div class="light_lu" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ld" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
        <div class="light_ru" style="background-image:url(layout/index_pliki/green-light.gif);"></div>
      </span>
      <div id="shops_Icon" class="Icon" style="background-image:url(http://static.tibia.com/images/global/menu/icon-shops.gif);"></div>
      <div id="shops_Label" class="Label" style="background-image:url(http://static.tibia.com/images/global/menu/label-shops.gif);"></div>
      <div id="shops_Extend" class="Extend" style="background-image:url(layout/index_pliki/plus.gif);"></div>
    </div>
  </div>
</span>
<div style="visibility: hidden; display: none;" id="shops_Submenu" class="Submenu">
<a href="buypoints.php">
  <div id="submenu_cafepress" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_cafepress" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_cafepress" class="SubmenuitemLabel">Buy Points</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
<a href="shop.php">
  <div id="submenu_cafepress" class="Submenuitem" onMouseOver="MouseOverSubmenuItem(this)" onMouseOut="MouseOutSubmenuItem(this)">
    <div class="LeftChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
    <div id="ActiveSubmenuItemIcon_cafepress" class="ActiveSubmenuItemIcon" style="background-image:url(layout/index_pliki/icon-activesubmenu.gif);"></div>
    <div id="ActiveSubmenuItemLabel_cafepress" class="SubmenuitemLabel">Shop Offers</div>
    <div class="RightChain" style="background-image:url(layout/index_pliki/chain.gif);"></div>
  </div>
</a>
</div>
</div>
<div id="MenuBottom" style="background-image:url(layout/index_pliki/box-bottom.gif);"></div>
</div>