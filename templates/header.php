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
		<link rel="favicon" type="image/icon" href="/favicon.ico">
		<link rel="stylesheet"	type="text/css" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro|Montserrat">
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
					remaining = goal - Math.floor(Date.now() / 1000); // resynchronize
				var days =    Math.floor(remaining / 86400);
				days = days < 10 ? "0" + days : days;
				var hours =   Math.floor(remaining % 86400 / 3600);
				hours = hours < 10 ? "0" + hours : hours;
				var minutes = Math.floor(remaining % 86400 % 3600 / 60);
				minutes = minutes < 10 ? "0" + minutes : minutes;
				var seconds = Math.floor(remaining % 86400 % 3600 % 60);
				seconds = seconds < 10 ? "0" + seconds : seconds;
				//var dateStr = days + " days " + hours + " hours " + minutes + " minutes " + seconds + " seconds remaining";
				var dateStr = remaining == 0 ? "<a href='http://www.twitch.tv/flaresthatcare'>twitch.tv/flaresthatcare</a>" : days + ":" + hours +
				":" + minutes + ":" + seconds;
				$("#countdown").html(dateStr);
				if (remaining > 0) {
					remaining -= 1;
					setTimeout(tickTimer, 1000);
				}
			}
			window.onready = function () {
				setTimeout(function () {
					$('#footer').width($('#container').width());
					var margin = $(window).height() - $('#container').height();
					if (margin > 0) {
						$('#content').css('margin-bottom', margin);
					}
				}, 50);
				tickTimer();
			}

			$(document).ready(function() {
				if (navigator.userAgent.indexOf('Firefox') > -1) { // firefox renders the navbar buttons weirdly so we need to adjust them
					$('.nav-button').each(function() {
						$(this).css('padding-bottom', parseInt($(this).css('padding-bottom').replace('px', '')) - 2);
					});
					console.log('Adjusted for Firefox quirks');
				}
				else if(navigator.userAgent.indexOf("Trident") > -1) {
					// don't ask why this is necessary for IE to render the margin properly; I'm clueless
					$('#main-title').css('margin-top', '-5px');
					console.log('Adjusted for Internet Explorer quirks');
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
			<div id="navbar-outer"> <!-- I am a bad person -->
				<div id="navbar">
					<div id="main-title">
						<a href="/">Flares That Care</a>
					</div>
					<div id="countdown">??:??:??:??</div>
					<div id="nav-buttons">
						<div id="nav-links">
							<a class="nav-button" href="/people.php">People</a>
							<a class="nav-button" href="/irc.php">IRC</a>
							<a class="nav-button" href="http://goo.gl/DdOmFz" target="_blank">Schedule</a>
						</div>
						<div id="nav-icons">
							<!-- Note: the "right" element in the CSS for #nav-links needs to be updated when buttons are added or removed -->
							<a class="nav-button" href="http://open.spotify.com/user/flaresthatcare/playlist/1H6S1BFvJheCiNytbTcs6j" target="_blank">
								<img src="/img/icons/spotify.png" alt="Spotify" height=36>
							</a>
							<a class="nav-button" href="http://twitter.com/flaresthatcare" target="_blank">
								<img src="/img/icons/twitter.png" alt="Twitter" height=36>
							</a>
							<a class="nav-button" href="http://twitch.tv/flaresthatcare" target="_blank">
								<img src="/img/icons/twitch.png" alt="Twitch Stream" height=36>
							</a>
							<a class="nav-button" href="http://steamcommunity.com/groups/flaresthatcare" target="_blank">
								<img src="/img/icons/steam.png" alt="Steam Group" height=36>
							</a>
							<a class="nav-button" href="http://www.childsplaycharity.org/" target="_blank">
								<img src="/img/icons/childsplay.png" alt="Child's Play Charity" height=36>
							</a>
						</div>
					</div>
					<!--<div id="main-logo">
						<img src="/img/flare.png" alt="Logo" height=50>
					</div>-->
				</div>
			</div>
			<div id="sparkToggle">
				<?php
				if ($_COOKIE['sparks'] == "off")
					echo "<a href='javascript:startSparks()'>Want flames again? Click here!</a>";
				else
					echo "<a href='javascript:stopSparks()'>Flames too slow? Turn 'em off!</a>";
				?>
			</div>
			<div id="content">
