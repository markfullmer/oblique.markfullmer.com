<?php

$json = file_get_contents('../data.json');

$data = json_decode($json);
$i = $_GET['i'] ?? array_rand($data);
?>
<html lang="en" style="font-size:1.2rem;">
  <head>
    <title><?php echo $data[$i]->text; ?> | An oblique strategy by Mark Fullmer</title>
    <style>
      a,
      a:visited,
      a:link {
        text-decoration: none;
      }
    </style>
</head>
<body>
<div style="height:80vh;width:90vw;display:table;font-size:2rem;">
  <div style="display:table-cell;text-align:center;vertical-align:middle;">
  <a href="/?i=<?php echo $i; ?>" title="Bookmark this strategy">#</a>
  <h1>
    <?php echo $data[$i]->text; ?>
  </h1>
  <a href="/" title="Get a new strategy">></a>
  </div>
</div>
<p style="font-size:2rem;">
  <a href="/wha.html">Wha?</a>
</p>
</body>
</html>