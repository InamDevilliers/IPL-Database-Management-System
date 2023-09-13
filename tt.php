<html>
<body>
	<button style="background-color: "><a href="schedule.php" style="color:">Back</a></button><div style="margin-top:10px; style : center" >
<style >
	body{
	background:url('schedule.jpg');
	}
	table{
		background:linear-gradient(top,#00bfff 0%,#adff2f 100%);
		background:-webkit-linear-gradient(top,#00bfff 0%,#adff2f 100%);
		border: 1px solid black;
	}
	tr{
		border: 1px solid black;
	}
	th{
		border: 1px solid black;
	}
	table.style{
		background:#00bfff;
		font-size:25px;
	}
	h1{
	background:#00bfff;
	width:300px;
	
	}
</style>
<table class="style" width="100%"; align="center"><tr><th>
	<?php
	$con=mysqli_connect("localhost","root","","cricket");
		 $match_no=$_POST['match_no'];
		 $que="select team1 from schedules where match_no='$match_no'";
				
		echo "SQUAD FOR MATCH NUMBER $match_no ";
	
		?></th></tr></table>



<table width="100%"><tr><th>
 	<table align="center">
		
		<?php
		$con=mysqli_connect("localhost","root","","cricket");
		$query1="SELECT p.playername FROM schedules s,player p WHERE s.team1=p.name AND s.match_no='$match_no'";
		$result1=mysqli_query($con,$query1);

		$query="select sc.team1 from schedules sc where  sc.match_no='$match_no' limit 0,1";
	    $res=mysqli_query($con,$query);
	    if(mysqli_num_rows($res)>0){
        while ($row=mysqli_fetch_assoc($res)) {
            echo "<tr><th><b>".$row["team1"]."</b></th></tr>";
                    }
    	}


		if(mysqli_num_rows($result1)>0)
		{
			while ($row=mysqli_fetch_assoc($result1)) {
			echo "<tr><th>".$row["playername"]."</th></tr>";
			
			}
		}
		mysqli_close($con);
		?></table></th><th>


		<table align="center">
		

 		<?php
 		$match_no=$_POST['match_no'];
 		$con=mysqli_connect("localhost","root","","cricket");
		$query1="SELECT p.playername FROM schedules s,player p WHERE s.team2=p.name AND s.match_no='$match_no'";
		$result1=mysqli_query($con,$query1);
		

		$query="select sc.team2 from schedules sc where  sc.match_no='$match_no' limit 0,1";
	    $res=mysqli_query($con,$query);
	    if(mysqli_num_rows($res)>0){
        while ($row=mysqli_fetch_assoc($res)) {
            echo "<tr><th><b>".$row["team2"]."</b></th></tr>";
                    }
    	}

		if(mysqli_num_rows($result1)>0)
		{
			while ($row=mysqli_fetch_assoc($result1)) {
			echo "<tr><th>".$row["playername"]."</th></tr>";
			
			}
		}
		mysqli_close($con);
		?></table></th></tr></table>
		<br><br>


<table width="100%"; align="center">
</table>
<table width="100%"; align="center">
	<div style : center" >
	<center><h1 align="center"><i>Players Selected Are</i></h1></center>
	</div>
</table>

<table width="100%"><tr><th>
 	<table align="center">
		<tr>
			<th>PLAYERS NAME</th>
			<th>TEAM</th>
			<th>POSITION</th>
		</tr>
		<?php
		$con = mysqli_connect("localhost", "root", "", "cricket") or die(mysqli_error($con));
	    $match_no=$_POST['match_no'];
	    $query="select p.playername,p.name,s.position from selected_for s,schedules sc,player p where  s.name=sc.team1 and s.date=sc.date  and s.cap_no=p.cap_no  and s.name=p.name and sc.match_no='$match_no' order by p.playername";
	    $res=mysqli_query($con,$query);
	    if(mysqli_num_rows($res)>0){

        while ($row=mysqli_fetch_assoc($res)) {

            echo "<tr><th>".$row["playername"]."</th><th>".$row["name"]."</th><th>".$row["position"]."</th></tr>";
                    }
    	}

		else
		{
		 echo "NOT ANNOUNCED!! for team1";
	     
	    
		}
			
		$query="select p.playername,p.name,s.position from selected_for s,schedules sc,player p where  s.name=sc.team2 and s.date=sc.date  and s.cap_no=p.cap_no  and s.name=p.name and sc.match_no='$match_no' order by p.playername";
	    $res=mysqli_query($con,$query);
	    if(mysqli_num_rows($res)>0){

	        while ($row=mysqli_fetch_assoc($res)) {

	            echo "<tr><th>".$row["playername"]."</th><th>".$row["name"]."</th><th>".$row["position"]."</th></tr>";
	                    }
	    }
	    
		else
		{
		 echo "NOT ANNOUNCED!! for team2";
	    
	    
		}
		mysqli_close($con);
		?>

	

</body>
</html>