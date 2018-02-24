<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet">
<link href="nav-box" type="text/css" rel="stylesheet">
</head>
<body>
  <?php
  include 'functions.php';
  ?>
  <div class="container">
    <div class="row">
<div class="header">
  <h1>Note Maker</h1>
</div>
</div>
<div class="row">
<div class="nav-box">
</div>
</div>
<div class="row">
  <div class="formz">
    <form id="formz" action="functions.php" method="post">
      <p>File name:</p>
      <input id="file_name" type="text" value="" name="name">
      <br>
      <br>
      <textarea name="area" value=" "></textarea>
      <br>
      <br>

    </form>
<div id="downloadBtn" class="buttonz"><p>Download!</p></div>
  </div>
</div>
<?php

?>

  </div>
  <script src="js/ui.js"></script>
</body>
</html>
