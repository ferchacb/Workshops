<?php 
        
    $file = fopen($argv[1],"r");
    $myfile = fopen($argv[2], "w");
    $people = array();
    
    while (($row = fgetcsv($file, 0, ",")) !== FALSE) {    
        $row++;
        array_push($people,$row[0] . " " . $row[1] . " Lives in" . $row[3] . " And his phone number is: " . $row[2] . "\n");
    }
    fwrite($myfile, $people[1] . "\r\n" . $people[2]);
    echo "Se guardó correctamente";
    fclose($file);
?>