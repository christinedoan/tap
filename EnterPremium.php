<?php

	#creating connection
	$servername = "localhost";
	$username = "root";
	$pasword = "cft108";
	$dbname = "project";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	$table = "SELECT * FROM mortalitystats";
	$reult = mysqli_query($conn, $table);
	
	#getting information from user input
	$agegroup = $_GET["agegroup"];
	$state = $_GET["state"];
	$gender = $_GET["gender"];
	
// $sql = "select * from mortality where gender='" . $agegroup . "' AND state='" . $state . "'";
//http://ec2-54-226-48-8.compute-1.amazonaws.com/app/enterdetails.php

	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
			if ($row["Gender"] == $gender)
			{
				if ($row["State"] == $state)
				{
					
					
					if ($row["Five-Year Age Groups Code"] == $agegroup)
					{
						$totalPopulation = $row["Population"];
						$deaths = $row["Deaths"];
						$probDeath = $deaths/$totalPopulation;
					}
					
					else
					{ 
						echo "Error 1";
					}
				}
				else
				{
					echo "Error 2";
				}
			}
			else
			{
				echo "Error 3";
			}
	}
	
	$quote = $probDeath *1000 * 1.12;

    echo $quote;
					
	mysqli_close($conn);
?>