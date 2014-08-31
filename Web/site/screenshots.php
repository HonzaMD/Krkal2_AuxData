<?include('ti.php');?>

<?php

if($lang=="cs")
   echo "<h1>Screenshoty</h1>";
else
   echo "<h1>Screenshots</h1>";


		$images = array(
			array(
				array("3 Water Surfaces.jpg","","3 vodní plochy","3 Water Surfaces"),
				array("Connected.jpg","","Propojeno","Connected"),
				array("Ice Town.jpg","","Ledové mìsto","Ice Town"),
				array("Jumping Wall.jpg","","Skákavá stìna","Jumping Wall"),
			),
			array(
				array("Minisokoban.jpg","","Minisokoban","Minisokoban"),
				array("Nitro.jpg","","Nitrak","Nitro"),
				array("Photocell and Ice.jpg","","Fotobuòka a led","Photocell and Ice"),
				array("Rama's Fields.jpg","","Rámova pole","Rama's Fields"),
			),
			array(
				array("Samoobsluha.jpg","","Samoobsluha","Samoobsluha"),
				array("Sandpit.jpg","","Pískovištì","Sandpit"),
				array("Where It Topples.jpg","","Kam se to svalí?","Where It Topples?"),
				array("Where's Up.jpg","","Kde je nahoøe?","Where's Up?"),
			),
			array(
				array("editor1.png","editor1.jpg","Editor levelù","Level Editor"),
				array("scriptedit.png","scriptedit.jpg","Editor scriptù","Script Editor"),
				array("gamemenu.png","gamemenu.jpg","Úvodní menu","Main Menu")
			)
		);
?>


<table cellspacing="2" cellpadding="4" border="0" class="center">
<?

  if($lang=="cs")
     $p=2;
  else
     $p=3;

   foreach($images as $throw){
      print '<tr class="thumb">';
      foreach($throw as $th){
	    if($th[1]=="") $t=$th[0]; else $t=$th[1];
	    print '		
		   <td>			 
		     <a href="/img/galerie/img/'.$th[0].'" class="im">
		     <img src="/img/galerie/thumb/'.$t.'" alt="'.$th[$p].'" />
			 </a>
		   </td>';
	  }
      print "</tr>";
      print '<tr class="thumblabel">';
      foreach($throw as $th){
	    print '		
		   <td>			 
			 <div class="center">'.$th[$p].'</div>
		   </td>';
	  }
      print "</tr>";
   }
 ?>
</table>
