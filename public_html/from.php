<?php

$json = file_get_contents('../data.json');

$data = json_decode($json);
$i = $_GET['i'] ?? array_rand($data);
?>
<html>
  <head>
    <title><?php echo $data[$i]->text; ?> | An oblique strategy by Mark Fullmer</title>
</head>
<p><?php echo $data[$i]->url; ?></p>
<a href="/">Back</a>
</html>