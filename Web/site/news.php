<?include('ti.php');?>
<? if($lang=="cs"){?>

<h1>Novinky</h1>
<?php
	 $news = array(
	    array("15.4.2006","Hledame nove lidi do tymu","Jastli vas zaujal Krkal a smer jakym se ted bude ubirat a chcete nam s tim pomoct, tak nevahejte a poslete nam e-mail. Hodi se kazda profese: Programator, Architekt (clovek s napady, ktery mi pomuze se specifikaci), Grafik 3D i 2D, Level Designer, ...","M.D."),
	    array("15.4.2006","Specifikace nove verze Systemu Krkal",'Zde <a href="http://wiki.krkal.org/">wiki.krkal.org</a> vznika specifikace neve verze Systemu Krkal. Nejdulezitejsi bude totalni vylepseni jazyka Krkal C a vznik noveho kompilatoru. Veskere nazory a pripominky jsou vitany!',"M.D."),
	    array("23.6.2004","KRKAL v angliètinì","Stránky krkal.org jsou nyní k dispozici v angliètinì. Pokraèujeme v pøekladu Systému KRKAL...","pal"),
      array("12.6.2004","Nová verze KRKALa",'Pøipravili jsme pro Vás <a href="download.html">novou verzi KRKALa (v2.4)</a>. Hlavní novinkou je savepoint, pomocí kterého si mùete uloit slibnì rozehranı level, take v pøípadì neúspìchu nemusíte hrát celı level znovu. Udìlali jsme nìkolik novıch levelù - myslím, e jsou velmi pìkné a e se s nimi pìknou chvíli zabavíte...',"pal"),
	    array("21.5.2004","Hra KRKAL: popis vìcí",'Udìlal jsem stránku s <a href="krkalveci.html">popisem všech herních objektù</a> ve høe KRKAL. <del>Zatím ale chybí obrázky...</del>',"pal"),
	    array("11.5.2004","Dali nás na DVD..","Krkal se objevil na DVD èasopisu <b>Level</b> (è.113) a na kompilaci <b>Doupì DVD</b> 04/04","M.D."),
	    array("9.5.2004","Aktualizace stránky","Pøidal jsem na server instalátor plné verze 2.3 a provedl úpravy nìkolika textù..","M.D."),
	    array("4.5.2004","Nová verze KRKALa",'<b>Koneènì si mùete <a href="download.html">stáhnout novou verzi KRKALa</a> (2.3)</b>, nestihli jsme to sice v dubnu, jak jsme slibovali, ale o to je lepší! Udìlali jsme nìkolik novıch levelù, pár novıch herních objektù, hra nyní bìí podstatnì rychleji,...',"pal"),
      array("27.4.2004","KRKAL na titulní stranì","Èasopis <b>Computer</b> (8/04) uveøejnil Systém Krkal. Velká písmena \"NEJLEPŠÍ PLNÉ HRY: logická hra Krkal ...\" z obalu jejich cédéèka pøímo svítí. Máme v&nbsp;èasopise i malinkou recenzi a popularita nás velmi tìší. Na druhou stranu èasopis porušil všechny zásady slušného chování, poøádnì si nezjistil, kdo jsou autoøi, uveøejnil Krkala bez našeho souhlasu (a vìdomí) a proti podmínkám v licenci!","MD+pal"),
	    array("4.4.2004","Novı kompilátor","Stávající kompilátor je šílenì zabugovanı :-((, Jirka slíbil, e ho radìji celı pøedìlá, tak doufám e se doèkáme (moc se tìším) a pak snad budou i lasery...","MD"),
	    array("4.4.2004","Jak bude vypadat nová verze?","Tìšte se na nìkolik novıch levlù, na nasvícení stávajících, do hry Krkal pøibude i pár novıch objektù (Skákavá stìna, dynamická svìtla, elektrické proudy,...). Plus drobná vylepšení Systému Krkal","MD"),
	    array("4.4.2004","Kdy bude nová verze?","Pokud se Pea neutopil (potápí se v Egyptì) a vrátí se, tak nìkdy v druhé polovinì, èi koncem dubna.","MD"),
	    array("4.4.2004","Od nás u nelze stahovat","Vzhledem k vašemu velkému zájmu o hru (to nás tìší!) a vzhledem k zájmu jednoho automatického
				robota, kterı nastahoval 400MB, nemùeme u dovolit stahování Krkala z našich stránek. Omlouváme se. Je ale bez problému moné Krkala stáhnout z jinıch serverù, viz odkazy.","MD"),
	    array("1.4.2004","Limit na trafik","Dnes je ji pøeneseno asi 450MB dat! Mìsíèní limit máme 1GB! Doufám, e se to uklidní, jinak stránky za chvíli nepojedou :-(","pal"),
	    array("1.4.2004","Vızva pro recenzenty","Tìší nás, e píšete o KRKALovi. Ještì víc nás ale potìší, kdy nám o tom dáte vìdìt...","pal"),
	    array("1.4.2004","Další recenze KRKALa",'Další recenzi KRKALa najdete na <a href="http://plnehry.idnes.cz/logicke/krkal.html">plnehry.idnes.cz</a>.',"pal"),
	    array("24.3.2004","Recenze KRKALa",'Na herních serverech <a href="http://www.freehry.cz/index.php?id=hra&amp;gid=1295">freehry.cz</a> a <a href="http://www.hernisvet.cz/index.php?page=hry_free&amp;page2=zobrazit&amp;id_hry=0000000397">hernisvet.cz</a> si mùete pøeèíst recenze KRKALa, na stránce hernisvet.cz najdete i <a href="http://www.hernisvet.cz/okno.php?page=novinka&amp;id=00005">rozhovor o KRKALovi</a>. Z tìchto serverù si mùete i KRKALa stáhnout.',"pal"),
	    array("14.3.2004","Dokumentace",'Na stránce s <a href="doc.html">dokumentací</a> je ke staení Uivatelská dokumentace, Dokumentace pro pokroèilé, Programátorská dokumentace a Prezentace KRKALa.',"pal"),
	    array("14.3.2004","IE je hrozná zbastlenina","Internet Explorer je nehoráznì zabugovanej browser! U mì štve! Mozilla rulez!","pal"),
	    array("14.3.2004","Informace o høe KRKAL",'Pøidal jsem pár informací o <a href="krkal.html">høe KRKAL</a>.',"pal"),
	    array("14.3.2004","KRKAL ikony",'Udìlal jsem pár <a href="dl_icons.html">ikon</a>, které mùete pouít jako link na Vašich stránkách. Udìláte nám tím radost!',"pal"),
	    array("13.3.2004","Poèítadlo pøístupù","Pøidal jsem poèítadlo...","pal"),
	    array("12.3.2004","KRKAL verze 2.2 (demo)",'Na stránce je demo KRKALa volnì ke <a href="download.html">staení</a>.',"pal"),
	    array("9.3.2004","KRKAL fórum",'Spuštìno fórum o KRKALovi - <a href="/forum/">krkal.org/forum</a>.',"pal"),
      array("10.2.2004","První návrh stránek","Udìlal jsem první (hrubı) návrh stránek.","pal"),
	    array("7.2.2004","Doména krkal.org","Zaloili jsme doménu krkal.org.","pal"),
	    array("9.1.2004","Projekt KRKAL obhájen!","Tak jsme na Matfyzu úspìšnì obhájili Projekt KRKAL (Systém pro tvorbu, editaci a hraní 2D her). Dokonce jsme dostali 4 body navíc, všichni to chválili (MegaProjekt, profesionální práce...) Jsme prostì KINGOVÉ!!! :-))","pal")
		);
?>

<?}else{?>
<h1>News</h1>

<?php
	 $news = array(
		array("4.8.2004","Forum",'We\'ve sent some posts to our <a href="http://forum.krkal.org/en/">English forum</a>. You can find there some important and useful information, so take a look. We are also periodically watching and controlling the forum, so don\'t be afraid, that your questions will be unanswered. We\'ve repaired a bug in the forum engine.',"MD+pal"),
	    array("2.7.2004","KRKAL version 2.4 english",'We released english version of KRKAL 2.4. <a href="download.html">Download It!</a>',"pal"),
	    array("23.6.2004","KRKAL in english","krkal.org is now available in the English version. We will continue working on the english localization. Be patient, please.","pal")
		);
?>

<?}?>

<?
  foreach($news as $msg)
  {
?>
   <div class="news">
   <span class="news-ln1">
     <span class="news-date"><? echo $msg[0] ?></span>
     <span class="news-head"><? echo $msg[1] ?></span>
   </span> <br />
   <div class="news-msg"><? echo $msg[2] ?></div>
   <div class="news-autor">
	<? echo '(<a href="team.html">'.$msg[3]."</a>)" ?>
   </div>
   </div>
<?
  }
?>									

