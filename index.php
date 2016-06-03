<?php
$group_id = "admin";
if ($group_id === ($_GET['group'])) {
  $_GET['secret'] = "sam123";
  $_GET['group'] = "TWlsLVNhbQ";
};
$map = "http://www.izurvive.com/#groupb=" . urlencode($_GET['group']) . ";;&secret=" . urlencode($_GET['secret']);

?>
<html>
<head>
  <title>DayZ Overlary</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <script src="konami.js"></script>
  <script>
  var easter_egg = new Konami();
  easter_egg.load('konami.html')
  </script>
</head>
<body>
  <br><br><br>
     <div class="middle">
        <center>
        <br>
        <br>
          <button type="button3" class="button3">
              <a href="<?php echo $map ?>">Izurvive Map</a>
            </button>
            <button type="button3" class="button3">
              <a href="https://www.reddit.com/r/dayz/comments/1tlllt/dayz_standalone_symptoms/">Quick Med</a>
            </button>
            <button type="button3" class="button3">
              <a href="https://docs.google.com/document/d/1y7Z_S8xwKVh90ZKNZ4CI2kqvXF-Mh9gMXvt3fhMSLyY">Med Manual</a>
            </button>
        <br>
          <button type="button3" class="button3">
            <a href="blood.html">Blood</a>
          </button>
          <button type="button3" class="button3">
            <a href="scope.html">Scopes</a>
          </button>
        </center>
    </div>
    <p class="details">Map Details</p>
    <br>
    <p class="link">
      <?php echo $map ?>
    </p>
</body>
</html>
