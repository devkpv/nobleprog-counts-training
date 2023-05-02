<?php
$url = getenv('URL') ?: '';
$needle = getenv('NEEDLE') ?: '';
$caseSensitive = (int)getenv('CASE_SENSITIVE') ?: 0;

$data = file_get_contents($url);
($data !== false) ?: exit(1);
($caseSensitive !== 0) ?: ($data = strtolower($data));

echo substr_count($data, $needle) . PHP_EOL;