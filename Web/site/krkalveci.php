<?include('ti.php');?>
<?
function gebegin()
{
  echo '<table cellspacing="2" cellpadding="5" border="0">';
}
function geend()
{
  echo '</table>';
}

function ge($ln,$name, $desc, $pic="")
{
  echo '
    <tr class="gameName">
    <td colspan="2"><a name="'.$ln.'"></a>'.$name.'</td>
    </tr>
    <tr class="gameDesc">
    <td><div class="center">';
  if($pic!="") echo '<img src="/img/hra/'.$pic.'" alt="'.$name.'"/>';
  echo '</div></td>
    <td>'.$desc.'</td>
    </tr>
  ';
}

function ge2($ln,$name, $desc, $w, $pic="", $pic2="", $pic3="", $pic4="")
{
  echo '
    <tr class="gameName">
    <td colspan="2"><a name="'.$ln.'"></a>'.$name.'</td>
    </tr>
    <tr class="gameDesc">
    <td style="width: '.$w.'px;"><div class="center">';
  if($pic!="") echo '<img src="/img/hra/'.$pic.'" alt="'.$name.'"/>';
  if($pic2!="") echo '<img src="/img/hra/'.$pic2.'" alt="'.$name.'"/>';
  if($pic3!="") echo '<img src="/img/hra/'.$pic3.'" alt="'.$name.'"/>';
  if($pic4!="") echo '<img src="/img/hra/'.$pic4.'" alt="'.$name.'"/>';
  
  echo '</div></td>
    <td>'.$desc.'</td>
    </tr>
  ';
}

?>

<?
if($lang=='cs')
  include('krkalvecics.php');
else
  include('krkalvecien.php');
?>