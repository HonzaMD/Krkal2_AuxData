<?include('ti.php');?>
<h1>Co je KRKAL?</h1>
<p>
KRKAL je rozs�hl� syst�m pro v�voj her, kter� se odehr�vaj� na 
obd�ln�kov�m pl�nu. V syst�mu KRKAL lze vytv��et �pln� nov� hry, 
vylep�ovat hry ji� hotov�, vytv��et nov� hern� �rovn� (levely) 
a samoz�ejm� tak� v�echny tyto hry hr�t.
Sou��st� je i znovu vytvo�en� hra Krkal, v�konn� grafick� engine,
editor levl� a skript�, kompil�tor.
Krkal byl vytvo�en jako projekt na Matematicko Fyzik�ln� Fakult�
Univerzity Karlovy.
</p>
<img src="/img/manik.png" width="200" height="200" alt="Dr��ek" style="float:right"/>
<h2>Hra Krkal</h2>
<p>
Hra Krkal je logicko-ak�n� hra, kde si vyzkou��te ovl�d�n� jedn� 
ze t�� postavi�ek, pom��ete j� vy�e�it v�echny n�strahy, p�ekonat
rafinovan� p�ek�ky a nakonec se ve zdrav� dostat do vytou�en�ho
c�le ka�d�ho levelu - do exitu. 
</p>
<p>
Levely jsou postaveny z mnoha rozmanit�ch prvk� �i p�edm�t�, kter� 
ovliv�uj� jak sami sebe navz�jem, tak i v�s. Budete posouvat kameny, 
klouzat po ledu, vyh�bat se min�m, spr�vn� nastavovat r�zn� tla��tka, 
bloudit v bludi�t�ch a t�eba p�estavovat zna�ky pro dopravn� p��ery...
</p>
<p>
Hra Krkal je prost� velmi zaj�mav� a origin�ln�. V�e vid�te 
p�ehledn� z v��ky a d�ky Syst�mu Krkal nechyb� kvalitn� grafika
i hudba. V Syst�mu je mo�n� nejen editovat nov� levly, ale p��mo
vytv��et zcela nov� hern� objekty, vylep�ovat a modifikovat samotnou
hru!
<br/>
<a href="krkal.html">V�ce o h�e KRKAL...</a>
</p>
<h2>Speci�ln� skriptovac� jazyk</h2>
<p>
Pro tvorbu her v na�em syst�mu jsme vyvinuli speci�ln� programovac� jazyk. Zam��ili jsme se hlavn� na to, aby bylo snadn� roz�i�ovat a modifikovat ji� existuj�c� hry a to i n�kolika nez�visl�mi u�ivateli sou�asn�. V podstat� ka�d� si svou obl�benou hru m��e vylep�it, podle sv�ch p��n�. Jazyk je objektov� orientovan�, vych�z� z klasick�ho C a obsahuje prost�edky pro simulaci sou�asn�ho �ivota mnoha objekt�...
</p>
<p>
Sou��st� syst�mu je editor skript� spojen� s kompil�torem. Kompil�tor um� skripty p�ekl�dat jak do jak�hosi na�eho �assembleru�, kter� je pak za b�hu interpretov�n, tak do C++, kter� m��eme p�ipojit k cel�mu projektu KRKAL, tyto skripty nejsou interpretov�ny, jsou tud� velice rychl�.
</p>
<h2>Modern� grafick� engine</h2>
<p>
Sna�ili jsme se o to, aby na�e hry byly velice p�kn� a nezaost�valy za sou�asnou konkurenc�. A� je n� engine dvourozm�rn�, dok�e zobrazovat trojrozm�rn� sv�t v izometrick� projekci, v�etn� realisticky po��tan�ho osv�tlen�. Engine zvl�d� lok�ln� bodov� sv�tla, kter� mohou b�t um�s�ov�na p��mo do levlu, na konkr�tn� prostorov� sou�adnice, d�le glob�ln� sv�tlo shora, kter� m� korektn� po��tan�, realistick� st�ny. V�po�et osv�tlen� prob�h� ve 3D! K vykreslov�n� pou��v�me hardwarovou akceleraci a d�ky dvourozm�rn� povaze enginu je grafika velmi jemn�, hladk� a detailn� a vypad� dob�e i v n�zk�ch rozli�en�ch.
</p>
<p>
Grafika nen� k objektu p�ipojov�na p��mo, ale p�es takzvan� automatismy, co� je soubor rozhodovac�ch pravidel, kter� ur�uj�, jak� grafika se pro konkr�tn� situaci pou�ije. Skripty se tedy o grafiku nemusej� t�m�� starat. Automatismy �e�� nap��klad spr�vn� navazov�n� obr�zk� na sebe, n�hodn� alterace a vzory, animace, ...
</p>
<h2>Editor level�</h2>
<p>
Je to univerz�ln� n�stroj, kter� slou�� k editaci level� dop�edu nezn�m�ch her. V editoru je mo�n� um�s�ovat objekty do mapy a nastavovat jejich atributy. Zp�sob editace je ��zen skripty. I p�esto, �e nev�me, jak konkr�tn� hra m��e vypadat, sna�ili jsme se, aby pr�ce s editorem byla maxim�ln� efektivn� a jednoduch�. V editoru je mo�n� sou�asn� hru hr�t i editovat.
</p>
<p>
<a href="http://forum.krkal.org/cs/viewtopic.php?t=16">Jak pou��vat editor levl�</a>
</p>
<h2>Vlastn� grafick� u�ivatelsk� rozhran�</h2>
<p>
Pro syst�m Krkal jsme vyvinuli vlastn� GUI, abychom m�li lep�� kontrolu nad ovl�dac�mi prvky a mohli libovoln� upravovat jejich styl �i vzhled.
</p>
