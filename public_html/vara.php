<?php
$conn = mysqli_connect('localhost','root','root','varaukset'); 
switch ( $_GET["value"]) {
	case "aitta1":
		$query ="UPDATE aitta SET Tuneid = 'juoppo' WHERE ID = '101'"; $_GET["name"];
		break;
	
	default:
		# code...
		break;
}

     $query ="UPDATE alltunes SET Tuneid = 'juoppo' WHERE ID = '101'"; $_GET["name"];
    header("Refresh:0; url=index.php");
?>