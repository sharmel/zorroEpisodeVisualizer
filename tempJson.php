<?php

$homepage = file_get_contents('http://localhost:8888/besouro2/zJson.php');
echo $homepage;

if(file_exists('zorroEpisodes.json')){ 
	unlink('zorroEpisodes.json');
	$fp = fopen('zorroEpisodes.json', 'w');
file_put_contents('zorroEpisodes.json',$homepage);

fclose($fp);	
}else{
$fp = fopen('zorroEpisodes.json', 'w');
file_put_contents('zorroEpisodes.json',$homepage);
//fputcsv($fp, $homepage);
fclose($fp);	
}
?>