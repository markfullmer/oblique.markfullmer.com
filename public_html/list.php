<?php

$json = file_get_contents('../data.json');

$data = json_decode($json);

echo '<pre>';
print_r($data);
echo '</pre>';