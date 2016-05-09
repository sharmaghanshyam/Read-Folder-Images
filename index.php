<?php

	/*
	* Author - Ghanshyam Sharma
	* Dated - 26 Apr 2016
	* Purpose - To read all images from a particular folder.
	*/
		// Put the path of the folder from were you want to read all images
	   $imagePath ='images';
	   $files = glob($imagePath."/*.*");
	   for ($i=0; $i<count($files); $i++)
	   {
		$image = $files[$i];
		// The below line will print the path of image
		print $image ."<br />";
		// Below line will print image
		echo '<img src="'.$image .'" alt="Random image" />'."<br /><br />";
	   }

 ?>