<?
	include("dblib.php");

	$password=$_POST['password'];

	if(!$password)echo "<script>alert('변경할 PASSWORD를 올바르게 입력해주세요.');location.replace('viewChgAdminPassword.php');</script>";

	$conn=mysqli_connect($db_host,$db_user,$db_passwd,$db_name) or die("fail");

	$query="update admin set password='$password' where id='admin'";

	$ret=mysqli_query($conn,$query);

	if($ret){
		echo "<script>alert('변경이 완료되었습니다.');location.replace('enter_admin.php');</script>";
	}else{
		echo "<script>alert('변경에 실패했습니다.');location.replace('enter_admin.php');</script>";
	}

	mysqli_close($conn);
?>
