<?include('ti.php');?>
<? if($_GET['p']!='2') {?>
<h1>Syst�m KRKAL 2.4 (demo) - voln� ke sta�en�</h1>
<p>
St�hn�te si Syst�m KRKAL spolu s hrou Krkal a n�ramn� se bavte p�i hran�, m��ete vytv��et nov� levely, �i samotnou hru modifikovat nebo si dokonce vytvo�it svou vlastn�. Sou�asnou verzi 2.4 je�t� nepova�ujeme za �pln� hotovou a proto ji ozna�ujeme jako demo. Verze obsahuje:
</p>
<ul>
<li>
<b>Syst�m pro tvorbu 2D her, KRKAL.</b> Je ji� t�m�� hotov�, v�me o p�r chyb�ch v kompil�toru a n�kter� na�e odv�n� pl�ny je�t� nejsou uskute�n�ny. P�esto�e je KRKAL od po��tku programov�n jako obecn� syst�m pro tvorbu her, zat�m je sp�e specializov�n na hry typu Krkal, zobecn�n� si vy��d� n�kolik �prav.</li>
<li>
<b>Hra KRKAL.</b> Vych�zeli jsme ze star� hry Krkal a sna�ili se ji vytvo�it znovu v na�em nov�m syst�mu. A� na p�r kl��ov�ch objekt� (nap�. laser) se n�m to ji� povedlo. Poda�ilo se n�m ze star� hry do nov� p�ev�st asi polovinu levl� a p�r jsme jich vytvo�ili zcela nov�. Na dota�en� hry Krkal do v�t�zn�ho konce se st�le pracuje.
</li>
<li>
Nov� skv�l� <b>grafika</b>, kone�n� si v�ichni m��ete vychutnat n�dhernou <b>hudbu</b> od Frol�ka.
</li>
<li>
<b>Rozs�hl� dokumentace.</b> U�ivatelsk� dokumentace (ovl�d�n� editoru, popis hry Krkal). Pokro�il� u�ivatelsk� dokumentace (jak ps�t skripty, p��ru�ka k jazyku, program�torsk� dokumentace ke h�e Krkal)
</li>
</ul>

<h2>Po�adavky na syst�m</h2>
<ul>
<li>MS Windows XP, 2000, Me, 9x</li>
<li>DirectX 8.1 nebo nov�j��</li>
<li>Procesor taktovan� kolem 800 MHz nebo lep��</li>
<li>nejm�n� 128 MB RAM</li>
<li>32MB DirectX kompatibiln� grafick� karta schopn� pracovat v 32bit hloubce (testov�no na GeForce2 MX, GeForce 3, nForce, Matrox Millenium G450)</li>
<li>DirectX kompatibiln� zvukov� karta</li>
<li>cca 30MB voln�ho m�sta na HDD</li>
</ul>

<h2>Instalace</h2>

<ul>
 <li>St�hn�te si instala�n� soubor z t�chto str�nek (verze 2.4, pln� instalace) a spus�te ho.</li>
 <li>Pokud u� m�te nainstalovanou star�� verzi, nestahujte cel�ho Krkala, vyu�ijte patch (verze 2.4, update z verze 2.3 nebo 2.2).</li>
 <li>Spus�te hru (syst�m) poklep�n�m na soubor <i>krkal.exe</i></li>
 <li>Dokumentaci najdete v adres��i <i>Dokumentace</i> (resp. <i>Doc</i> ve verzi 2.2)</li>
 <li>Odinstalace: Pou�ijte odinstala�n� program, pokud ho nem�te, sta�� smazat adres�� s Krkalem, Krkal si nic do Windous� neukl�d�</li>
</ul>

<h2>Licence</h2>

<ul>
 <li>Program Krkal 2.4 (demo) je voln� ke sta�en�, m��ete program d�l bezplatn� ���it.</li>
 <li>Je mo�n� program pou��vat, modifikovat v n�m vytv��en� hry, tvo�it nov� levly.</li>
 <li>Program pou��v�te na va�e vlastn� nebezpe��. Nep�eb�r�me zodpov�dnost za jak�koli �kody vznikl� v souvislosti s pou��v�n�m programu.</li>
 <li>Bez na�eho svolen� nen� mo�n� pou��t Syst�m Krkal jako sou��st n�jak�ho komer�n� prod�van�ho produktu.</li>
 <li>Ve�ker� dal�� autorsk� pr�va vyhrazena (c) P.Altman, J.Kr�ek, J.Margaritov, J.Podu�ka, J.Altmann, J.Frol�k</li>
</ul>

<h2>St�hnout</h2>
<p><a href="/en/download.html">Anglick� verze KRKALa...</a></p>
<h3>KRKAL verze 2.4</h3>
<ul>
<li class="download"><a href="dl/KRKALupdate_2.4.exe">KRKAL (�esk� verze 2.4, update z verze 2.3 nebo 2.2)</a> (2.5MB) - St�hn�te si tento patch, pokud u� m�te nainstalovan�ho star��ho Krkala.</li>
<li class="download"><a href="dl/Krkal2.4.exe">KRKAL (�esk� verze 2.4, pln� instalace)</a> (11MB)</li>
</ul>
<h4>Vylep�en� oproti verzi 2.3</h4>
<ul>
<li>5 nov�ch level�.</li>
<li>Kernel um� ukl�dat a nahr�vat hru, ud�l�n SavePoint.</li>
<li>P�ibyly nov� objekty do hry Krkal: SavePoint, Ledov� Koule, Teleport2 (um� teleportovat v�echny pohybliv� objekty).</li>
<li>Nov� grafika (Hrbolat� podlaha, SavePoint, Bal�nek, Pneumatika, Nitroglycerin, Proud, Ledov� koule).</li>
<li>Opravena chyba v Editoru - Editor nenahr�val shortcuty.</li>
<li>Editor: Spousta drobn�ch zm�n zam��en�ch na zv��en� p�ehlednosti. Vylep�ena funkce Refresh Object.</li>
<li>Kv�li vy��� p�ehlednosti p�ibyly nov� typy pro KSID jm�na: ObjectVoid a AutoVoid.</li>
<li>Zefektivn�ny registry. (A d�ky tomu zrychleno ukl�d�n� a nahr�v�n� level� a skript�.)</li>
<li>Aktualizov�na dokumentace (Popis hry Krkal, Jak ps�t skripty, Slu�by Kernelu).</li>
<li>Plus dal�� drobn� vylep�en�.</li>
</ul>

<a href="download2.html">Star�� verze...</a>


<h2>Technick� podpora, Informace, N�pov�da</h2>

<ul>
 <li>Velk� mno�stv� informac� najdete p��mo v dokumentaci, kterou jste si st�hli spole�n� s Krkalem</li>
 <li>Dal�� informace naleznete na t�chto str�nk�ch</li>
 <li>N�m�ty, ��dosti o rady, p�ipom�nky, hl�en� chyb, ... pos�lejte do na�eho
     internetov�ho f�ra: <a href="http://forum.krkal.org/cs/">forum.krkal.org</a></li>
 <li>A nakonec m��ete kontaktovat <a href="team.html">n�kter�ho z autor�</a> p��mo e-mailem</li>
</ul>

<?}else{?>
<h1>Star�� verze KRKALa</h1>
<h3>KRKAL verze 2.3</h3>
<ul>
<li class="download"><a href="dl/KRKALupdate_2.3.exe">KRKAL (verze 2.3, update z verze 2.2)</a> (2.3MB) - vy�aduje KRKALa verzi 2.2. St�hn�te si tento patch, pokud u� m�te nainstalovan�ho star��ho Krkala.</li>
<li class="download">KRKAL (verze 2.3, pln� instalace) (11MB) Stahujte pros�m ze serveru <a href="http://www.hernisvet.cz/index.php?page=hry_free&amp;page2=zobrazit&amp;id_hry=0000000486">hernisvet.cz</a>.</li>
<li class="download"><a href="dl/Krkal2.3.exe">KRKAL (verze 2.3, pln� instalace)</a> (11MB)</li>
</ul>

<h4>Vylep�en� oproti verzi 2.2</h4>
<ul>
<li>5 nov�ch level�.</li>
<li>N�kter� star� levely byly vylep�eny.</li>
<li>Levely jsou ji� kompletn� nasv�ceny.</li>
<li>Podstatn� zrychleno viditelnostn� t��d�n�. Hra je te� celkov� plynulej��, v n�kter�ch levelech se zvedlo fps a� 4x!</li>
<li>Jsou naprogramov�ny nov� objekty do hry Krkal (Elektrick� proudy, Hrbolat� podlaha, Sk�kav� st�na, Dve�e, Nitroglycer�n, Dynamick� sv�tla (u Hrbolat� podlahy, Proud� a Nitroglycerinu je�t� bohu�el chyb� vlastn� grafika)).</li>
<li>Hra Krkal pozm�n�na a vylep�ena, opraveny n�kter� chyby. (U� se nelze pohybovat proti sm�ru p�su, zm�n�no um�s�ov�n� v�buchu, postavi�ky se na Slizu prom��uj� v P��ery...)</li>
<li>Nov� grafika a zvuky (Vzn�ej�c� se krabice, Pr�lezn� st�na, Dve�e,...)</li>
<li>V editoru jsou obr�zky objekt� v ObjectListu, ze stromu byl odstran�n v�b�r automatick� grafiky.</li>
<li>Editor um� rychle znovunahr�t level se zm�n�n�m Game Modem. Zm��kn�te Shift+F2. Jen pozor, nezapome�te si ulo�it rozpracovanou pr�ci. Velmi u�ite�n� v�c pro testov�n� level�.</li>
<li>Editor um� zobrazovat koment��e k objekt�m (=Popis dan�ho objektu, podrobn� vysv�tlen�, co objekt d�l�). Ka�d� objekt m� nyn� koment��, d�le bylo roz���eno pou��v�n� n�pov�dn�ch tooltip� u editovateln�ch atribut�. T�m�� ka�d� polo�ka m� nyn� n�pov�du.</li>
<li>Aktualizov�na dokumentace (Popis hry Krkal, Jak ps�t skripty, Programov�n� hry Krkal, Slu�by Kernelu).</li>
<li>Kernel m� nov� slu�by pro pr�ci se zpr�vami (hled�n� a maz�n�).</li>
<li>Kernel um� um�s�ovat objekty mimo mapu.</li>
<li>V �vodn�m menu je stru�n� n�pov�da a credity, ud�l�no ReadMe.</li>
<li>Plus dal�� drobn� vylep�en�.</li>
<li>Ale kompil�tor je st�le nehor�zn� zabugovan�!!!!! :-(</li>
</ul>

<h3>KRKAL verze 2.2</h3>
<ul>
<li class="download">KRKAL (verze 2.2) (10MB) Stahujte pros�m ze server�: <a href="http://www.freehry.cz/index.php?id=hra&amp;gid=1295">freehry.cz</a>, <a href="http://www.hernisvet.cz/index.php?page=hry_free&amp;page2=zobrazit&amp;id_hry=0000000397">hernisvet.cz</a> a <a href="http://plnehry.idnes.cz/logicke/krkal.html">idnes.cz</a></li>
</ul>

<?}?>