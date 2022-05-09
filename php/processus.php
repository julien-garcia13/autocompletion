<?php
$db = new PDO("mysql:host=localhost;dbname=autocompletion", "root", ""); // Connexion à la base de données.
if(isset($_POST["query"]))
{	
	$data = array();
	$condition = preg_replace('/[^A-Za-z0-9\- ]/', '', $_POST["query"]);
	$query = "SELECT `name` FROM `products` WHERE `name` LIKE '%".$condition."%' ORDER BY id DESC LIMIT 5";
	$resultat = $db->query($query);
	$replace_string = '<b>'.$condition.'</b>';
	foreach($resultat as $row)
	{
		$data[] = array('name' => str_ireplace($condition, $replace_string, $row["name"]));
	}
	echo json_encode($data);
}
$post_data = json_decode(file_get_contents('php://input'), true);
?>
