<?php

$homepage = file_get_contents('http://localhost:8888/besouro2/zCsv.php');
echo $homepage;

if(file_exists('zorroEpisodes.csv')){ 
	unlink('zorroEpisodes.csv');
	$fp = fopen('zorroEpisodes.csv', 'w');
file_put_contents('zorroEpisodes.csv',$homepage);

fclose($fp);	
}else{
$fp = fopen('zorroEpisodes.csv', 'w');
file_put_contents('zorroEpisodes.csv',$homepage);
//fputcsv($fp, $homepage);
fclose($fp);	
}
?>