<?php
$pageTitle = 'Featured YouTubers - Flares that Care';
require('./templates/header.php');
$people = array(
	'Uncle Dane' => array(
		'UCu0PSyLD5p_J5osLk5UD0pw',
		'qwDVYiEkU30'
	),
	'ScottJAw' => array(
		'UCgVfXpnb2waNO4cZ6ewQxhA',
		'wecYL18Nn28'
	),
	'Freedie TF2' => array(
		'UC65OiYfjfTKvfelonKljZ9g',
		'xYkaHgAmoVA'
	),
	'Grizzly Berry' => array(
		'UCodHzjLSn63vFUEq7K6GLVQ',
		'Rh3WLnwTfMs'
	),
	'Stapler' => array(
		'UCE1fSELRgFdRCipNqXP4Gsw',
		'I7sQQfLfWUw'
	),
	'Retro Gaming' => array(
		'UCBeNG29JwkgORV5e1dBr5RA',
		'xOfkSY_Tyx4'
	)
);
?>
Below are some awesome YouTubers who have given shoutouts to Flares that Care. Be sure to check them out!
<?php
foreach ($people as $person => $info) {
	echo '<p>';
		echo '<p>';
			echo '<a href="https://www.youtube.com/channel/'.$info[0].'">';
				echo $person;
			echo '</a>';
		echo '</p>';
		echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$info[1].'" ';
				echo 'frameborder="0" allowFullscreen></iframe>';
	echo '</p>';
}
?>
<!--<p>
	<p><a href="https://www.youtube.com/channel/UCu0PSyLD5p_J5osLk5UD0pw">Uncle Dane</a></p>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/qwDVYiEkU30" frameborder="0" allowfullscreen>
	</iframe>
</p>
<p>
	<p><a href="https://www.youtube.com/channel/UCgVfXpnb2waNO4cZ6ewQxhA">ScottJAw</a></p>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/wecYL18Nn28" frameborder="0" allowfullscreen>
	</iframe>
</p>
<p>
	<p><a href="https://www.youtube.com/channel/UC65OiYfjfTKvfelonKljZ9g">Freddie TF2</a></p>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/xYkaHgAmoVA" frameborder="0" allowfullscreen>
	</iframe>
</p>
<p>
	<p><a href="https://www.youtube.com/channel/UCodHzjLSn63vFUEq7K6GLVQ">Grizzly Berry</a></p>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/Rh3WLnwTfMs" frameborder="0" allowfullscreen>
	</iframe>
</p>-->
<?php
require('./templates/footer.php');
?>