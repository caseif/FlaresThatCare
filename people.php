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
$profiles = array(
	'Afterglow' => 'http://steamcommunity.com/profiles/76561198053067670',
	'ArraySeven' => 'http://steamcommunity.com/profiles/76561198013749611',
	'Aurora' => 'http://steamcommunity.com/profiles/76561198053067670',
	'Aus' => 'http://steamcommunity.com/profiles/76561198010426052',
	'Auzzie' => 'http://steamcommunity.com/profiles/76561198023665618',
	'Blutz' => 'http://steamcommunity.com/profiles/76561198005541483',
	'Breakfast' => 'http://steamcommunity.com/profiles/76561198076702935',
	'B_RED' => 'http://steamcommunity.com/profiles/76561198158123097',
	'caseif' => 'http://steamcommunity.com/profiles/76561198067880160',
	'CDAWG' => 'http://steamcommunity.com/profiles/76561198026581404',
	'CeeJaey' => 'http://steamcommunity.com/profiles/76561197977733292',
	'Chris' => 'http://steamcommunity.com/profiles/76561198044197136',
	'DaftKid' => 'http://steamcommunity.com/profiles/76561197982885662',
	'DJ' => 'http://steamcommunity.com/profiles/76561197993515256',
	'Dman' => 'https://steamcommunity.com/profiles/76561198056034720',
	'DrOktober' => 'http://steamcommunity.com/profiles/76561198008464806',
	'Dog21' => 'http://steamcommunity.com/profiles/76561197999773292',
	'FoxC' => 'http://steamcommunity.com/profiles/76561198005541483',
	'Getawhale' => 'http://steamcommunity.com/profiles/76561197995194256',
	'Goku' => 'http://steamcommunity.com/profiles/76561198002802430',
	'Goobledegak' => 'http://steamcommunity.com/profiles/76561198045558830',
	'Haydn' => 'http://steamcommunity.com/profiles/76561198014665457',
	'Hobbes' => 'http://steamcommunity.com/profiles/76561197969366540',
	'IronKai' => 'http://steamcommunity.com/profiles/76561198053549635',
	'Jess' => 'http://steamcommunity.com/profiles/76561198044250788',
	'Jerry' => 'http://steamcommunity.com/profiles/76561197991851380',
	'Latrine' => 'http://steamcommunity.com/profiles/76561198033653428',
	'Marty' => 'http://steamcommunity.com/profiles/76561197998392954',
	'Midgett' => 'http://steamcommunity.com/profiles/76561198079756281',
	'Mike' => 'http://steamcommunity.com/profiles/76561198019993707',
	'Mio' => 'http://steamcommunity.com/profiles/76561198043660647',
	'Mystiq' => 'http://steamcommunity.com/profiles/76561198092185323',
	'Plotchy' => 'http://steamcommunity.com/profiles/76561198056063859',
	'Pops' => 'http://steamcommunity.com/profiles/76561198162803387',
	'ProfessorCake' => 'http://steamcommunity.com/profiles/76561198103083216',
	'Quintosh' => 'http://steamcommunity.com/profiles/76561198049289245',
	'Radio' => 'http://steamcommunity.com/profiles/76561198090228853',
	'Satan' => 'http://steamcommunity.com/profiles/76561197996097401',
	'ScottJAw' => 'http://steamcommunity.com/profiles/76561198031381554',
	'Snoven' => 'http://steamcommunity.com/profiles/76561198155316177',
	'Tatelax' => 'http://steamcommunity.com/profiles/76561198020918584',
	'TK' => 'http://steamcommunity.com/profiles/76561198072266128',
	'TMP' => 'http://steamcommunity.com/profiles/76561197995400066',
	'ToadySwift' => 'http://steamcommunity.com/profiles/76561198020736248',
	'Tokki' => 'http://steamcommunity.com/profiles/76561198043800052',
	'Tr1ps' => 'http://steamcommunity.com/profiles/76561198082784188',
	'UncleDane' => 'http://steamcommunity.com/profiles/76561198057999536'
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
			$url = $profiles[$person];
			echo '<td class="person">';
			if (isset($url))
				echo '<a href="'.$url.'" target="_blank">';
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