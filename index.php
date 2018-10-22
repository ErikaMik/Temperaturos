<!-- 

$title = "Puslapis";
$body = "Tekstas";

require('template_1.php'); -->
<?php
include('functions.php');

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>PHP 9 paskaita</title>
</head>
<body>
	<div class="container">
	<!-- <?php
		echo "Šiandien lauke yra " . getFeel(15) . "<br />";
		// echo sprintf($template_1, getFeel(10));
	?> -->
	<table class="table">
	<tr><th>Temperatūra</th><th>Pojūtis</th></tr>
	<?php
	for ($i=0; $i <= 35; $i++) { 
		echo "<tr><td>" . $i . "</td><td>" . getFeel($i) . "</td></tr>";
	} ?>
</table>
</body>
</html>