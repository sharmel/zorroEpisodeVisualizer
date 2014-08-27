<?php

$contents = file('zorroEpisodes.txt'); 

$indexCount = count($contents);
//echo "<b>Current total line of logs: </b> " . $indexCount;

//echo "<br>";
sort($contents);


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


        	}
		
	}

?>