<meta http-equiv="Content-type" content="text/html;charset=utf-8"/>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h3 class="mb-5 mt-5 text-center">[redirect-apps] administrator page r2.0.1</h3>
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">App Name</th>
			      <th scope="col">Redirect URL</th>
			      <th scope="col">Update</th>
			    </tr>
			  </thead>
			  <tbody>	

				  <?
				  	include("dblib.php");
					$cnt=count($appname);
					for($i=1;$i<=$cnt;$i++){
						$idx=$i-1;
				  ?>

			  	<tr>
			  		<th scope="row"><?=$i?></th>
			  		<td><?=$appname[$idx]?></td>	
			  		<td>
			  			<?
			  				echo "<input type=text id=url$i class=url>";		
			  			?>
			  		</td>
			  		<td>
			  			<?
			  				echo "<button class='btn btn-info' onclick='update($i)'>수정</button>";		
			  			?>
			  		</td>
			  	</tr>

			  		<?
			  			}
			  		?>

				  
			  </tbody>
			</table>
		</div>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html>
