
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>category</h1>
	<table>
		<tr>
			<th>Category</th>
		</tr>
		
			<?php 
			$conn = mysqli_connect("localhost","root","","ecommerce");
			$q= "SELECT * FROM cat";
			$r = mysqli_query($conn,$q);
			while($row = mysqli_fetch_array($r)){
			echo'
			

			<tr>
				<td><a href="">'.$row['cat_title'].'</a></td>';
		
			}
			 ?>
				</tr>




	</table>

<table>
		<tr>
			<th>brand</th>
		</tr>
		
			<?php 
			$conn = mysqli_connect("localhost","root","","ecommerce");
			$q= "SELECT * FROM brand";
			$r = mysqli_query($conn,$q);
			while($row = mysqli_fetch_array($r)){

		
			 ?>

			<tr>
				<td><a href=""><?php echo $row['brand_title']; ?></a></td>
			</tr>
			<?php 
			}
			 ?>




	</table>


</body>

</html>