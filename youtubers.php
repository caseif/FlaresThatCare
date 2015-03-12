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
	),
	'Criits' => array(
		'UC2MIdFUYiDnZy2RHx0jjY_w',
		'0nkUKmWmVDU'
	),
	'PABS' => array(
		'UC5DZms_7SCNXA_Efp139MFw',
		'7tyTj8lRCus'
	),
	'Dapper Dog' => array(
		'UCbYeDmR6E2xQ42n7pZyWIAA',
		'03x7BXQ5xUc'
	)
);
?>
Below are some awesome YouTubers who have given shoutouts to Flares that Care. Be sure to check them out!
<?php
foreach ($people as $person => $info) {
	echo '<div>';
		echo '<p>';
			echo '<a href="https://www.youtube.com/channel/'.$info[0].'">';
				echo $person;
			echo '</a>';
		echo '</p>';
		echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/'.$info[1].'" ';
				echo 'style="border:0" allowFullscreen></iframe>';
	echo '</div>';
}
?>
<?php
require('./templates/footer.php');
?>