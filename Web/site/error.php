<?include('ti.php');?>
<?
$msg=$_GET["msg"];
if(!isset($msg))
  $msg="";
?>

<h1>Chyba!</h1>
<p>
Na stránce se vyskytla chyba! <?echo urldecode($msg);?>
</p>
<p>
Informujte prosím o tom našeho <a href="mailto:webmaster@krkal.org">webmastra</a>.
</p>

