<?php

$contents = file('zorroEpisodes.txt'); 

//foreach ($contents as $number => $content1) {
	//echo "<b>{$number}</b> : "  . $content1 . "<br />\n";	
//}
$indexCount = count($contents);
//echo "<b>Current total line of logs: </b> " . $indexCount;

//echo "<br>";
sort($contents);


//for($index=0; $index < $indexCount; $index++) {
        if ($contents){
        	foreach ($contents as $number => $line){
        		$content = explode(" ", $line);

        echo '"Timestamp": ';
        print($content[0]);
        echo ", ";
        
    	echo '"Action": ';
		print($content[1]);
		echo ", ";
		
		echo '"Subtype": ';
		print($content[2]);
		echo ", ";
		
		echo '"Duration": ';
		print($content[3]);
		echo ", ";

		echo '"Flag": ';
		print($content[4]);
		//print "\n";


        	}
		
	}

//}
?>