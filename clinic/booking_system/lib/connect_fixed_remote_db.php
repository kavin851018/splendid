<?php
/*
Connect to the remote mysql server (140.117.44.50)

Input: none
Output:
	$conn(resource): database connection.
*/
function connect_fixed_remote_db()
{
	$RemoteServer = "140.117.44.50";
	$RemoteServerPassword = "LiveABC@nsysu";
	$RemoteServerDB = "gept_utf8_db";
	$conn = mysql_connect($RemoteServer, 'root', $RemoteServerPassword) or die(mysql_error());
	//mysql_query("Set Names 'utf8'", $conn) or die(mysql_error());
	mysql_select_db($RemoteServerDB, $conn) or die(mysql_error());
	mysql_query("SET CHARACTER SET 'big5'", $conn);
	return $conn;
}
?>
