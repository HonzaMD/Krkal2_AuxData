<?

function getip() {
if (isSet($_SERVER)) {
 if (isSet($_SERVER["HTTP_X_FORWARDED_FOR"])) {
  $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
 } elseif (isSet($_SERVER["HTTP_CLIENT_IP"])) {
  $realip = $_SERVER["HTTP_CLIENT_IP"];
 } else {
  $realip = $_SERVER["REMOTE_ADDR"];
 }

} else {
 if ( getenv( 'HTTP_X_FORWARDED_FOR' ) ) {
  $realip = getenv( 'HTTP_X_FORWARDED_FOR' );
 } elseif ( getenv( 'HTTP_CLIENT_IP' ) ) {
  $realip = getenv( 'HTTP_CLIENT_IP' );
 } else {
  $realip = getenv( 'REMOTE_ADDR' );
 }
}
return $realip;
}

function error($msg)
{
  header("location: /cs/error.html?msg=".urlencode($msg));
  exit();
}

function testreferer()
{
  $okurl=1;
  if(isset($_SERVER[HTTP_REFERER]))
  {
    $pu = parse_url($_SERVER[HTTP_REFERER]);
    if($pu['host']!='krkal.org' && $pu['host']!='www.krkal.org')
 	$okurl=0;
  }
  if($okurl==0)
  {
    header("location: /cs/download.html");
    exit();
  }
}

//testreferer();
header("location: /download/".$_GET["fn"]);
exit();

$fn=$_GET["fn"];

$MC = @MySQL_Connect("mysql", "db.krkal.org", "krkdb2") or error("Nelze se pøipojit k databázi!");
$MS = @MySQL_Select_DB("db_krkal_org") or error("Nelze vybrat databázi!");

$MSQ = @MySQL_Query("SELECT id,path,filename FROM download_files WHERE name LIKE '$fn'");

if (MySQL_Num_Rows($MSQ) > 0)
{
  $fileinfo = mysql_fetch_array($MSQ, MYSQL_ASSOC);

  $fileid = $fileinfo["id"];
  $path = $fileinfo["path"];
  $file = $fileinfo["filename"];
  $time = Date("U");
  $ip = getip();
  $referer = "";
  if(isset($_SERVER[HTTP_REFERER])) $referer=$_SERVER[HTTP_REFERER];

  $fullpath=$path.$file;

  $MSQ = @MySQL_Query("INSERT INTO downloads VALUES ('$fileid', $time, '$ip','$referer')");  


MySQL_Close($MC);
header("location: ".$fullpath);
exit();

}

MySQL_Close($MC);
header("HTTP/1.0 404 Not Found");
exit();

?>