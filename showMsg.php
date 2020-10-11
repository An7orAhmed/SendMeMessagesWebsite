<?php
  session_start();
	 
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
	header("location: login.php");
	exit;
  }
  
  require_once "db_connect.php";
?>

<!doctype html>

<html>
  <head>
    <title>My fans secret Messages!</title>
    <meta name="description" content="My fans secret Messages!">
    <meta name="author" content="Antor Ahmed">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    
    <style>
      *{margin: auto;}
  		body {
  			text-align: center;
  			background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  			background-size: 400% 500%;
  			animation: gradient 15s ease infinite;
  		}
		
  		@keyframes gradient {
  			0% {
  				background-position: 0% 50%;
  			}
  			50% {
  				background-position: 100% 50%;
  			}
  			100% {
  				background-position: 0% 50%;
  			}
  		}
  		
  		table {
  			font-family: arial, sans-serif;
  			border-collapse: collapse;
  			color: white;
  			width: 90%;
  			margin-left: auto;
  			margin-right: auto;
  			margin-top: 10px;
  			overflow: auto;
		  }

  		th {
  		  background-color: #23B4C9;
  			border: 1px solid #23B4C9;
  			text-align: center;
  			padding: 15px;
  		}
  		
  		td {
  			border: 1px solid #dddddd;
  			text-align: center;
  			padding: 100px 15px 100px;
  		}
    </style>
  </head>
  
  <body>
    <div class="container">
      <h1>My fans secret Messages!</h1>
      <table>
  			<tr>
  				<th>SL No.</th>
  				<th>Time</th>
  				<th>message</th>
  			</tr>
  			<?php
  				$sql = "SELECT id,time,msg FROM messages";
  				$result = mysqli_query($conn, $sql);
  				if (mysqli_num_rows($result) > 0) {
  					while($row = mysqli_fetch_assoc($result)) {
  						echo "<tr>";
  						echo "<td>" . $row["id"] . "</td>";
  						echo "<td>" . $row["time"] . "</td>";
  						echo "<td>" . $row["msg"] . "</td>";
  						echo "</tr>";
  					}
  				}
  			?>
		  </table>
    </div>
  </body>
</html>