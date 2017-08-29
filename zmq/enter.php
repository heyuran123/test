<?php
echo "Press Enter when the workers are ready: ";
$fp = fopen('php://stdin', 'r');
$line = fgets($fp, 512);
fclose($fp);
echo "Sending tasks to workers...", PHP_EOL;