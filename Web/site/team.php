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
		echo 'e-mail: '.$name.' (zavin��) '.$dom.' (te�ka) '.$tld;
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
  technick� podpora, KRKALteam: <a href="mailto:support@krkal.org">support@krkal.org</a> <br/>
  </p>
  <p>
  T��me se na Va�e n�zory, pom��eme v p��pad� technick�ch probl�m�, �i pokud se zaseknete v n�kter�m zapeklit�m levlu.
  </p>

  <h2>Petr Altman (pal)</h2>
  www: <a href="http://pal.altmanoptik.com/">pal.altmanoptik.com</a>, <a href="http://www.potapko.cz/">potapko.cz</a>
  <p>
  grafick� engine, editor textu, editor script�, grafika pro hru, www,...
  </p>
  
  <h2>Jan Kr�ek (MD)</h2>
  <?mailadr("md")?><br/>
  www: <a href="http://www.volny.cz/m.d.">www.volny.cz/m.d.</a> 
  <p>
  kernel, skriptov�n�, vlastn� hra KRKAL, levely,...
  </p>
  
  <h2>Jan Podu�ka (Morgue)</h2>
  <p>
  GUI, editor level�
  </p>
  
  <h2>Ji�� Margaritov</h2>
  <p>
  kompil�tor, interpret
  </p>
  
  <h2>J�ra Altmann</h2>
  <p>
  n�pady, n�vrhy, p�ipom�nky, levely
  </p>
  
  <h2>Jan Frol�k</h2>
  <p>
  hudba - co dodat - VY - NI - KA - J� - C�
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
