<?php
  $link = new mysqli("localhost", "root","","practice");
  $sql = "SELECT * FROM image";
  $result = mysql_query("$sql");
  mysql_close($link);
?>
<body>
<img src="" width="175" height="200" />
</body>