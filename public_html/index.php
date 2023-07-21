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
    <a href="/index.php?i=<?php echo $i; ?>">#</a>
    <?php echo $data[$i]->text; ?>
    <a href="/index.php">></a>
  </h1>
</div>
<a href="/wha.html">Wha?</a>
</html>