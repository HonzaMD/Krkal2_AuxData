<?include('ti.php');?>
<? if($lang=="cs"){?>

<h1>Novinky</h1>
<?php
	 $news = array(
	    array("15.4.2006","Hledame nove lidi do tymu","Jastli vas zaujal Krkal a smer jakym se ted bude ubirat a chcete nam s tim pomoct, tak nevahejte a poslete nam e-mail. Hodi se kazda profese: Programator, Architekt (clovek s napady, ktery mi pomuze se specifikaci), Grafik 3D i 2D, Level Designer, ...","M.D."),
	    array("15.4.2006","Specifikace nove verze Systemu Krkal",'Zde <a href="http://wiki.krkal.org/">wiki.krkal.org</a> vznika specifikace neve verze Systemu Krkal. Nejdulezitejsi bude totalni vylepseni jazyka Krkal C a vznik noveho kompilatoru. Veskere nazory a pripominky jsou vitany!',"M.D."),
	    array("23.6.2004","KRKAL v angli�tin�","Str�nky krkal.org jsou nyn� k dispozici v angli�tin�. Pokra�ujeme v p�ekladu Syst�mu KRKAL...","pal"),
      array("12.6.2004","Nov� verze KRKALa",'P�ipravili jsme pro V�s <a href="download.html">novou verzi KRKALa (v2.4)</a>. Hlavn� novinkou je savepoint, pomoc� kter�ho si m��ete ulo�it slibn� rozehran� level, tak�e v p��pad� ne�sp�chu nemus�te hr�t cel� level znovu. Ud�lali jsme n�kolik nov�ch level� - mysl�m, �e jsou velmi p�kn� a �e se s nimi p�knou chv�li zabav�te...',"pal"),
	    array("21.5.2004","Hra KRKAL: popis v�c�",'Ud�lal jsem str�nku s <a href="krkalveci.html">popisem v�ech hern�ch objekt�</a> ve h�e KRKAL. <del>Zat�m ale chyb� obr�zky...</del>',"pal"),
	    array("11.5.2004","Dali n�s na DVD..","Krkal se objevil na DVD �asopisu <b>Level</b> (�.113) a na kompilaci <b>Doup� DVD</b> 04/04","M.D."),
	    array("9.5.2004","Aktualizace str�nky","P�idal jsem na server instal�tor pln� verze 2.3 a provedl �pravy n�kolika text�..","M.D."),
	    array("4.5.2004","Nov� verze KRKALa",'<b>Kone�n� si m��ete <a href="download.html">st�hnout novou verzi KRKALa</a> (2.3)</b>, nestihli jsme to sice v dubnu, jak jsme slibovali, ale o to je lep��! Ud�lali jsme n�kolik nov�ch level�, p�r nov�ch hern�ch objekt�, hra nyn� b�� podstatn� rychleji,...',"pal"),
      array("27.4.2004","KRKAL na tituln� stran�","�asopis <b>Computer</b> (8/04) uve�ejnil Syst�m Krkal. Velk� p�smena \"NEJLEP�� PLN� HRY: logick� hra Krkal ...\" z obalu jejich c�d��ka p��mo sv�t�. M�me v&nbsp;�asopise i malinkou recenzi a popularita n�s velmi t��. Na druhou stranu �asopis poru�il v�echny z�sady slu�n�ho chov�n�, po��dn� si nezjistil, kdo jsou auto�i, uve�ejnil Krkala bez na�eho souhlasu (a v�dom�) a proti podm�nk�m v licenci!","MD+pal"),
	    array("4.4.2004","Nov� kompil�tor","St�vaj�c� kompil�tor je ��len� zabugovan� :-((, Jirka sl�bil, �e ho rad�ji cel� p�ed�l�, tak douf�m �e se do�k�me (moc se t��m) a pak snad budou i lasery...","MD"),
	    array("4.4.2004","Jak bude vypadat nov� verze?","T�te se na n�kolik nov�ch levl�, na nasv�cen� st�vaj�c�ch, do hry Krkal p�ibude i p�r nov�ch objekt� (Sk�kav� st�na, dynamick� sv�tla, elektrick� proudy,...). Plus drobn� vylep�en� Syst�mu Krkal","MD"),
	    array("4.4.2004","Kdy bude nov� verze?","Pokud se Pe�a neutopil (pot�p� se v Egypt�) a vr�t� se, tak n�kdy v druh� polovin�, �i koncem dubna.","MD"),
	    array("4.4.2004","Od n�s u� nelze stahovat","Vzhledem k va�emu velk�mu z�jmu o hru (to n�s t��!) a vzhledem k z�jmu jednoho automatick�ho
				robota, kter� nastahoval 400MB, nem��eme u� dovolit stahov�n� Krkala z na�ich str�nek. Omlouv�me se. Je ale bez probl�mu mo�n� Krkala st�hnout z jin�ch server�, viz odkazy.","MD"),
	    array("1.4.2004","Limit na trafik","Dnes je ji� p�eneseno asi 450MB dat! M�s��n� limit m�me 1GB! Douf�m, �e se to uklidn�, jinak str�nky za chv�li nepojedou :-(","pal"),
	    array("1.4.2004","V�zva pro recenzenty","T�� n�s, �e p�ete o KRKALovi. Je�t� v�c n�s ale pot��, kdy� n�m o tom d�te v�d�t...","pal"),
	    array("1.4.2004","Dal�� recenze KRKALa",'Dal�� recenzi KRKALa najdete na <a href="http://plnehry.idnes.cz/logicke/krkal.html">plnehry.idnes.cz</a>.',"pal"),
	    array("24.3.2004","Recenze KRKALa",'Na hern�ch serverech <a href="http://www.freehry.cz/index.php?id=hra&amp;gid=1295">freehry.cz</a> a <a href="http://www.hernisvet.cz/index.php?page=hry_free&amp;page2=zobrazit&amp;id_hry=0000000397">hernisvet.cz</a> si m��ete p�e��st recenze KRKALa, na str�nce hernisvet.cz najdete i <a href="http://www.hernisvet.cz/okno.php?page=novinka&amp;id=00005">rozhovor o KRKALovi</a>. Z t�chto server� si m��ete i KRKALa st�hnout.',"pal"),
	    array("14.3.2004","Dokumentace",'Na str�nce s <a href="doc.html">dokumentac�</a> je ke sta�en� U�ivatelsk� dokumentace, Dokumentace pro pokro�il�, Program�torsk� dokumentace a Prezentace KRKALa.',"pal"),
	    array("14.3.2004","IE je hrozn� zbastlenina","Internet Explorer je nehor�zn� zabugovanej browser! U� m� �tve! Mozilla rulez!","pal"),
	    array("14.3.2004","Informace o h�e KRKAL",'P�idal jsem p�r informac� o <a href="krkal.html">h�e KRKAL</a>.',"pal"),
	    array("14.3.2004","KRKAL ikony",'Ud�lal jsem p�r <a href="dl_icons.html">ikon</a>, kter� m��ete pou��t jako link na Va�ich str�nk�ch. Ud�l�te n�m t�m radost!',"pal"),
	    array("13.3.2004","Po��tadlo p��stup�","P�idal jsem po��tadlo...","pal"),
	    array("12.3.2004","KRKAL verze 2.2 (demo)",'Na str�nce je demo KRKALa voln� ke <a href="download.html">sta�en�</a>.',"pal"),
	    array("9.3.2004","KRKAL f�rum",'Spu�t�no f�rum o KRKALovi - <a href="/forum/">krkal.org/forum</a>.',"pal"),
      array("10.2.2004","Prvn� n�vrh str�nek","Ud�lal jsem prvn� (hrub�) n�vrh str�nek.","pal"),
	    array("7.2.2004","Dom�na krkal.org","Zalo�ili jsme dom�nu krkal.org.","pal"),
	    array("9.1.2004","Projekt KRKAL obh�jen!","Tak jsme na Matfyzu �sp�n� obh�jili Projekt KRKAL (Syst�m pro tvorbu, editaci a hran� 2D her). Dokonce jsme dostali 4 body nav�c, v�ichni to chv�lili (MegaProjekt, profesion�ln� pr�ce...) Jsme prost� KINGOV�!!! :-))","pal")
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

