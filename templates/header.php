<!DOCTYPE HTML>
<?php
if (!isset($pageTitle))
	$pageTitle = "Flares that Care";
?>
<html>
	<head>
		<title><?php echo $pageTitle; ?></title>
		<meta charset="UTF-8" />
		<!-- begin Open Graph tags -->
		<meta property="og:title" content="<?php echo $pageTitle; ?>" />
		<meta property="og:url" content="http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>" />
		<meta property="og:site_name" content="Flares that Care" />
		<meta property="og:description" content="
			Flares that Care is a quarterly charity livestream event supporting Child's Play Charity.
			Our second event is set to take place from Friday, March 13th at 12 PM PST until Sunday, March 15th at 12 AM PST.
		" />
		<meta property="og:image" content="http://<?php echo $_SERVER['HTTP_HOST']; ?>/img/flare.png" />
		<meta property="og:type" content="website" />
		<meta property="og:locale" content="en_US" />
		<!-- end Open Graph tags -->
		<link rel="stylesheet" type="text/css" href="/styles.css">
		<link rel="icon" type="image/icon" href="/favicon.ico">
		<link rel="stylesheet"	type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro%7CMontserrat">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="/js/sparks.js"></script>
		<script type="text/javascript" src="/js/konami.js"></script>
		<!--<script type="text/javascript" src="/js/mobile_detect.js"></script>-->
		<script type="text/javascript">
			function getCookie(c_name){
				var c_value = document.cookie;
				var c_start = c_value.indexOf(" " + c_name + "=");
				if (c_start == -1){
					c_start = c_value.indexOf(c_name + "=");
				}
				if (c_start == -1){
					c_value = null;
				}
				else {
					c_start = c_value.indexOf("=", c_start)+ 1;
					var c_end = c_value.indexOf(";", c_start);
					if (c_end == -1){
						c_end = c_value.length;
					}
					c_value = unescape(c_value.substring(c_start,c_end));
				}
				return c_value;
			}
			
			var goal = 1426276800;
			var remaining = goal - Math.floor(Date.now() / 1000);
			if (remaining < 0)
				remaining = 0;
			function tickTimer() {
				if (remaining % 60 == 0)
					remaining =goal - Math.floor(Date.now() / 1000); // resynchronize
				var days =    Math.floor(remaining / 86400);
				days = days < 10 ? "0" + days : days;
				var hours =   Math.floor(remaining % 86400 / 3600);
				hours = hours < 10 ? "0" + hours : hours;
				var minutes = Math.floor(remaining % 86400 % 3600 / 60);
				minutes = minutes < 10 ? "0" + minutes : minutes;
				var seconds = Math.floor(remaining % 86400 % 3600 % 60);
				seconds = seconds < 10 ? "0" + seconds : seconds;
				var dateStr = remaining == 0 ? "<a href='http://www.twitch.tv/flaresthatcare'>twitch.tv/flaresthatcare</a>" : "Event starts in " +
				(days + ":" + hours + ":" + minutes + ":" + seconds);
				$("#countdown").html(dateStr);
				if (remaining > 0) {
					remaining -= 1;
					setTimeout(tickTimer, 1000);
				}
			}
			window.onready = function () {
				setTimeout(function () {
					$('#footer').width($('#container').width());
					var margin = $(window).height() - $('#container').height() + 8;
					if (margin > 0) {
						$('#content').css('margin-bottom', margin);
					}
				}, 50);
				tickTimer();
			}

			$(document).ready(function() {
				// some terrifying flames
				function letItBurn(){
					snowFall.snow($("#header-image"), {flakeCount: 250, minSize: 1, maxSize: 1});
				}
				
				if (getCookie("snow") != "off" && navigator.userAgent.indexOf("MSIE") <= -1)
					$(document).ready = letItBurn();
				
				function stopSparks(){
					document.cookie = 'sparks=off; expires=' + new Date(2037, 0, 1, 0, 0, 0, 0).toGMTString() + '; path=/';
					snowFall.snow($("#header-image"), "clear");
					var flakes = document.getElementsByClassName("spark-elements");
					if (flakes.length > 0)
						while (flakes[0])
							flakes[0].parentNode.removeChild(flakes[0]);
					document.getElementById("spark-toggle").innerHTML = "<a href='javascript:startSparks()'>Want flames again? Click here!</a>";
					console.log("Sparks disabled");
				}
				
				function startSparks(){
					document.cookie = "sparks=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
					letItBurn();
					document.getElementById("spark-toggle").innerHTML = "<a href='javascript:stopSparks()'>Flames too slow? Turn 'em off!</a>";
					console.log("Sparks enabled");
				}
				
				setTimeout(function () {
					$('#footer').width($('#container').width());
					var konami = new Konami();
					konami.code = function() {
						konamiDiv = document.createElement("div");
						konamiDiv.id = "konami";
						document.body.appendChild(konamiDiv);
						$('#konami').prepend('<img src="http://i0.kym-cdn.com/entries/icons/original/000/003/269/lolol.jpg">');
						$('#konami').prepend(
						'<audio id="scare" hidden autoplay>' + // add audio tag along with embed tag for old people
								'<source src="http://www.amigocraft.net/resources/scream.mp3" type="audio/mpeg">' +
								'<embed src="http://www.amigocraft.net/resources/scream.mp3" hidden=true autostart=true loop=false>' +
								'</audio>');
						setTimeout(function() { $('#konami').remove(); }, 1183);
					}
					konami.load();
				}, 50)
			}); // I've spent 30 minutes trying to fix the CSS, so I'm giving up and just sticking in a delay
		</script>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<div id="header-ribbon">
					<span id="countdown">%COUNTDOWN%</span>
				</div>
				<div id="header-image">
					<a id="ghetto-ass-index-link-that-really-shouldnt-be-done-this-way" href="/"></a>
				<span id="spark-toggle">
					<?php
					if (strpos($_SERVER['HTTP_USER_AGENT'], "MSIE") <= -1) {
						if ($_COOKIE['sparks'] == "off")
							echo "<a href='javascript:startSparks()'>Want flames again? Click here!</a>";
						else
							echo "<a href='javascript:stopSparks()'>Flames too slow? Turn 'em off!</a>";
					}
					?>
				</span>
				</div>
				<div id="header-bottom-ribbon"></div>
			</div>
			<div id="content">
