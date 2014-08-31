<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=windows-1250" />
		<meta http-equiv="Content-language" content="cs" />

		<title>Page not found / Stránka nenalezena</title>

		<link rel="stylesheet" type="text/css" href="/krkalerr.css" media="screen" />
		<link rel="shortcut icon" href="/img/krkal-16.png" type="image/png" />

		<script src="/ext.js" type="text/javascript"></script>

	</head>
	<body>

		<div id="container">
    	<div id="top">
    		<div id="logo" onclick="<?if($lang=='cs') echo 'goKRKALcs()'; else echo 'goKRKALen()'?>" onmouseover="window.status='http://www.krkal.org/<?if($lang=="cs") echo 'cs/'; else echo "en/";?>'" onmouseout="window.status=''"></div>
    		<div id="logo2" onclick="<?if($lang=='cs') echo 'goKRKALcs()'; else echo 'goKRKALen()'?>" onmouseover="window.status='http://www.krkal.org/<?if($lang=="cs") echo 'cs/'; else echo "en/";?>'" onmouseout="window.status=''"></div>
    	</div>

     	<div id="content">
		<div class="msg">
		<h1>Page not found!</h1>
		<p>
			The requested page was not found on this server <a href="http://www.krkal.org/">krkal.org</a>. The link on the referring page seems to be wrong or outdated. Please contact the <a href="mailto:webmaster@krkal.org?subject=Page%20not%20found">webmaster</a>.
		</p>
		</div>
		<hr/>
		<div class="msg">
		<h1>Stránka nenalezena!</h1>
		<p>
			Tato stránka nebyla na serveru <a href="http://www.krkal.org/">krkal.org</a> nalezena. Zkontrolujte, je-li její adresa zadaná správně.
			Pokud jste se na tuto stránku dostali pomocí odkazu na stránkách krkal.org (nebo jinde), 
			informujte prosím o tom našeho <a href="mailto:webmaster@krkal.org?subject=Stránka%20nenalezena">webmastra</a>.
		</p>
		</div>
	</div>


			<div id="footer">
				<div id="counter">
				    <script type="text/javascript" src="http://counter.cnw.cz/textcounter.cgi?krkal&amp;5&amp;t1&amp;&amp;on"></script>
          <script type="text/javascript">
            <!--
            document.write("<a href=\"http://counter.cnw.cz\"><img src=\"http://counter.cnw.cz/trackit.cgi?krkal&amp;t5&amp;" + escape(top.document.referrer) + "\" alt=\"\" border=\"0\" width=\"1\" height=\"1\"></a>");
            // -->
          </script>
				</div>
				<div id="credit">(c) 2004 Petr Altman&nbsp;&nbsp;&nbsp;Platné <a href="http://validator.w3.org/check/referer">XHTML</a>, <a href="http://jigsaw.w3.org/css-validator/check/referer/">CSS</a></div>
			</div>

		</div>
	</body>
</html>							
