<?php 
	$alamatServer = "localhost";
	$userBasisData = "postgres";
	$passwordBasisData = "magnumfilter";
	$namaBasisData = "dbfutsal";

	$host       =  "localhost";
	$dbuser     =  "postgres";
	$dbpass     =  "magnumfilter";
	$port       =  "5432";
	$dbname     =  "db_futsal";

	header('Content-Type: application/json; charset=utf-8');

	function ambilSemuaDataPenduduk($host, $dbname, $dbpass, $dbuser, $port) {
		try {


			$objekKoneksiBasisData = new PDO("pgsql:dbname=$dbname;host=$host", $dbuser, $dbpass);

			$objekKoneksiBasisData->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

			$objekPerintah = $objekKoneksiBasisData->prepare("SELECT * FROM admin");
			$objekPerintah->execute();

			$hasilQuery = $objekPerintah->fetchAll();
			
			echo json_encode($hasilQuery);

			$objekPerintah2 = $objekKoneksiBasisData->prepare("SELECT * FROM berita");
			$objekPerintah2->execute();

			$hasilQuery = $objekPerintah2->fetchAll();

			echo json_encode($hasilQuery);

			$objekPerintah = $objekKoneksiBasisData->prepare("SELECT * FROM club");
			$objekPerintah->execute();

			$hasilQuery = $objekPerintah->fetchAll();
			
			echo json_encode($hasilQuery);

			$objekPerintah = $objekKoneksiBasisData->prepare("SELECT * FROM official");
			$objekPerintah->execute();

			$hasilQuery = $objekPerintah->fetchAll();
			
			echo json_encode($hasilQuery);

			$objekPerintah = $objekKoneksiBasisData->prepare("SELECT * FROM pemain");
			$objekPerintah->execute();

			$hasilQuery = $objekPerintah->fetchAll();
			
			echo json_encode($hasilQuery);

			$objekPerintah = $objekKoneksiBasisData->prepare("SELECT * FROM register");
			$objekPerintah->execute();

			$hasilQuery = $objekPerintah->fetchAll();
			
			echo json_encode($hasilQuery);


			$objekKoneksiBasisData = null;

		} catch(PDOException $e) {


			echo "Sebab gagalnya: " . $e->getMessage();
		}
	}

	ambilSemuaDataPenduduk($host, $dbname, $dbpass, $dbuser, $port);
?>
