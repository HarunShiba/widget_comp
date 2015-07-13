<?php require_once ("includes/connection.php"); ?>
<?php require_once ("includes/functions.php"); ?>
<?php include ("includes/header.php"); ?>
			<table id="structure">
				<tr>
					<td id="navigation">
						<?php
						//3. Perform database querry
						$result=mysqli_query($connection, "SELECT * FROM subjects");
						if(!$result){
							die("Database querry failed: " . mysql_error());
						}
						// 4. Use returned data
						while($row=mysqli_fetch_array($result)){
							echo $row["menu_name"]." ".$row["position"]. "<br/>";
						}
						?>
					</td>
					<td id="page">
						<h2>Content Area</h2>
					
					</td>
				</tr>
			</table>
<?php include("includes/footer.php"); ?>
<?php
	// 5. Close connection
	mysqli_close($connection);
?>