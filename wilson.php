<?php
$data = file_get_contents("dataset.json");
$data = json_decode($data);

foreach ($data as $person) {
    if ($person->address->city == "n City") {
        
        echo $person->id . " - " .
             $person->first_name . " " .
             $person->last_name .
             " (" . $person->address->city . ")";
        echo "<\n>";
    }
}
?>