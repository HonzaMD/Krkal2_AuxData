<?

  include("host.php");

  if(isset($_GET['page']))
      include('redir.php');

   include("lang.php");

   header("HTTP/1.1 301 REDIRECT");
   header("location: http://".$host."/".$lang."/");
   exit();

?>