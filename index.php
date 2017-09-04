<?php
session_start();
require_once 'source/php/helper/helper.php';
define("CONFIG_PATH", "resource/connections/");
$files = scandir("resource/connections/");

if(isset($_GET["s"])){
	if($_GET['s'] == 1){
		if($_POST['conName'] != null){
			$con = json_encode($_POST);
			$configFile = fopen(CONFIG_PATH.$_POST['conName'].".json", "w");
			fwrite($configFile, $con);
			fclose($configFile);
			$data = json_decode($con,true);
			$redirect = new redirect("source/db.php",$data);
		}else {
			echo "Bitte die Felder ausfüllen";
		}
	}
}

?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Set Database</title>
	</head>
	<body>
		<form action="index.php?s=1" method="post">
			<input type="text" placeholder="Con1" name="conName">
			<select name="driver">
				<option disabled selected>Bitte einen Datenbanktreiber Wählen</option>
				<option value="mysql">MySQL</option>
			</select>
			<input type="text" placeholder="localhost" name="host" value="localhost">
			<input type="number" min="0" max="65535" name="port" value="3306">
			<input type="text" placeholder="utf8" name="charset" value="utf8">
			<input type="text" placeholder="dbname" name="dbname">
			<input type="text" placeholder="root" name="username">
			<input type="password" placeholder="*****" name="password">
			<button type="submit">Weiter</button>
			</form>
			oder
			<form action="index.php?s=" method="post">
			<select>
				<option disabled selected>Bitte Wählen sie eine Gespeicherte Verbindung aus</option>
				<?php for($i=2;$i <= max(array_keys($files)); $i++){
				$fn = explode(".", $files[$i]);
				echo '<option value="'.$files[$i].'">'.$fn[0].'</option>';
				}?>
			</select>
			<button type="submit">Weiter</button>
		</form>
	</body>
</html>