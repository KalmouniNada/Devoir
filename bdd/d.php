<?php
include_once 'connect.php';

switch ($_GET["table"]) {
	
	case "client":
		deleteClient($_GET);
		break;
	case "colis":
		deleteColis($_GET);
		break;		
	default:
		;
	break;
}


function deleteClient($data){
	global $conn;
	
	$sql = "DELETE FROM client where ( Id_Clie =".$data["Id_Clie"].")";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
	    echo "client deleted successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}

function deleteColis($data){
	global $conn;
	
	$sql = "DELETE FROM colis where ( Num_Coli =".$data["Num_coli"].")";
	//echo $sql;
	if ($conn->query($sql) === TRUE) {
	    echo "document deleted successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}

$conn->close();
