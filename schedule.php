<!DOCTYPE html>
<html>
<style >
	body{
		background:url('schedule.jpg');
	}
	table{
		background:linear-gradient(top,yellow 0%,#ffd700 100%);
		background:-webkit-linear-gradient(top,yellow 0%,#ffd700 100%);
		padding:10px;
		border: 2px solid black;
	}
	tr{
		border: 2px solid black;
	}
	th{
		font-size:25px;
		border: 2px solid black;
	}
	table.t{
	background:transparent;
	border:transparent;
	}
	h2{
	background:linear-gradient(top,royalblue 0%,blue 100%);
	background:-webkit-linear-gradient(top,royalblue 0%,blue 100%);
	width:600px;
	height:35px;
	}
	input[type=submit]{
	border:none;
	outline:none;
	border:2px #fff solid;
	background:black;
	border-radius:20px;
	box-sizing:border-box;
	color:#fff;
	font-size:16px;
	font-weight:bold;
	font-style:italic;
	padding:8px;
	text-align:center;
	cursor:pointer;
	}
	input[type=submit]:hover{
	background:linear-gradient(top,black 0%,red100%);
	background:-webkit-linear-gradient(top,black 0%,red 100%);
	}
</style>
<head> 
	<title>SCHEDULES</title>
</head>
<body>
	<button style="background-color:"><a href="admin1st.html" style="color:">Back</a></button>
	 <div style="margin-top:115px; style : center" >
	<table align="center">
		<tr>
			<th>DATE</th>
			<th>TEAM1</th>
			<th>TEAM2</th>
			<th>MATCH NUMBER</th>
			<th>VENUE</th>
		
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select * from schedules s,played_in p where  s.date=p.date and s.team1=p.team1 order by s.date";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["date"]."</th><th>".
			$row["team1"]."</th><th>".
			$row["team2"]."</th><th>".
			$row["match_no"]."</th><th>".$row["stadium_name"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>
		</table>
		 <form action="tt.php" method="post">
		<table class="t">
		<tr align="center">
            		<center><h2 style="text-align: center;font-size: 25;color:yellow">Enter Match Number to retrieve players:
            		<input type="number" name="match_no" style="width: 300;height: 25;"><br><br>
           		<input type="submit" style="float:center;" value="Submit">
		</center>
		</h2>
		</tr>
		</table>
		</form>
</body>
</html>