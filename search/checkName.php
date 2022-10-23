<?php
include "conn.php";

$stmt = $pdo->prepare("SELECT * FROM `member` WHERE username='".$_GET['username']."'");
$stmt->execute();

$check = array();
function addarr($data){
	global $check;
	array_push($check,$data);

}
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
	addarr($row["username"]);
}

sleep(1);

if (!in_array( $_GET["username"], $check,true )) {
	echo "okay";
} else {
	echo "denied";
}
