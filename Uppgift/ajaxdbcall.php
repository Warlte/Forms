
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form name="myForm" method="GET">
<input type="hidden" name="time">
</form>
<div id ="ajaxsvar"></div>


<select name="län" id="län">
<?php
//vi  includerar dbconnect en gång så vi kan använda den senare.
require_once 'dbconnect.php';

/* hämtar listan ifrån databasen så att den finns i koden så att det blir lättare att ändra i listan senare */
$db=anslutdb();
$stmt=$db->query('select * from geo_counties');
$stmt->execute();
$lan=$stmt->fetchAll();

//den skriver ut alla län som den fick ifrån databasen
foreach ($lan as $artikel) {
	echo "<option value='{$artikel['countyid']}'> {$artikel['name']} </option>";
}
echo '</select>';



$län['countyid']=1;
//sätter ett initialt värde på countyid så att det kommer se snyggare ut när man startar sidan


/* hämtar listan ifrån databasen så att den finns i koden så att det blir lättare att ändra i listan senare */
// communer i lännet
$db=anslutdb();
$stmt=$db->query('select * from geo_municipalities');
$stmt->execute();
$kommuner=$stmt->fetchAll();

/* foreach loopen mest till för initial värdet som man gavs tidigare i koden */
echo '<select name="kommun1" id="kommun1">';
foreach($kommuner as $kommun){
	if($artikel['countyid']== $kommun['countyid']){
		echo "<option> {$kommun['name']} </option>";
	}
}
echo '</select>';


/* hämtar listan ifrån databasen så att den finns i koden så att det blir lättare att ändra i listan senare */
$db=anslutdb();
$stmt=$db->query('select * from geo_stad');
$stmt->execute();
$stader=$stmt->fetchAll();

//skapar den sista select boxen
echo '<select name="stad1" id="stad1">';
foreach($stader as $stad){
	if($kommun['municipalityid']== $stad['municipalityid']){
		echo "<option> {$stad['name']} </option>";
	}
}
echo '</select>';





	//	
	?>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
	
	/*
	skriver ut alla kommuner i det valda länet från svaret man får ifrån en frågan till dbsvar
	*/
	//document ready gör att det laddas när sidan startas
	$(document).ready(function(){
            $("#län").change(function(){

				var selectedcounty = $('#län').val();

				//vi requestar information och sedan ändrar.
				$.get( "dbsvar.php", {countyid: selectedcounty }, function( data ) {

					var size=data.length;
					var newtext="";
					console.log(size);
					// tar bort alla tidigare alternativ så att dom 
					$('#kommun1').children().remove();
					/* vi gör en loop och lägger till alla namn och ids vi har fått ifrån databasen i den andra select boxen */
					for (i = 0; i < size; i++){
					$('#kommun1').append($('<option>',{
						//vi ger värdet av kommunens id här utifrån vad vi får av databasen
						value:data[i].municipalityid,
						//vi ger namn till kommunen utifrån vad som har gets av databasen
						text:data[i].name
						

					}));
				}

				$( "#ajaxsvar" ).html( newtext );


 			console.log(newtext);
            }, "json" );		
		});

		//SLUTET PÅ DEN FÖRSTA ÄNDRINGEN AV SELECTBOX 1

		// ___________________________________________________________________________________________________


/* skriver alla städer i den valda kommunen utifrån vad dbsvar2 får av databasen */
		$("#kommun1").change(function(){

				var selectedkommun = $('#kommun1').val();


				//vi requestar information och sedan ändrar.
				$.get( "dbsvar2.php", {countyid: selectedkommun }, function( data ) {

					var size=data.length;
					var newtext="";
					console.log(size);
					// tar bort alla tidigare alternativ så att dom 
					$('stad1').children().remove();
					/* vi gör en loop och lägger till alla namn och ids vi har fått ifrån databasen i den andra select boxen */
					for (i = 0; i < size; i++){
					$('#stad1').append($('<option>',{
						//det finns inte mycket av en anledning just nu att ge ett värde ifrån databasen till valen eftersom att det inte används just nu
						value:i,
						//vi ger namn till kommunen utifrån vad som har gets av databasen
						text:data[i].name
						

					}));
					}

				$( "#ajaxsvar" ).html( newtext );


 			console.log(newtext);
            }, "json" );	
			// det här är slutet på den första scriptet


			
});

		//slutet på den andra	
			

	});
	</script>
	
<?php
	echo"</body>";
	echo"</html>";
?>