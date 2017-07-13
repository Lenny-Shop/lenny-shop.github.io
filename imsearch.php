<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="de-DE" dir="ltr">
	<head>
		<title>Suchen - Lenny-Shop</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Lennard" />
		<meta name="generator" content="Incomedia WebSite X5 Professional 13.0.5.27 - www.websitex5.com" />
		<meta property="og:locale" content="de" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://lenny-shop.de/imsearch.php" />
		<meta property="og:title" content="Suchen" />
		<meta property="og:site_name" content="Lenny-Shop" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css?13-0-5-27" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?13-0-5-27" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?13-0-5-27" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?13-0-5-27" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css?13-0-5-27" media="screen" />
		<link rel="stylesheet" type="text/css" href="pcss/imsearch.css?13-0-5-27-636355425380529061" media="screen" />
		<script type="text/javascript" src="res/jquery.js?13-0-5-27"></script>
		<script type="text/javascript" src="res/x5engine.js?13-0-5-27" data-files-version="13-0-5-27"></script>
		<script type="text/javascript">
			window.onload = function(){ checkBrowserCompatibility('Der von Ihnen verwendete Browser unterstützt nicht die die Funktionen, die für die Anzeige dieser Website benötigt werden.','Der von Ihnen verwendete Browser unterstützt möglicherweise nicht die die Funktionen, die für die Anzeige dieser Website benötigt werden.','[1]Browser aktualisieren[/1] oder [2]Vorgang fortsetzen[/2].','http://outdatedbrowser.com/'); };
		</script>
		<link rel="icon" href="favicon.png?13-0-5-27-636355425380529061" type="image/png" />
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Suchen - Lenny-Shop</h1>
				<div id="imHeaderObjects"><div id="imHeader_imObjectTitle_01_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_1"></div></div><div id="imHeader_imObjectTitle_02_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_2" class="" > <div id="imHeader_imCellStyleGraphics_2"></div><div id="imHeader_imCellStyle_2" ><div id="imHeader_imObjectTitle_02"><span id ="imHeader_imObjectTitle_02_text">Lenny-Shop </span > </div></div></div></div></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Überspringen Sie das Hauptmenü">Direkt zum Seiteninhalt</a>
			<a id="imGoToMenu"></a><p class="imHidden">Hauptmenü:</p>
			<div id="imMnMnContainer">
				<div id="imMnMnGraphics"></div>
				<div id="imMnMn" class="auto main-menu">
					<div class="hamburger-site-background menu-mobile-hidden"></div><div class="hamburger-button"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container"><div class="hamburger-menu-background menu-mobile-hidden"><div class="hamburger-menu-close-button"><span>&times;</span></div></div></div>
				<ul class="auto menu-mobile-hidden">
					<li id="imMnMnNode0" class=" imPage">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Home</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode3" class=" imPage">
						<a href="shop.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Shop</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode4" class=" imPage">
						<a href="facts.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Facts</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode5" class=" imPage">
						<a href="contact.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Contact</span></span>
							</span>
						</a>
					</li></ul>
				</div>
			</div>
			<div id="imContentContainer">
				<div id="imContentGraphics"></div>
				<div id="imContent">
					<a id="imGoToCont"></a>
				<div id="imSearchPage">
				<h2 id="imPgTitle">Suchergebnisse</h2>
				<?php
				$search = new imSearch();
				$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
				$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
				$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
				<div class="searchPageContainer">
				<?php echo $search->search($keys, $page, $type); ?>
				</div>
				</div>
				
					<div class="imClear"></div>
				</div>
			</div>
			<div id="imFooter">
				<div id="imFooterObjects"></div>
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Lesen Sie den Inhalt der Seite noch einmal durch">Zurück zum Seiteninhalt</a> | <a href="#imGoToMenu" title="Die Webseite neu einlesen">Zurück zum Hauptmenü</a></span>
		<script type="text/javascript" src="cart/x5cart.js?13-0-5-27-636355425380529061"></script>

		<noscript class="imNoScript"><div class="alert alert-red">Um diese Website nutzen zu können, aktivieren Sie bitte JavaScript.</div></noscript>
	</body>
</html>
