<?php

	// open this directory 
	$folder = "nature";
	$myDirectory = opendir($folder);

	// get each entry
	while($entryName = readdir($myDirectory)) {
		$dirArray[] = $entryName;
	}

	// close directory
	closedir($myDirectory);

	//	count elements in array
	$indexCount	= count($dirArray);

	?>
<?php
		// loop through the array of files and print them all in a list
$i=1;
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // list only jpgs
	
				echo '<img src="'.$folder.'/' . $dirArray[$index] . '" alt="name" style="width:100%" onclick="openModal();currentSlide(' . $i . ')" class="hover-shadow cursor">
				';
				$i++;
			}	
		}
		echo " 
		";
	$i=1;
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // list only jpgs
				echo '<div class="mySlides">
      <div class="numbertext">'.$i.' / ' . $indexCount . '</div>
      <img src="'.$folder.'/' . $dirArray[$index] . '" style="width:100%">
    </div>
    ';
				
				$i++;
			}	
		}
		echo " 
		";
		$i=1;
		for($index=0; $index < $indexCount; $index++) {
			$extension = substr($dirArray[$index], -3);
			if ($extension == 'jpg'){ // list only jpgs
				echo '<div class="column">
      <img class="demo cursor" src="'.$folder.'/'. $dirArray[$index] .'" style="width:100%" onclick="currentSlide(' . $i . ')" alt="">
    </div>
    ';
				$i++;
			}	
		}
		?>

