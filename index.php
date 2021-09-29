<?php
  echo "<h1> hej </h1>";

  $val="klicka här";

echo <<<FORM
  <form action="validateform.php" method="get">

    <input type="text" name="surname" value="ange ditt namn">

    <input type="submit" name="subTextForm" value="{$val}">
    <br></br>
    <!--
    <input type="radio" name="animals" value="dog">
    <input type="radio" name="animals" value="cat">
    <input type="radio" name="animals" value="bear">
    <input type="radio" name="animals" value="little girl">
    -->

  </form>
FORM;
?>
