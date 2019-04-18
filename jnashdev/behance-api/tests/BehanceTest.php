<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php
# API key and usrname is required as shown on url below
# Get API KEY: https://www.behance.net/dev/register
# User Info: https://www.behance.net/v2/users/USER?api_key=API_KEY
 
# Replace USER with behance username
# Replace API_KEY with your behance API key (Get API key here: https://www.behance.net/dev/register)
 
$behance_user = file_get_contents("https://www.behance.net/v2/users/USER?api_key=API_KEY");
$json = json_decode($behance_user, true);
 
foreach ($json as $user_details => $user) 
{
	// Displays profile image (Sizes: 50, 100, 115, 230, 138, 276)
	echo '<img src="'. $user['images']['138'] . '" /> </br>';
		
	// Displays most used focus (Graphic design, web development etc....)
	echo $user['fields'][0];
	
	// Display number of followers
	echo '<br/>'. $user['stats']['followers'];
	
}
?> 
</body>
</html>