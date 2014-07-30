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

        	echo "[";
        	foreach ($contents as $number => $line){
        		$content = explode(" ", $line);
print "\n";
echo "{";
		print "\n";
        echo '"Timestamp": ';
        print($content[0]);
        echo ", ";
        print "\n";
        
    	echo '"Action": ';
		print "\"$content[1]\"";
		echo ", ";
		print "\n";
		
		echo '"Subtype": ';
		print "\"$content[2]\"";
		echo ", ";
		print "\n";
		
		echo '"Duration": ';
		print($content[3]);
		echo ", ";
		print "\n";

		echo '"Flag": ';
		print($content[4]);
		//print "\n";
echo "}";
echo ",";
//print "\n";
        	}
        	print "\n";
        	echo "]";
		
	}

//}
?>