<?php
$file = "results.txt";

if (file_exists($file)) {
    echo file_get_contents($file);
} else {
    echo json_encode([]);
}
?>
