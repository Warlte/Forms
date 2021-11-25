
<?php
	
	function anslutdb(){
		
		try {
			// vi har skrivt in vilken databas som skall väljas och login information till databasen 
			$conn = new PDO('mysql:host=sql303.epizy.com;dbname=epiz_30328823_landSektorer; charset=utf8', 'epiz_30328823', 'iXuliTpYPdM2s');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			
			/*
				PDO::ERRMODE_SILENT – database-related errors will be ignored.
				PDO::ERRMODE_WARNING – database-related errors will cause a warning to be emitted, but execution will continue.
				PDO::ERRMODE_EXCEPTION – database-related errors will cause a PDOException to be thrown.
				
			*/
			} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}
		
		
		return $conn;
	}
 	
?>