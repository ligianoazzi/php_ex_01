<?php 
	require_once "GeneratorFile.php";
	require_once "CoordinatesExtractor.php";
	require_once "CoordinateInterface.php";
	require_once "HTML.php";
	require_once "CSV.php";		

	$extract = new GeneratorFile('array');

	$getData = new CoordinatesExtractor();

	echo "<div> Generating HTML: ".$getData->getting( $extract, new HTML() )."</div>";	

	echo "<div> Generating CSV: ".$getData->getting( $extract, new CSV() )."</div>";	



?>