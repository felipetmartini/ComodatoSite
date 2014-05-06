        </div>
      </div>
    </div>
    <div class="Border_1" style="background-image:url(layout/index_pliki/border-1.gif);"></div>
    <div class="CornerWrapper-b"><div class="Corner-bl" style="background-image:url(layout/index_pliki/corner-bl.gif);"></div></div>
    <div class="CornerWrapper-b"><div class="Corner-br" style="background-image:url(layout/index_pliki/corner-br.gif);"></div></div>
  </div>
				<div id="ThemeboxesColumn">
				<div id="DeactivationContainerThemebox" onClick="DisableDeactivationContainer();"></div>
				<div id="RightArtwork">
				<img id="Monster" src="layout/index_pliki/demon.gif" onClick="window.location = 'index.php';" alt="Monster of the Week">
				<img id="PedestalAndOnline" src="layout/index_pliki/pedestal-and-online.gif" alt="Monster Pedestal and Players Online Box">
				<div id="PlayersOnline" onClick="window.location = 'onlinelist.php';"><?php echo user_count_online();?><br>Players Online</div>
                </div>
<?php include 'layout/rightpanels.php'; ?>
            </div>
            <div id="Footer">
              Layout: CipSoft GmbH. Engine: Znote AAC. Convert: LuisPro.
            </div>
          </div>
        </div>
       </div>
      </div>
    </div>
  
  <script type="text/javascript">
    // disable all control elements which are not part of the content container element
    if (g_Deactivated == true) {
      document.getElementById('LoginButtonContainer').style.zIndex = "1";
      document.getElementById('DeactivationContainer').style.display = "block";
      document.getElementById('DeactivationContainer').style.zIndex = "50";
      document.getElementById('DeactivationContainerThemebox').style.display = "block";
      document.getElementById('Monster').style.cursor = "auto";
      document.getElementById('PlayersOnline').style.cursor = "auto";
      document.getElementById('ThemeboxesColumn').style.opacity = "0.30";
      document.getElementById('ThemeboxesColumn').style.MozOpacity = "0.30";
      document.getElementById('ThemeboxesColumn').filters.alpha.opacity = "0.75";
      document.getElementById('ThemeboxesColumn').style.filter = "alpha(opacity=50); opacity: 0.30";
      document.getElementById('Monster').setAttribute("onclick", "")
      document.getElementById('PlayersOnline').setAttribute("onclick", "")
    }
  </script>
<div id="HelperDivContainer" style="background-image: url(layout/index_pliki/scroll.gif);"><div class="HelperDivArrow" style="background-image: url(layout/index_pliki/helper-div-arrow.png);"></div><div id="HelperDivHeadline"></div><div id="HelperDivText"></div><center><img class="Ornament" src="layout/index_pliki/ornament.gif"></center><br></div>

<script src="layout/index_pliki/ga.js" type="text/javascript"></script>

</body>
</html>