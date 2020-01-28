<?
	include("dblib.php");

	$password=$_POST['password'];
	$id=$_POST['id']; 

	if(!$id || !$password)echo "<script>alert('ID 또는 PASSWORD를 올바르게 입력해주세요.');location.replace('viewLoginAdmin.php');</script>";

	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name) or die("fail");

	$query="select password from admin2 where id='$id'";

	$ret=mysqli_query($conn,$query);

	while($row=mysqli_fetch_array($ret)){
		if($row['password']==$password){
			echo "<script>location.replace('enter_admin.php');</script>";
		}else{
			echo "<script>alert('ID 또는 PASSWORD가 올바르지 않습니다.');location.replace('viewLoginAdmin.php');</script>";
		}
		break;
	}

	mysqli_close($conn);
?>
