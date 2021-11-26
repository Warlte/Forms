<?php

function nav(){
echo <<<NAV
<header>
  <a href="start"> start</a>
  <a href="omoss">om oss</a>
  <a href="support">support</a>

  <form action="inlogg.php" method="post">
  <input type="text" name="usrname">
  <input type="password" name="pasword">
  <input type="submit" name="knapp" value="send form">
  </form>
</header>
NAV;
} ?>
