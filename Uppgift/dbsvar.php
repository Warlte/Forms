<?php
	//vi includerar dbconnect så att vi kan nå databasen och hämta information
	include("dbconnect.php");
	
	
	if($_REQUEST['countyid']!=""){
		//vi ansluted till databasen
		$dbpdo=anslutdb();
		$cidc = filter_input(INPUT_GET, 'countyid', FILTER_SANITIZE_STRING);
		
		//vi hämtar informationen vi behöver ifrån databasen och lagrar den
		$sql="SELECT  geo_municipalities.name,geo_municipalities.municipalityid,geo_municipalities.countyid  FROM  geo_municipalities, geo_counties  WHERE geo_municipalities.countyid=:cid and geo_counties.countyid=geo_municipalities.countyid";
		
		
		$stmt=$dbpdo->prepare($sql);
		$stmt->bindParam(":cid",$cidc,PDO::PARAM_STR);
		$stmt->execute(); 
		
		//vi skriver ut vårat svar som Json kod så att det kan användas lättare
		$dbarray=$stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode( $dbarray,JSON_PRETTY_PRINT ); 
		
		
	}else{
	echo json_encode( array( "namn"=>"John","time"=>"2pm" ) );
	
	}
	
?>