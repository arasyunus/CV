<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Yunus ARAS Web Page</title>
		<meta name="description" content="Yunus ARAS, Software, Developer" />
		<meta name="keywords" content="Yunus ARAS" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>

		<div class="adminmessage">	

			<?php

				$json_string = file_get_contents("messages.json");
				$parsed_json = json_decode($json_string);
				if(isset($_GET["del"])){
						for ($i=0; $i < count($parsed_json); $i++) {
							if ($parsed_json[$i]->email == $_GET["del"]) {
								array_splice($parsed_json, $i, 1);
							}
						}
						$handle = fopen("messages.json", "w");
						$fw = fwrite($handle, json_encode($parsed_json));
						fclose($handle);
					}

				if(!count($parsed_json) > 0 ){
							echo "<div class='message'>
							<span class='name'>MESAJ YOK!!!</span>
							<p>Henuz hiç mesaj gönderilmemiş...</p></div>";
				}

				for ($i=0; $i < count($parsed_json); $i++) { 
					echo "<div class='message'>
								<span class='name'>{$parsed_json[$i]->name} ( {$parsed_json[$i]->email} )</span>
								<p>{$parsed_json[$i]->message}</p>
								<a class='close' href='?del={$parsed_json[$i]->email}'>X</a>
							</div>";
				}

			?>
		</div>
		


		<script src="js/jquery.min.js"></script>
		<script src="js/boxlayout.js"></script>
		<script>
			$(function() {
				Boxlayout.init();
			});
		</script>
	</body>
</html>
