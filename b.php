<?php
$array = ['apple', 'banana', 'cherry', 'date'];

function insertItem(&$array, $item, $position) {
    if ($position < 0 || $position > count($array)) {
        echo "Error: Invalid position. Please provide a position between 0 and " . count($array) . ".<br>";
        return;
    }
    
    array_splice($array, $position, 0, $item);
}

$itemToInsert = 'orange';
$positionToInsert = 2; 
insertItem($array, $itemToInsert, $positionToInsert);
echo "Updated Array: ";
print_r($array);
?>