<?include('ti.php');?>
<?
$msg=$_GET["msg"];
if(!isset($msg))
  $msg="";
?>

<h1>Chyba!</h1>
<p>
Na str�nce se vyskytla chyba! <?echo urldecode($msg);?>
</p>
<p>
Informujte pros�m o tom na�eho <a href="mailto:webmaster@krkal.org">webmastra</a>.
</p>

