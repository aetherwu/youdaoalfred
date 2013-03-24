<?php

require_once('workflows.php');
$w = new Workflows();
$query = urlencode($argv[1]);
$icon = 'youdao.png';


$url = "http://fanyi.youdao.com/openapi.do?&keyfrom=PersonalAlfred&key=1030208618&type=data&doctype=json&version=1.1&q=". $query;
$suggestions = $w->request( $url );
$suggestions = json_decode( $suggestions );

echo $query ."\n". $suggestions->basic->phonetic ."\n". implode(", ", $suggestions->basic->explains);

?>