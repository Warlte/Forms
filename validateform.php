<?php

$username_dirty = $_GET['surname'];
$username_clean = filter_input(INPUT_GET, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
//if(isset($_GET['animals'])){
//  $animals = $_GET['animals'];
//  echo htmlspecialchars($username_ani,ENT_QUOTES);
//}



  echo '<br>';
  //$username_ani = filter_input(INPUT_GET, 'animals', FILTER_SANITIZE_SPECIAL_CHARS);
  echo htmlspecialchars($username_dirty,ENT_QUOTES);
  echo '<br>';
for ($i=0; $i <=10 ; $i++) {
  echo $username_clean;
  echo '<br>';
}
  //echo htmlspecialchars($username_ani,ENT_QUOTES);






 ?>
