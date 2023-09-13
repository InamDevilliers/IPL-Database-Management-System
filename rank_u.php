<!DOCTYPE html>
<html>
<style >
	body{
		background:url('img/points1.jpg');
		background-size:cover;
	}
	table{
		border: 0px solid black;
	}
	tr{
		border: 1px solid black;
		background-color:#F6F9F0;
	}
	th{
		border: 1px solid black;
		color: black;
	}
	tr.a{
		background:linear-gradient(top,black 0%,red 100%);
		background:-webkit-linear-gradient(top,black 0%,red 100%);
	}
	tr.b{
		background:linear-gradient(right,blue 0%,#fcf4a3 100%);
		background:-webkit-linear-gradient(right,blue 0%,#fcf4a3 100%);
	}
	tr.c{
		background:linear-gradient(right,orange 0%,green100%);
		background:-webkit-linear-gradient(right,orange 0%,green 100%);
	}
</style>
<head>
	<title>RANKS</title>
</head>
<body style="background-color:">
	<button style="background-color: "><a href="user1st.html" style="color:">Back</a></button>

	 <div style="margin-top:10px; style : center" ><table width="100%"><tr class="a"><th><p style="align-content: center;"><h1 style="color:#ffffff">TEAM RANKING</h1></p></th></tr><tr class="b"><th>
	<table align="center">
		<tr class="c">
			<th>RANK</th>
			<th>NAME</th>
			<th>RATING</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		



		$query="select * from team order by rating desc";
		$result=mysqli_query($con,$query);
		[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
			
			//if($rate!=floor($i))
			//	{$q="update team set rank='floor($i)' where rating='$rating'";
    		//	mysqli_query($con,$q);
			

			echo "<tr><th>"
			.floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["rating"]."</th></tr>";
			}}
		?>
</table></th></tr></table></div>






<table width="100%"><tr class="b"><th>
 <div style="margin-top:10px; style : center" >
 	<table width="100%"><tr class="a"><th><p style="align-content: center;"><h1 style="color: #ffffff">BATSMAN RANKING</h1></p></th></tr>
	<table align="center">
		<tr class="c">
			<th>NAME</th>
			<th>RANK</th>
			<th>TEAM NAME</th>
			<th>RUNS</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select * from player  where type='batsman' order by runs desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
			echo "<tr><th>".$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["runs"]."</th></tr>";
			}
		}?></table></th><th>




<table width="100%"><tr class="a" style="width: 100%"><th>
<p align="center">
	<h1 style="color:#ffffff"> BOWLER RANKING
</h1>
</p></th></tr>
		<table align="center">
		<tr class="c">
			<th>NAME</th>
			<th>RANK</th>
			<th>TEAM NAME</th>
			<th>WICKETS</th>
			
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query="select * from player  where type='bowler' order by wickets desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
			echo "<tr><th>".$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["wickets"]."</th></tr>";
			}
		}?></table></th><th>
		


<table width="100%"><tr class="a" style="width: 100%;"><th>
<p align="center">
	<h1 style="color:#ffffff">ALL-ROUNDER RANKING
</h1>
</p></th></tr>

		<table align="center">
		<tr class="c">
			<th>NAME</th>
			<th>RANK</th>
			<th>TEAM NAME</th>
			<th>RUNS</th>
			<th>WICKETS</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket");

		$query="select * from player  where type='allrounder' order by (runs+wickets*2) desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
			echo "<tr><th>".$row["playername"]."</th><th>".	
			floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["runs"]."</th><th>".
			$row["wickets"]."</th></tr>";
			}
		}
	
		mysqli_close($con);
		?>
	</table></th></tr></table></div></th></tr></table>
	
</th></tr></table>
	
</body>
</html>