<?php
include_once 'connect.php';

switch ($_GET["table"]) {
	
	case "client":
		createClient($_GET);
		break;
	case "clois":
		createColis($_GET);
		break;		
	default:
		;
	break;
}


function createClient($data){
	global $conn;
	
	$sql = "INSERT INTO client (Id) VALUES ("+$data["Id"]+")";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
	    echo "New record of type client created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}

function createColis($data){
	global $conn;
	
	$sql = "INSERT INTO colis (num, poid, adress) VALUES (".$data["Num"].", ".$data["Poid"].", ".$data["Adress"].")";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
	    echo "New record of type colis created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}
$conn->close();
