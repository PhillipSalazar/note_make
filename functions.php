<?php
if (isset($_POST["name"])){
//echo $_POST["name"];
//echo $_POST["area"];
$filez = $_POST["name"];
$dataz = $_POST["area"];
makefilez($filez,$dataz);
}

function makefilez($name,$body) {
  /*
  $file = $name . ".txt";
  $handle = fopen($file, 'w') or die('Cannot open file:  '.$file);
  $data = $body;
  fwrite($file,$data);
  */
  header("Content-type: application/pdf");
  header("Content-Disposition: attachment; filename=$name.pdf");
  // do your Db stuff here to get the content into $content
  echo $body;
}
?>
