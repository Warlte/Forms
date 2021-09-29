<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

        <link rel="stylesheet" href="css/master.css">

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

$artiklar = [
          ["rubrik"=>"Lamborghini", "pris"=>800000,"bild"=>"bild1.jpg","beskrivning" => "skit traktor" ],
          ["rubrik"=>"new Holland", "pris"=>1000000,"bild"=>"bild2.jpg","beskrivning" => "en fin traktor till ett attraktivt pris" ],
          ["rubrik"=>"john deere", "pris"=>2000000,"bild"=>"bild3.jpg","beskrivning" => "fin fin" ],
          ["rubrik"=>"massey ferguson", "pris"=>1000000,"bild"=>"bild4.jpg","beskrivning" => "bäst" ],
          ["rubrik"=>"Lamborghini", "pris"=>800000,"bild"=>"bild1.jpg","beskrivning" => "skit traktor" ],
          ["rubrik"=>"new Holland", "pris"=>1000000,"bild"=>"bild2.jpg","beskrivning" => "en fin traktor till ett attraktivt pris" ],
          ["rubrik"=>"john deere", "pris"=>2000000,"bild"=>"bild3.jpg","beskrivning" => "fin fin" ],
          ["rubrik"=>"massey ferguson", "pris"=>1000000,"bild"=>"bild4.jpg","beskrivning" => "bäst" ],
          ["rubrik"=>"massey ferguson", "pris"=>1000000,"bild"=>"bild4.jpg","beskrivning" => "bäst" ],
          ["rubrik"=>"Lamborghini", "pris"=>800000,"bild"=>"bild1.jpg","beskrivning" => "skit traktor" ],
          ["rubrik"=>"new Holland", "pris"=>1000000,"bild"=>"bild2.jpg","beskrivning" => "en fin traktor till ett attraktivt pris" ],
          ["rubrik"=>"john deere", "pris"=>2000000,"bild"=>"bild3.jpg","beskrivning" => "fin fin" ],
          ["rubrik"=>"massey ferguson", "pris"=>1000000,"bild"=>"bild4.jpg","beskrivning" => "bäst" ],

          ];

//var_dump($artiklar);

//for ($i=0; $i < sizeof( $artiklar ); $i++) {

echo"<div class=\"container \">\n";


$counter =0;
foreach ($artiklar as $artikel) {

  if ($counter%3==0){
    echo "<div class=\"row\">";

  }


echo <<<ARTIKEL
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="bilder/{$artikel['bild']}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{$artikel['rubrik']}</h5>
    <p class="card-text">{$artikel['beskrivning']}</p>
    <p class="card-text">pris: {$artikel['pris']} kr</p>

    <form action="addtocart.php" metod="get">
        <input type="hidden" name="artikel_id" value="{$counter}">
        <input class="btn btn-primary" type="submit" value="Köp">
        <select name="antal" id="select"  >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </form>
  </div>
</div>

ARTIKEL;

$counter++;

if ($counter%3==0){
  echo "</div>";

}
}


echo"</div>";

?>


<!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>
