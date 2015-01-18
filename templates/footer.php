			<!-- /main-content div -->
			</div>
			<div id="footer">
				<br>
				<hr>
				<br>
				&#169; Copyright 2015 Flares That Care
				<span style="padding-right:50px;"></span> <!-- spacer -->
				<a href="https://github.com/caseif/FlaresThatCare" target="_blank">Source Code</a>
				<span style="padding-right:50px;"></span> <!-- spacer -->
				<a href="/contact.php">Contact Us</a>
			</div>
		<!-- /container div -->
		</div>
	</body>
	<script type="text/javascript">
	// some terrifying flames
	function letItBurn(){
		snowFall.snow($("#navbar-outer"), {flakeCount: 250, minSize: 1, maxSize: 1});
	}
	
	if (getCookie("sparks") != "off")
		$(document).ready = letItBurn();
	
	function stopSparks(){
		document.cookie = 'sparks=off; expires=' + new Date(2037, 0, 1, 0, 0, 0, 0).toGMTString() + '; path=/';
		snowFall.snow($("#navbar-outer"), "clear");
		var flakes = document.getElementsByClassName("spark-elements");
		if (flakes.length > 0)
			while (flakes[0])
				flakes[0].parentNode.removeChild(flakes[0]);
		document.getElementById("sparkToggle").innerHTML = "<a href='javascript:startSparks()'>Want flames again? Click here!</a>";
		console.log("Sparks disabled");
	}
	
	function startSparks(){
		document.cookie = "sparks=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
		letItBurn();
		document.getElementById("sparkToggle").innerHTML = "<a href='javascript:stopSparks()'>Flames too slow? Turn 'em off!</a>";
		console.log("Sparks enabled");
	}
</script>
</html>
