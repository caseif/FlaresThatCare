<?php
require('./templates/header.php');
echo '<p>Flares that Care is made posssible with the help of these wonderful people:</p>';
$roles = array(
	'Founders' => array(
		'B_RED',
		'Snoven'
	),
	'Management Lead' => array(
		'Pops'
	),
	'Graphics Lead' => array(
		'Jess'
	),
	'Web Development Lead' => array(
		'caseif'
	),
	'Audio/Video Lead' => array(
		'Jerry'
	),
	'Public Relations Lead' => array(
		'Plotchy'
	),
	'Management' => array(
		'CeeJaey',
		'Pops',
		'Snoven'
	),
	'Graphics' => array(
		'Blutz',
		'FoxC',
		'Jess'
	),
	'Web Development' => array(
		'caseif'
	),
	'Audio/Video' => array(
		'Jerry',
		'Marty'
	),
	'Public Relations' => array(
		'Breakfast',
		'Chris',
		'Getawhale',
		'Goobledegak',
		'Plotchy',
		'Tr1ps'
	),
	'Moderators' => array(
		'Aus',
		'Auzzie',
		'DaftKid',
		'DJ',
		'DrOktober',
		'Dog21',
		'Goku',
		'IronKai',
		'Latrine',
		'Midgett',
		'Mike',
		'Mio',
		'Mystiq',
		'ProfessorCake',
		'Radio',
		'TK',
		'ToadySwift',
		'Tokki'
	),
	'Special Thanks To' => array(
		'Afterglow',
		'ArraySeven',
		'Aurora',
		'CDAWG',
		'Dman',
		'Haydn',
		'Hobbes',
		'Quintosh',
		'Satan',
		'ScottJAw',
		'Tatelax',
		'TMP',
		'UncleDane'
	)
);
$steamIds = array(
	'Afterglow' => '76561198047849609',
	'ArraySeven' => '76561198013749611',
	'Aurora' => '76561198053067670',
	'Aus' => '76561198010426052',
	'Auzzie' => '76561198023665618',
	'Blutz' => '76561198003720523',
	'Breakfast' => '76561198076702935',
	'B_RED' => '76561198158123097',
	'caseif' => '76561198067880160',
	'CDAWG' => '76561198026581404',
	'CeeJaey' => '76561197977733292',
	'Chris' => '76561198044197136',
	'DaftKid' => '76561197982885662',
	'DJ' => '76561197993515256',
	'Dman' => '76561198056034720',
	'DrOktober' => '76561198008464806',
	'Dog21' => '76561197999773292',
	'FoxC' => '76561198005541483',
	'Getawhale' => '76561197995194256',
	'Goku' => '76561198002802430',
	'Goobledegak' => '76561198045558830',
	'Haydn' => '76561198014665457',
	'Hobbes' => '76561197969366540',
	'IronKai' => '76561198053549635',
	'Jess' => '76561198044250788',
	'Jerry' => '76561197991851380',
	'Latrine' => '76561198033653428',
	'Marty' => '76561197998392954',
	'Midgett' => '76561198079756281',
	'Mike' => '76561198019993707',
	'Mio' => '76561198043660647',
	'Mystiq' => '76561198092185323',
	'Plotchy' => '76561198056063859',
	'Pops' => '76561198162803387',
	'ProfessorCake' => '76561198103083216',
	'Quintosh' => '76561198049289245',
	'Radio' => '76561198090228853',
	'Satan' => '76561197996097401',
	'ScottJAw' => '76561198031381554',
	'Snoven' => '76561198155316177',
	'Tatelax' => '76561198020918584',
	'TK' => '76561198072266128',
	'TMP' => '76561197995400066',
	'ToadySwift' => '76561198020736248',
	'Tokki' => '76561198043800052',
	'Tr1ps' => '76561198082784188',
	'UncleDane' => '76561198057999536'
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
			if (isset($url))
				echo '</a>';
			echo '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
}
require('./templates/footer.php');
?>