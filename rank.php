<!DOCTYPE html>
<html>
<style >
	body{
		background:url('img/points1.jpg');
		background-size:cover;
	}
	table{
		border: 1px solid black;
	}
	tr{
		border: 1px solid black;
		background-color:#F6F9F0;
	}
	th{
		border: 1px solid black;
		color: black;
	}
	button.update{
		background:black;
		color:#ffffff;
		border:2px solid #ffffff;
		border-radius:15px;
		font-family:times new roman;
		font-size:17px;
		cursor:pointer;
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
	label{
		color:#ffffff;
	}
</style>
<head>
	<title>RANKS</title>
</head>
<body style="background-color:">
	<button style="background-color: "><a href="admin1st.html" style="color:">Back</a></button>

	 <div style="margin-top:10px; style : center" ><table width="100%"><tr class="a"><th><p style="align-content: center;"><h1 style="color:white">TEAM RANKING</h1></p></th></tr><tr class="b"><th>
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
			while ($row=mysqli_fetch_assoc($result)) {

			 $i=$i+1;
			$nm = $row["name"];
			$q="update team set rank='$i' where name='$nm'";
    
    		mysqli_query($con,$q);
			echo "<tr><th>"
			.floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["rating"]."</th></tr>";
			}
		}?>
</table></th></tr></table></div>


<table align="center"><tr class="c"><th>
	<p align="center" style="width: 100%;padding-right: 100px;"><div style="align-content: center;background-color: ">
	<form action="update.php" method="POST">
	<label>ENTER TEAM-RATING : <input type="number" name="rating" placeholder="129/130/..." align="right"><br/><br/></label>
	<label>
	ENTER TEAMNAME  :  <input type="text" name="name" placeholder="RCB" align="padding-right"><br/><br/></label>
	<button class="update">UPDATE</button></form>
</div></p></th></tr></table>





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
				$nm = $row["cap_no"];
			$q="update player set rank='$i' where cap_no='$nm'";
    		mysqli_query($con,$q);
			echo "<tr><th>".$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["runs"]."</th></tr>";
			}
		}?></table></th><th>




<table width="100%"><tr class="a" style="width: 100%"><th>
<p align="center">
	<h1 style="color:#ffffff;"> BOWLER RANKING
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
				$nm = $row["cap_no"];
			$q="update player set rank='$i' where cap_no='$nm'";
    		mysqli_query($con,$q);
			
			echo "<tr><th>".$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["wickets"]."</th></tr>";
			}
		}?></table></th><th>
		


<table width="100%"><tr class="a" style="width: 100%"><th>
<p align="center">
	<h1 style="color:#ffffff;">ALL-ROUNDER RANKING
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
				$nm = $row["cap_no"];
			$q="update player set rank='$i' where cap_no='$nm'";
    		mysqli_query($con,$q);
			
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
	

<table style="vertical-align: text-top;" align="center"><tr class="c"><th>
	<p align="center" style="width: 100%;padding-right: 100px;"><div style="align-content: center;background-color: ">
	<form action="pupdate.php" method="POST">
	<label>ENTER PLAYERNAME   <input type="text" name="name" placeholder="AB De Villiers"><br/><br/></label>
	<label>ENTER RUNS  <input type="number" name="runs" placeholder="211"><br/><br/></label>
	<label>ENTER WICKETS        <input type="number" name="wickets" placeholder="23"><br/><br/></label>
	<label>ENTER NUMBER_OF_MATCHES        <input type="number" name="no_of_matches" placeholder="176"><br/><br/></label>
	<button class="update">UPDATE</button></form>
</div></p></th></tr></table></th></tr></table>
	
</body>
</html>