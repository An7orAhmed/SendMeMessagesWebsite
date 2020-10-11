<?php
  require_once "db_connect.php";
?>

<!doctype html>

<html>
  <head>
    <title>Send a secret messege to Antor!</title>
    <meta property="og:description" content="Send a secret message to Antor Ahmed anonymously!">
    <meta property="og:author" content="Antor Ahmed">
    <meta property="og:image" content="http://antor.kitsware.com/sendMsg/thumbs.jpg"/>
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
    </style>
  </head>
  
  <body>
    <div class="container">
      <h1>Send a secret messege to Antor Ahmed!</h1>
      <form action="push.php" method="post">
        <div class="form-group">
          <label for="comment">Write your message:</label>
          <textarea class="form-control" rows="5" id="message" name="message"></textarea><br>
          <button type="submit" class="btn btn-success">Send it</button>
        </div>
      </form>
    </div>
  </body>
</html>