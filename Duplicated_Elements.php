<?php

$nums = array(5, 1, 4, 6, 7, 3, 5, 7, 3);
$lenght = count($nums);

echo "Elements in the array are:\n";
for ($i = 0; $i < $lenght; $i++) {
    echo "$nums[$i] ";
}


echo "\nDuplicate elements in the array are:\n";
for ($i = 0; $i < $lenght; $i++) {
    for ($j = $i + 1; $j < $lenght; $j++) {
        if ($nums[$i] == $nums[$j])
            echo "$nums[$j] ";
    }
}
?>