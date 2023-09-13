<!DOCTYPE html>
<html>
<style >
body{
background:url('Stadium1.jpg');
background-size:cover;
background-repeat:no-repeat;
margin:0;
padding:0;
}
	table{
		color:#ffffff;
		margin:auto;
		padding:10px 10px;
		margin-top:50px;
		background:linear-gradient(top,yellow 0%,red 100%);
		background:-webkit-linear-gradient(top,yellow 0%,red 100%);
		border: 2px solid black;
	}
	tr{
		border: 2px solid black;
	}
	th{
		font-size:25px;
		border: 2px solid black;
	}
	th.color{
		color:black;
	}
</style>
<head>
	<title>STADIUMS</title>
</head>
<body>
	<button style="background-color: "><a href="user1st.html" style="color:">Back</a></button>
	 <div style="margin-top:225px; style : center" >
	<table align="center">
		<tr>
			<th class="color">STADIUM NAME</th>
			<th class="color">CAPACITY</th>
			<th class="color">DOI</th>
			<th class="color">BOARD NAME</th>
			<th class="color">TEAM's STADIUM</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="call stadium()";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["stadium_name"]."</th>"."<th>".
			$row["capacity"]."</th><th>".
			$row["DOI"]."</th><th>".
			$row["board_name"]."</th><th>".
			$row["team"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>
	</table>
</body>
</html>