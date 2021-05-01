<!DOCTYPE html>
<html>
<head>
	<title>Activity Log</title>
	 <link rel = "stylesheet"
      href = "style/admin.css">

</head>
<body style="background-image: url('danilo.jpg');">
	<div class="pane">
	<table class="all_table" align="center">
		<tr>
			<th colspan="5" id="head">Activity Log</th>
		</tr>
		<tr>
			<th>ID</th>
			<th>User</th>
			<th>Activity</th>
			<th>LogIn Time</th>
			
		</tr>

	
		<?php  
		$con = mysqli_connect('localhost','root','','awit');
		$query = ("SELECT * FROM lab");
		$result = mysqli_query($con,$query);
		while($row=mysqli_fetch_array($result)){
		?>
		<tr>
		<td><?php echo $row['ID']; ?></td>
		<td><?php echo $row['User'] ;?></td>
		<td><?php echo $row['Activity']; ?></td>
		<td><?php echo $row['Time']; ?></td>
	
		
		</tr>';
	<?php 
}
	 ?>		
	 <a href="s1.php"><button>Logout</button></a>
	
		
		
	</table>
</div>

</body>
</html>