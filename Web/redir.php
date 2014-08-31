<?

$page=$_GET['page'];

$rd = array(
		'main' 			    => ".",
		'news' 			    => "news.html",
		'krkal' 		    => "krkal.html",
		'krkalovl'      => "krkalovl.html",
		'krkalveci'     => "krkalveci.html",
		'levels'        => "levels.html",
		'screenshots' 	=> "screenshots.html",
		'download' 		  => "download.html" ,
		'doc'           => "doc.html",
		'dl_icons'      => "dl_icons.html",
		'forum'			    => "http://forum.krkal.org/cs/",
		'krkalold'		  => "http://www.volny.cz/m.d./krkal.html",
		'team' 			    => "team.html",
		'grafik'        => "grafik.html"
	);


if(isset($rd[$page]))
{
  header("HTTP/1.1 301 REDIRECT");
  header("location: http://".$host."/cs/".$rd[$page]);
  exit();
}else{
  header("HTTP/1.0 404 Not Found");
  exit();
}

?>