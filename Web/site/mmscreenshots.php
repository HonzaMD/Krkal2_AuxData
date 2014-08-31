<?include('ti.php');?>

<?php

	$mmimages = array(
		"3 Water Surfaces.jpg",
		"Connected.jpg",
		"Falling Stones.jpg",
		"Ice Town.jpg",
		"Jumping Wall.jpg",
		"Minisokoban.jpg",
		"Nitro.jpg",
		"Photocell and Ice.jpg",
		"Rama's Fields.jpg",
		"Samoobsluha.jpg",
		"Sandpit.jpg",
		"UpNDown.jpg",
		"Where It Topples.jpg",
		"Where's Up.jpg",
		"Super Lev.jpg"
		);
		
	
	$ss=(date('U')/3600)%sizeof($mmimages);
	
	echo '
		<div id="mmscreenshots">
			   <a href="/img/galerie/img/'.$mmimages[$ss].'" class="im">
				  <img src="/img/galerie/thumb2/'.$mmimages[$ss].'" alt=""/>
		   </a>
		</div>
	';

?>


