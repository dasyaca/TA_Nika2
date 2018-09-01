<?php
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("nikaannisa", $con);


$result = mysql_query("select id_calon,sum(total_suara) as jumlah from total_suara group by id_calon");

$rows = array();
while($r = mysql_fetch_array($result)) {
	$row[0] = $r[0];
	$row[1] = $r[1];
	
	array_push($rows,$row); //mengirim data array $row ke $rows
}

print json_encode($rows, JSON_NUMERIC_CHECK); //encode ke json

mysql_close($con);
?> 
