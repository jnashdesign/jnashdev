<?php

# API key and usrname is required as shown on url below
# Get API KEY: https://www.behance.net/dev/register
# User Info: https://www.behance.net/v2/users/USER?api_key=API_KEY
 
# Replace USER with behance username
# Replace API_KEY with your behance API key (Get API key here: https://www.behance.net/dev/register)
 
$behance_projects = file_get_contents("https://www.behance.net/v2/users/jnashdesign/projets?client_id=fzck3Bn6IrOojZklTQQoWnnFMma1kRyT");
$json = json_decode($behance_projects, true);
 
foreach ($json as $project_details => $project) 
{	
	// Displays profile image (Sizes: 50, 100, 115, 230, 138, 276)
	echo '<img src="'. $project['covers']['202'] . '" /> </br>';
		
	// Displays most used focus (Graphic design, web development etc....)
	echo $project['id'];
}
?>