<?php require_once("res/x5engine.php"); ?><!DOCTYPE html><!-- HTML5 -->
<html lang="en-GB" dir="ltr">
	<head>
		<title>Search - New Project 1</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="generator" content="Incomedia WebSite X5 Professional 11.0.5.24 - www.websitex5.com" />
		<meta name="viewport" content="width=1170" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
		
		<script type="text/javascript" src="res/jquery.js?24"></script>
		<script type="text/javascript" src="res/x5engine.js?24"></script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Search - New Project 1</h1>
				
				<div style="position: absolute; top: 93px; left: 36px; width: 189px; height: 60px;"><img src="images/header_text.png" alt="Nour Soft" style="width: 189px; height: 60px;" /></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
			<a id="imGoToMenu"></a><p class="imHidden">Main menu:</p>
			<div id="imMnMn" class="auto">
				<ul class="auto">
					<li id="imMnMnNode0">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Home Page</span>
							</span>
						</a>
					</li><li id="imMnMnNode3">
						<a href="page-1.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Page 1</span>
							</span>
						</a>
					</li><li id="imMnMnNode4">
						<a href="page-2.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Page 2</span>
							</span>
						</a>
					</li><li id="imMnMnNode5">
						<a href="page-3.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span>Page 3</span>
							</span>
						</a>
					</li>
				</ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Search results</h2><?php
$search = new imSearch();
$keys = isset($_GET['search']) ? $_GET['search'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$type = isset($_GET['type']) ? $_GET['type'] : "pages"; ?>
<div class="searchPageContainer">
<?php echo $search->search($keys, $page, $type); ?>
</div>
				  
				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a> | <a href="#imGoToMenu" title="Read this site again">Back to main menu</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript</div></noscript>
	</body>
</html>
