<?include('ti.php');?>
<?
function mailadr($name, $dom="krkal",$tld="org")
{
?>
<script type="text/javascript">
<!--
  var m1 = '<?echo $name?>'
  var m2 = '<?echo $dom?>'
  var m3 = '<?echo $tld?>'
  document.write('e-mail: <a href="mailto:' + m1 + '@' + m2 + '.' + m3 + '">' + m1 + '@' + m2 + '.' + m3 + '</a>')
// -->
</script>
<noscript>
<div>
<?
	global $lang;
	if($lang=="cs") 
		echo 'e-mail: '.$name.' (zavináè) '.$dom.' (teèka) '.$tld;
	else
		echo 'e-mail: '.$name.' (at) '.$dom.' (dot) '.$tld;
?>
</div>
</noscript>
<?}?>
<h1>KRKALteam</h1>

<?if($lang=="cs")
{?>
  <p>
  technická podpora, KRKALteam: <a href="mailto:support@krkal.org">support@krkal.org</a> <br/>
  </p>
  <p>
  Tìšíme se na Vaše názory, pomùžeme v pøípadì technických problémù, èi pokud se zaseknete v nìkterém zapeklitém levlu.
  </p>

  <h2>Petr Altman (pal)</h2>
  www: <a href="http://pal.altmanoptik.com/">pal.altmanoptik.com</a>, <a href="http://www.potapko.cz/">potapko.cz</a>
  <p>
  grafický engine, editor textu, editor scriptù, grafika pro hru, www,...
  </p>
  
  <h2>Jan Krèek (MD)</h2>
  <?mailadr("md")?><br/>
  www: <a href="http://www.volny.cz/m.d.">www.volny.cz/m.d.</a> 
  <p>
  kernel, skriptování, vlastní hra KRKAL, levely,...
  </p>
  
  <h2>Jan Poduška (Morgue)</h2>
  <p>
  GUI, editor levelù
  </p>
  
  <h2>Jiøí Margaritov</h2>
  <p>
  kompilátor, interpret
  </p>
  
  <h2>Jára Altmann</h2>
  <p>
  nápady, návrhy, pøipomínky, levely
  </p>
  
  <h2>Jan Frolík</h2>
  <p>
  hudba - co dodat - VY - NI - KA - JÍ - CÍ
  </p>

<?}else{?>
  <p>
  technical support, KRKALteam: <a href="mailto:support@krkal.org">support@krkal.org</a> <br/>
  </p>
  <p>
  We look forward your opinions, we'll help you with technical issues, and also when you are stuck in some hellish level.
  </p>

  <h2>Petr Altman (pal)</h2>
  www: <a href="http://pal.altmanoptik.com">pal.altmanoptik.com</a>, <a href="http://www.potapko.cz/">potapko.cz</a>   
  <p>
  graphical engine, text editor, script editor, game graphics, www,...
  </p>
  
  <h2>Jan Krcek (MD)</h2>
  <?mailadr("md")?><br/>  
  www: <a href="http://www.volny.cz/m.d.">www.volny.cz/m.d.</a> 
  <p>
  kernel, scripting, game KRKAL, levels,...
  </p>
  
  <h2>Jan Poduska (Morgue)</h2>
  <p>
  GUI, level editor
  </p>
  
  <h2>Jiri Margaritov</h2>
  <p>
  compiler, interpret
  </p>
  
  <h2>Jara Altmann</h2>
  <p>
  levels, ideas, suggestions, comments
  </p>
  
  <h2>Jan Frolik</h2>
  <p>
  music - what's left to say - EX - TRA - OR - DI - NA - RY
  </p>


<?}?>
