<!DOCTYPE html>
<html>
<head>
	<title>Training Material</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>
	<h1>Training Material</h1>
	<ul>
		<?php
		// Specify the path to the folder
		$folder_path = 'training_materials';

		// Get a list of all files in the folder
		$files = scandir($folder_path);

		// Remove the . and .. entries from the list
		$files = array_diff($files, array('.', '..'));

		// If the list is empty, display a message to the user
		if (empty($files)) {
		    echo '<li>No files are available for download.</li>';
		} else {
		    // Display the list of files as links
		    foreach ($files as $file) {
		        echo '<li><a href="' . $folder_path . '/' . $file . '">' . $file . '</a></li>';
		    }
		}
		?>
	</ul>
</body>
</html>