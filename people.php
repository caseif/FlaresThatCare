<?php
$pageTitle = 'People - Flares that Care';
require('./templates/header.php');
echo '<p>Flares that Care is made posssible with the help of these wonderful people:</p>';
$roles = array(
	'Founders' => array(
		'Snoven',
		'B_RED'
	),
	'Graphics Design' => array(
		'Jess',
		'FoxC',
		'Blutz'
	),
	'Web Development/IT' => array(
		'caseif'
	),
	'Public Relations' => array(
		'Plotchy',
		'Tr1ps'
	),
	'Community Ambassador' => array(
		'Chris'
	),
	'Stream Tech' => array(
		'Twiglet'
	)
);
$steamIds = array(
	'Blutz' => '76561198003720523',
	'B_RED' => '76561198158123097',
	'caseif' => '76561198067880160',
	'Chris' => '76561198044197136',
	'FoxC' => '76561198005541483',
	'Jess' => '76561198044250788',
	'Plotchy' => '76561198056063859',
	'Snoven' => '76561198155316177',
	'Tr1ps' => '76561198082784188',
	'Twiglet' => '76561198000822327'
);

$cols = 4;
foreach ($roles as $role => $people) {
	$count = sizeof($people);
	if ($role == 'Special Thanks To')
		echo '<hr>';
	echo '<span class="heading">'.$role.'</span>';
	echo '<table class="people">';
	for ($i = 0; $i < $count; $i += $cols) {
		echo '<tr>';
		for ($j = $i; $j < $i + $cols && $j < $count; $j++) {
			$person = $people[$j];
			$steamId = $steamIds[$person];
			echo '<td class="person">';
			if (isset($steamId))
				echo '<a href="https://steamcommunity.com/profiles/'.$steamId.'/" target="_blank">';
			echo $person;
			if (isset($steamId))
				echo '</a>';
			echo '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
}
require('./templates/footer.php');
?>