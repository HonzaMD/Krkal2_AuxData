<?

    $language = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
    $language = strtolower($language);
    
    if(strstr($language,",")) {
    
      $llist = explode(",", $language);
      
      $i ="0";
      
      while ($i <= sizeof($llist))
      {
      
      $llist2 = explode(";", $llist[$i]);
      
      $llist3[$i] = $llist2[0];
      
      $i++;
    
      } 
    }else{
          $llist3 = explode(";", $language);
    }
    
    $lang="en";
    
    foreach($llist3 as $lg)
    {
      if($lg=='en'||$lg=='en-us') {$lang="en"; break;}
      if($lg=='cs'||$lg=='cs-cz') {$lang="cs"; break;}
      if($lg=='sk') {$lang="cs"; break;}
   }
?>