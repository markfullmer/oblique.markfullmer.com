<?php

$json = file_get_contents('../data.json');

$data = json_decode($json);
$i = $_GET['i'] ?? array_rand($data);
?>
<html>
  <head>
    <title><?php echo $data[$i]->text; ?> | An oblique strategy by Mark Fullmer</title>
</head>
<div style="height:90vh;width:90vw;display:table;">
  <h1 style="display:table-cell;text-align:center;vertical-align:middle;">
    <?php echo $data[$i]->text; ?>
  </h1>
</div>
<a href="/wha.html">Wha?</a>
</html>