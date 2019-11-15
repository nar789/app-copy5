<?
	include("dblib.php");
	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name);
	$query="select url from $tablename";

	$ret=mysqli_query($conn,$query);
	$data=array();
	while($row=mysqli_fetch_array($ret)){
		array_push($data,$row);
	}
	mysqli_close($conn);
	echo urlencode(json_encode($data));
?>
