<?php
$query = 'macbook';
$number_of_pages = '3';

$pages = array();

if ( isset($number_of_pages) AND $number_of_pages > 1 ) {
	for ( $i = 1; i <= $number_of_pages; $i++ ) {
		$query = "https://www.avito.ru/moskva/noutbuki?p=$i&s=101&q=$query";
		array_push($pages, $query);
	}
}

foreach ($pages as $page) {
	 $dom = file_get_contents($page);

	 preg_match_all('<div class="item item-table', $dom, $matches);
}

echo $matches;

