<?php
$conn_string = "host=ec2-3-216-129-140.compute-1.amazonaws.com port=5432 dbname=d96skcv75vgijc user=ymhxtmwgaprvqp password=2e80c41436598527d8a60a5d19d0937b0e5d36b0f0d8ffe467220ded8c167a15"
$dbconn = pg_connect($conn_string);
if(isset($_POST['username'])){
	$username = $_POST['username'];
}
if(isset($_POST['pass'])){
	$pass = $_POST['pass'];
}
$result = pg_query($dbconn, query : "select * from tbl_account");
while ($row = pg_fetch_row($result)){
	if($row[0]==$username && $row[1]==$pass){
		echo" Login success! ";
	}
}
?>
