<?php
include_once 'connect.php';

switch ($_GET["table"]) {
	case "client":
		selectClient($_GET);
		break;
	case "colis":
		selectColis($_GET);
		break;	
	default:
		;
	break;
}

function selectclient($data){
	global $conn;
	
	$sql = "SELECT * FROM client where Id_Client =".$data["Id_Client"];
	echo $sql."<br>";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "id_client: " . $row["Id_Client"]. " Tel_Client: " . $row["Tel_Client"]." Adress_Client: " . $row["Adress_Clinet"]."<br>";
		}
		echo "Client Affiche avec succe!";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}

function selectcolis($data){
	global $conn;
	
	$sql = "SELECT * FROM colis where ( Num_Colis=".$data["Num_Colis"].")";
	if ($conn->query($sql) === TRUE) {
	    echo "Colis affiche avec succe!!";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}	
}
}
$conn->close();
?>
