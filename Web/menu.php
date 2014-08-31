<?php
	$mm=1;
	$lang=$_GET['lang'];
	if( $lang!="cs" && $lang!="en" )
	{
	  header("HTTP/1.0 404 Not Found");
	  exit();
	}

	include("host.php");
    $u=$_SERVER['REQUEST_URI'];

	if($_SERVER['HTTP_HOST']=="krkal.org"){
	  header("HTTP/1.1 301 REDIRECT");
	  header("location: http://".$host.$u);
	  exit();	
	}

	$page=$_GET['page'];
	
	if(is_null($page)) $page="main";

	if($lang=="cs")
	{
		$navvars = array(
			'main' 			    => array(1,"Co je KRKAL?", "KRKAL", "main.php","/cs/"),
			'news' 			    => array(1,"Novinky", "KRKAL: novinky", "news.php","news.html"),
			'krkal' 		    => array(1,"Hra KRKAL", "KRKAL: hra KRKAL", "krkal.php","krkal.html"),
			'krkalovl'      => array(2,"ovládání","KRKAL: hra KRKAL: ovládání","krkalovl.php","krkalovl.html"),
			'krkalveci'     => array(2,"popis vìcí","KRKAL: hra KRKAL: popis vìcí","krkalveci.php","krkalveci.html"),
			'levels'        => array(2,"levely","KRKAL: hra KRKAL: další levely","levels.php","levels.html"),
			'screenshots' 	=> array(1,"Screenshoty", "KRKAL:  screenshoty", "screenshots.php","screenshots.html"),
			'download' 		  => array(1,"Stáhnout", "KRKAL: download", "download.php","download.html" ),
			'doc'           => array(2,"dokumentace","KRKAL: dokumentace", "doc.php","doc.html"),
			'dl_icons'      => array(2,"ikony","KRKAL: download: ikony", "dl_icons.php","dl_icons.html"),
			'support'		=> array(1,"Technická podpora","KRKAL: technická podpora","support.php","support.html"),
			'team' 			    => array(1,"KRKALteam", "KRKAL: autoøi", "team.php","team.html"),
			'-1' 			    => array(1,"-", "-"),
			'krkalold'		  => array(1,"Starý KRKAL", "KRKAL: starý krkal", "", "http://www.volny.cz/m.d./krkal.html"),
			'-2' 			    => array(1,"-", "-"),
			'wiki'		  => array(1,"KRKAL 3.0 wiki", "KRKAL: KRKAL 3.0 wiki", "", "http://trac.krkal.org/"),
			'grafik'        => array(1,"Hledáme lidi", "KRKAL: hledáme nové lidi do týmu", "grafik.php","grafik.html"),
			'error'		=> array(0,"Chyba", "Chyba","error.php"),
		);
	}else{
		$navvars = array(
			'main' 			    => array(1,"What is KRKAL?", "KRKAL", "mainen.php","/en/"),
			'news' 			    => array(1,"News", "KRKAL: news", "news.php","news.html"),
			'krkal' 		    => array(1,"Game KRKAL", "KRKAL: game KRKAL", "krkalen.php","krkal.html"),
			'krkalovl'      => array(2,"controls","KRKAL: game KRKAL: controls","krkalovl.php","krkalovl.html"),
			'krkalveci'     => array(2,"objects' description","KRKAL: game KRKAL: objects' description","krkalveci.php","krkalveci.html"),
			'levels'        => array(2,"levels","KRKAL: hra KRKAL: další levely","levelsen.php","levels.html"),
			'screenshots' 	=> array(1,"Screenshots", "KRKAL:  screenshots", "screenshots.php","screenshots.html"),
			'download' 		  => array(1,"Download", "KRKAL: download", "downloaden.php","download.html" ),
			'doc'           => array(2,"documentation","KRKAL: documentation", "docen.php","doc.html"),
			'dl_icons'      => array(2,"icons","KRKAL: download: icons", "dl_icons.php","dl_icons.html"),
			'support'		=> array(1,"Technical support","KRKAL: technical support","support.php","support.html"),
			'team' 			    => array(1,"KRKALteam", "KRKAL: authors", "team.php","team.html"),
			'-1' 			    => array(1,"-", "-"),
			'krkalold'		  => array(1,"Old KRKAL (cz)", "KRKAL: old krkal", "", "http://www.volny.cz/m.d./krkal.html"),
			'-2' 			    => array(1,"-", "-"),
			'wiki'		  => array(1,"KRKAL 3.0 wiki", "KRKAL: KRKAL 3.0 wiki", "", "http://trac.krkal.org/"),
			'error'		=> array(0,"Error", "Error","error.php"),
		);
	};
	
	define("N_LEVEL",0);
	define("N_NAME", 1);
	define("N_TITLE", 2);
	define("N_INCLUDE",3);	
	define("N_LINK",4);
		
	if(is_null($navvars[$page])) $page="404";
	
	if($navvars[$page][N_LINK] && !$navvars[$page][N_INCLUDE]){
		header("Location: ".$navvars[$page][N_LINK] );
		exit;
	}
	
	$aktnav = array();
	$lev = 0;
	
	foreach($navvars as $pg => $values)
    {
      if($values[N_LEVEL]<$lev) unset($aktnav[$level]);
      
      $aktnav[$values[N_LEVEL]]=$pg;    
      $lev = $values[N_LEVEL];
      
      if($pg==$page) break;      
    }
    
    for($i = $lev+1; $i<3; $i++) $aktnav[$i]="";  
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?if($lang=="cs") echo 'lang="cs"'; else 'lang="en"';?> <?if($lang=="cs") echo 'xml:lang="cs"'; else 'xml:lang="en"';?> >
	<head>
	<?
	if($lang=="cs"){?>
		<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
		<meta http-equiv="Content-language" content="cs" />
		<meta name="keywords" content="KRKAL, logicko akèní hra, Sokoban, Robbo, Boulderdash, engine pro vývoj her" lang="cs" />
		<meta name="description" content="KRKAL - systém pro tvorbu, editaci a hraní 2D her" lang="cs" />
	<?}else{?>
	  	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta http-equiv="Content-language" content="en" />
		<meta name="keywords" content="KRKAL, logic game, Sokoban, Robbo, Boulderdash, engine for developing games" lang="en" />
		<meta name="description" content="KRKAL - engine for developing, editing and playing 2D games" lang="en" />
	<?}?>
		<title><?php print $navvars[$page][N_TITLE] ?></title>

		<link rel="stylesheet" type="text/css" href="/krkal.css" media="screen" title="KRKAL style" />
		<link rel="alternative stylesheet" type="text/css" href="/krkalprint.css" media="screen" title="KRKAL print style" />
		<link rel="stylesheet" type="text/css" href="/krkalprint.css" media="print" />
		<link rel="shortcut icon" href="/img/krkal-16.png" type="image/png" />

		<script src="/ext.js" type="text/javascript"></script>
	</head>

	<body>
		<div id="container">
			<div id="top">
				<div id="logo" onclick="<?if($lang=='cs') echo 'goKRKALcs()'; else echo 'goKRKALen()'?>" onmouseover="window.status='http://www.krkal.org/<?if($lang=="cs") echo 'cs/'; else echo "en/";?>'" onmouseout="window.status=''"></div>
				<div id="logo2" onclick="<?if($lang=='cs') echo 'goKRKALcs()'; else echo 'goKRKALen()'?>" onmouseover="window.status='http://www.krkal.org/<?if($lang=="cs") echo 'cs/'; else echo "en/";?>'" onmouseout="window.status=''"></div>
			</div>
			<div id="nav">
				<div id="nav2">
					<div class="navcontainer">
						<ul>
							<?php
							$lv=1;
							$shlv=1;
							$endli=0;
							foreach($navvars as $pg => $values){
								$curlv=$values[N_LEVEL];
								if($shlv>=$curlv && $curlv>0)
								{
									if ( $pg == $aktnav[$curlv] ){
										$shlv = $curlv + 1;
									} else {
										$shlv = $curlv;
									}								  
									if($curlv>$lv){
										echo '<div class="navcontainer2"><ul>';
										$lv=$curlv;
									}else{
										while($curlv<$lv){
											echo '</li></ul></div>';
											$lv--;
										}
										if($endli){
											echo '</li>';                        
										}
									}
									$endli=1;
									if($values[N_NAME]=='-')
									{
										echo ' <li class="navbreak">';
									}else{
										echo " <li>";
										echo '<a href="';
										if ($values[N_LINK])
										{
											echo $values[N_LINK];
										}else{
											echo $pg;	
										}
										echo '"';
										if ($pg == $aktnav[$curlv]){
											if($curlv==$lev||$curlv==1)
												echo ' class="active"';
										}
										echo '>'.$values[N_NAME].'</a>';
									}
								}
							}
							while($lv>1){									
								echo '</li></ul></div>';
								$lv--;
							}
							if($endli) echo '</li>';						
							?>
						</ul>
					</div>
					<div id="langselect">
						<a href="<?echo ereg_replace('^/(cs|en)(.*)','/cs\\2',$u);?>" class="im"><img src="/img/flagCZ.gif" alt="cz" width="22" height="13" /></a>
						<a href="<?echo ereg_replace('^/(cs|en)(.*)','/en\\2',$u);?>" class="im"><img src="/img/flagEN.gif" alt="en" width="22" height="13" /></a>
					</div>
					
					<?include("site/mmscreenshots.php");?>
					
				</div>
			</div>
			<div id="content">
				<?php 
					if($navvars[$page][N_INCLUDE])
						include("site/".$navvars[$page][N_INCLUDE]); 
				?>
			</div>
	
			<div id="footer">
				<div id="counter">			  
				</div>
				<div id="credit">(c) 2004 Petr Altman&nbsp;&nbsp;&nbsp;<?if($lang=="cs") echo 'Platné'; else echo 'Valid';?> <a href="http://validator.w3.org/check/referer">XHTML</a>, <a href="http://jigsaw.w3.org/css-validator/check/referer/">CSS</a></div>
			</div>
		</div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">
		_uacct = "UA-221468-2";
		urchinTracker();
	</script>
	</body>
</html>							
