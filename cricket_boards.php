<!DOCTYPE html>
<html>
<style >
body{
background:url('img/board.jpg');
background-size:cover;
}
	table{	
		color:#ffffff;
		margin:auto;
		padding:10px;
		margin-top:50px;
		background:linear-gradient(top,orange 0%,black 100%);
		background:-webkit-linear-gradient(top,orange 0%,black 100%);
		border: 2px solid black;
	}
	tr{
		border: 2px solid black;
	}
	th{
		font-size:30px;
		border: 2px solid black;
	}
	th.color{
		color:#ffffff;
	}
</style>
<head>
	<title>CRICKET BOARDS</title>
</head>
<body>
	<button style="background-color: "><a href="admin1st.html" style="color:">Back</a></button>
	 <div style="margin-top:225px; style : center" >
	<table align="center">
		<tr>
			<th class="color">BOARD NAME</th>
			<th class="color">CHAIRMAN</th>
			<th class="color">TEAM's BOARD</th>
			<th class="color">DOA</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="call cb()";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["board_name"]."</th>"."<th>".
			$row["chairman"]."</th><th>".
			$row["team"]."</th><th>".
			$row["DOA"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>
	</table>
</body>
</html>