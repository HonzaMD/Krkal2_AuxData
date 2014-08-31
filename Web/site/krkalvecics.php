<?include('ti.php');?>
<h1>Hra KRKAL: popis v�c�</h1>

<p>
Toto je popis v�ech hern�ch objekt� ve h�e KRKAL.
Tento text najdete i v u�ivatelsk� dokumentaci (Popis hry KRKAL).
</p>

<?
function shnav()
{
echo'<div class="vecinav">
<a href="#manici">Tvoje podoby</a> | <a href="#podlahy">Podlahy</a> | 
<a href="#steny">St�ny</a> | <a href="#prepinace">P�ep�na�e</a> | 
<a href="#veci">Sebrateln� p�edm�ty</a> | <a href="#strk_predmety">Strkateln� p�edm�ty</a> | 
<a href="#predmety">Dal�� p�edm�ty</a> | <a href="#prisery">P��ery</a> 
</div>
';
}
?>

<div class="krkalveci">
<? shnav();?>

<a name="manici"></a>
<h2>Tvoje podoby</h2>
<p>
Tvoje podoba se m��e v pr�b�hu hry m�nit. D�je se tak bu� mezi levely nebo z tv� vlastn� v�le pomoc� speci�ln�ch za��zen� - <a href="#hajzly">prom��ova��</a>, kter� mohou b�t um�st�ny v levlu. Ka�d� ze t�� podob m� sv� speci�ln� vlastnosti (n�jak� v�hody i nev�hody).
</p>
<?
  gebegin();
  ge("pasovec","P�sovec",'P�sovec je odoln� a obrn�n� tvor. Nevad� mu, kdy� na n�j spadne z v��ky <a href="#strk_predmety">k�men</a>.',"pasovec6.gif");
  ge("hemr","Hemr",'Jeho t�lo je tvo�eno p�ev�n� slizem. Je velmi lepkav�, a proto dok�e neklouzat po <a href="#led">ledu</a>. D�le, d�ky sv� n�zk� v��ce, m��e podl�zat <a href="#pruleznastena">pr�leznou st�nu</a> a vzn�ej�c� se <a href="#krabice">krabic�</a>.',"hemr6.gif");
  ge("dracek","Dr��ek",'Dr��ek jako jedin� um� plavat ve <a href="#voda">vod�</a>.',"dracek6.gif");
  geend();
?>
<? shnav();?>

<a name="podlahy"></a>
<h2>Podlahy</h2>
<?
  gebegin();
  ge("podlaha","Podlaha","Z�kladn� podlaha v Krkalovi. ��dn� v�c na podlahu nijak nep�sob�, podlaha nem��e ovlivnit ��dn� p�edm�t v Krkalovi.","podlaha-kameny.gif");
  ge("dira","D�ra, L�va",'V�echny <a href="#strk_predmety">strkateln�</a> a <a href="#veci">sebrateln� p�edm�ty</a> (krom� <a href="#balonek">bal�nku</a>), v�echny <a href="#manici">Tvoje podoby</a> a v�echny <a href="#prisery">p��ery</a>, pokud se ocitnou nad d�rou (�i d�ra se ocitne pod nimi), spadnou nen�vratn� do d�ry. D�ry a l�vy jsou bezedn�, tak�e do nich m��e� nastrkat libovoln� mno�stv� p�edm�t�. Do d�r nepad� bal�nek, jeliko� se vzn��, a r�zn� pevn� um�st�n� p�edm�ty (magnet) a st�ny.',"dira.gif");
  ge("propadlo","Propadac� podlaha",'Pokud na propadac� podlahu n�kdo vstoup� nebo se na ni dostane n�jak� p�edm�t, kter� by mohl spadnout do <a href="#dira">d�ry</a>, za�ne proces propad�n�. To znamen�, �e po ur�it�m �ase se propadaj�c� se podlaha zm�n� na d�ru (l�vu). P�edm�t do n� pak okam�it� spadne. �as propad�n� je zvolen tak, �e se d� stihnout: vl�zt na podlahu, odej�t na vedlej�� pol��ko, rychle se vr�tit na podlahu (je�t� nen� propadl�) a ut�ct (te� se propadne). V�buch zp�sob� okam�it� propadnut� podlahy.',"propadlo.gif");
  ge("hrboly","Hrbolat� podlaha",'Podlaha zabra�uje jak�mukoli strk�n�, �i pohybu <a href="#strk_predmety">p�edm�tu</a> po n�. (Ty a p��ery se po hrbolech pohybovat m��ete.)',"hrbpod.gif");
  ge("sliz","Toxick� sliz",'Pokud vstoup� na sliz, za�ne doch�zet k intoxikaci. Stupe� otravy indikuje pruh dole v hern�m menu. Pokud otrava stoupne na maximum, zem�e� a prom�n� se v <a href="#prisery">p��eru</a>. P�sovec se prom��uje bu� v p��eru Ot��ivou nebo Samonav�d�c�. Hemr v p��eru klaustrof�bn� a Dr��ek v p��eru Dopravn�. Jestli�e sliz zase opust�, intoxikace op�t postupn� klesne na nulu. Dok�e� p�ej�t 3 pol��ka slizu. Sliz neubli�uje ��dn� p��e�e nebo p�edm�tu.',"sliz.gif");
  ge("voda","Voda",'Jedin� <a href="#dracek">Dr��ek</a> um� ve vod� plavat. Pro v�echny tv� ostatn� podoby, p��ery a p�edm�ty p�sob� voda stejn� jako <a href="#dira">d�ra</a>.',"voda.gif");
  ge("led","Led",'Jedin� <a href="#hemr">Hemr</a> na ledu neklou�e. V�echno ostatn�, co na led vkro��, �i je str�eno, za�ne klouzat. To znamen�, �e ona v�c se bude pohybovat st�le stejn�m sm�rem a zastav� se, a� naraz� na druh� stran� ledu do n�jak� st�ny, �i p�edm�tu. V�c se tedy nem��e sama zastavit, ani sama zm�nit sm�r. V�buch led rozeh�eje a zm�n� na <a href="#voda">vodu</a>.',"led.gif");
  ge("pas","P�s",'V�echny pohybliv� p�edm�ty (krom� <a href="#balonek">Bal�nku</a>), pokud se samy nepohybuj�, jsou odsunuty ve sm�ru pohybu p�su. Pokud se p�edm�t (Ty) pohybuje(�) kolmo na p�s a ani na chvilku se nezastav�(�), projde(�) kolmo p�es p�s a ten p�edm�t (Tebe) nesta�� nijak vych�lit. Proti sm�ru pohybu p�su se pohybovat nelze. Pohyb po sm�ru nijak nezvy�uje tvoji rychlost. P�s m��e b�t i vypnut�, v tom p��pad� se chov� jako oby�ejn� podlaha.',"pas60.gif");
  ge("exit","Exit","Tato podlaha je c�lem hry. Vstoup�-li na ni, level �sp�n� skon��.","exit.gif");
  ge("save","Savepoint","Vstoup�-li na SavePoint, zapamatuje se cel� stav levelu. Pokud n�kde pozd�ji ud�l� chybu, m��e� se k tomuto stavu vr�tit a zkusit to tentokr�t zahr�t spr�vn�. Pokud SavePoint nen� vypnut�, m��e� na n�j vstupovat kolikr�t chce�, p�edchoz� stav se zapomene, zapamatov�n bude ten nejnov�j��. Jen d�vej pozor, aby sis neulo�il stav, ze kter�ho u� level nejde dohr�t!","save.gif");
  geend();
?>
<? shnav();?>

<a name="steny"></a>
<h2>St�ny</h2>
<?
  gebegin();
  ge("stena","St�na",'Klasick� pevn� st�na. Nelze ��dn�m klasick�m zp�sobem zni�it, p�el�zt nebo odstr�it.',"stena0000.gif");
  ge("skavastena",'Sk�kav� St�na','St�na, kter� m��e vysko�it nahoru a nechat t� pod sebou proj�t, ale pozor, a� t� nerozm��kne! St�na typicky b�v� ovl�d�na <a href="#prepinace">p�ep�na�i</a> (pos�l�n�m zpr�v <code>OdstartujSkoky</code>, <code>OtevriStenu</code> a <code>ZavriStenu</code>), kter� ji mohou poslat nahoru nebo dolu, d�le st�na m��e opakovan� sk�kat. Nelze ��dn�m klasick�m zp�sobem zni�it, p�el�zt nebo odstr�it.',"stena0000.gif");
  ge("znicitelnastena","Zni�iteln� st�na",'Tato st�na ji� lze zni�it. Zni�� j� v�buch. D�le st�na p�sob� kulat�. Tedy pokud na ni spadne nebo jinak se k n� "dopohybuje" n�jak� jin� kulat� p�edm�t, tak tento p�edm�t se kolem st�ny obkut�l� (pokud na to m� m�sto).',"stenaroz.gif");
  ge("antimagnet",'Antimagnetick� st�na','Tato st�na, jako jedin�, ru�� ��inky <a href="#magnet">Magnetu</a>. St�na je nezni�iteln�.',"antimagnet.gif");
  ge("hlina","Hl�na",'Hl�na je zni�iteln� v�emi klasick�mi zp�soby a nav�c ji m��e� zni�it i Ty t�m, �e na ni prost� vleze�. (Hl�na ti nebran� v pohybu a Ty tv�m pohybem v n� d�l� cesti�ky.) Ve hl�n� se nem��ou pohybovat <a href="#prisery">p��ery</a> ani jak�koli <a href="#strk_predmety">p�edm�ty</a>. Pokud tedy k�men spadne na hl�nu, zastav� se o ni a hl�nu nijak nezni��. Pod hl�nou mohou byt narafi�eny r�zn� nebezpe�n� podlahy (nap�. <a href="#dira">d�ry</a>).',"hlina.gif");
  ge("dvere","Dve�e",'Pokud jsou dve�e zav�en�, p�sob� jako nezni�iteln� st�na. Otev�en� neznamenaj� ��dnou p�ek�ku, v�e v�etn� t�eba <a href="#proud">Proudu</a> m��e proj�t skrz. V�t�inou jsou dve�e nastaveny tak, aby se otev�raly, kdy� se p�ed n� postav� ty. M��ou ale reagovat i na jin� objekty nebo m��ou b�t vypnuty.',"dvereV0000.gif");
  ge("pruleznastena","Pr�lezn� st�na",'Touto st�nou m��e prol�zat jedin� <a href="#hemr">Hemr</a>, pro v�e ostatn� se chov� jako p�ek�ka. St�na je zni�iteln�.',"prulstena.gif");
  ge("zamky","Z�mky",'Chovaj� se jako nezni�iteln� st�ny. M��e� je odemknout pouze <a href="#klice">kl��em</a> stejn� barvy.',"zamekR.gif");
  geend();
?>
<? shnav();?>

<a name="prepinace"></a>
<h2>P�ep�na�e</h2>
<p>
P�ep�na�e dok�� v levelu t�m�� cokoli zm�nit. Dok�� zap�nat a vyp�nat <a href="#pas">p�sy</a>, dok�� tvo�it p�edm�ty, dok�� naprosto zm�nit um�st�n� st�n, zm�nit podlahy na jin�, vytvo�it pr�chod ve st�n�... A ka�d� p�ep�na� m��e t�chto zm�n ud�lat n�kolik. P�ep�na�e jsou nezni�iteln�.
</p>
<?
  gebegin();
  ge("naslapnapodlaha","N�lapn� podlaha","N�lapn� podlaha reaguje, pokud je zat�ena n�jak�m t�k�m p�edm�tem. M��e b�t nastavena tak, �e p�i zat�eni n�co zapne a p�i uvoln�n� to zase vr�t� do p�vodn�ho stavu. Druh� mo�nost je, �e p�i zat�en� (nebo uvoln�n�) n�co ud�l� a u� to tak nech�.","naslapnapodlaha0.gif");
  ge("prepinac","P�ep�na�","M��e� ho zapnout jedin� Ty t�m, �e se sna�� j�t na jeho pol��ko. P�ep�na� m��e� bu� p�ehazovat z polohy zapnuto do polohy vypnuto (a obr�cen�) a on v�dy n�co ud�l� a pak to vr�t� do p�vodn�ho stavu. Nebo je nastaven tak, �e lze p�epnout jen jednou.","prepinac0.gif");
  ge("fotobunka","Fotobu�ka",'Fotobu�ka reaguje, pokud se na pol��ko vedle n� (i v �ikm�ch sm�rech) dostane n�jak� �iv� bytost (<a href="#manici">ty</a> nebo <a href="#prisery">p��era</a>), tak� reaguje na v�buch. Deaktivace nast�v�, kdy� tato bytost nebo v�buch "odejde". Op�t stejn� jako n�lapn� podlaha m��e p�ep�nat stavy nebo jenom ur�it� stav uskute��ovat.',"fotobunka1.gif");
  ge("globprepinac","Glob�ln� p�ep�na�","Tento p�ep�na� nen� v levlu reprezentov�n ��dnou grafikou, nen� um�s�ov�n do mapy, ale mezi glob�ln� objekty. Funguje podobn� jako fotobu�ka s t�m, �e oblast, kde reaguje na objekty, a typy t�ch objekt� se zad�vaj� a� b�hem editace.");
  geend();
?>

<h3>Editace p�ep�na��</h3>
<p>
Ka�d� p�ep�na� m��e pracovat ve dvou re�imech:
</p>
<ul>
<li><b>p�ep�n�</b> - p�i aktivaci p�ep�na� provede n�jakou akci (akce), p�i dal�� aktivaci to vr�t� do p�vodn�ho stavu</li>
<li><b>nep�ep�n�</b> - p�i ka�d� aktivaci p�ep�na� provede danou akci (akce)</li>
</ul>
<p>
Pokud p�ep�na� um�s�uje n�jak� objekty do mapy, div� se, zda c�lov� m�sto u� nen� obsazeno n���m jin�m (zda um�s�ovan� objekt koliduje). Pokud je za�krtnut tag <code>Nekoliduj</code>, p�ep�na�, v p��pad� kolize, objekt neum�st�. Pokud <code>Nekoliduj</code> nen� nastaven, bude objekt um�st�n v�dy, p��padn� koliduj�c� objekt bude odstran�n z mapy.
</p>
<p>
U p�ep�na��, kter� obsahuj� trigger (N�lapn� podlaha, Fotobu�ka, Glob�ln� p�ep�na� a pod.) je mo�no nastavit prom�nnou <code>Reaguje</code>. T�m lze ur�it, kdy doch�z� k aktivaci p�ep�na�e.
</p>
<ul>
<li><code>ReagujeVzdy</code> - reaguje p�i zapnut� i p�i vypnut�</li>
<li><code>PriZapnuti</code> - reaguje pouze p�i zapnut� (zapnuto = kolem fotobu�ky jsou objekty na kter� reaguje)</li>
<li><code>PriVypnuti</code> - reaguje pouze p�i vypnut� (vypnuto = kolem fotobu�ky nejsou ��dn� objekty na kter� reaguje)</li>
</ul>
<p>
Ka�d� p�ep�na� m��e d�lat 0 a� n <b>akc�</b>. U ka�d� akce m��eme nez�visle ur�it, co p�ep�na� bude d�lat.
</p>
<p>
<b>Vytvo�en� Akce:</b>
</p>
<ul>
<li>V polo�ce <code>DruhAkce</code> je t�eba vybrat typ �innosti (um�s�ov�n�, odeb�r�n�, v�m�na...)</li>
<li>V polo�ce <code>Pusobnost</code> je t�eba vybrat, �eho se �innost bude t�kat. Jsou zde dv� mo�nosti. P�ep�na� m��e pracovat s ji� existuj�c�mi (vytvo�en�mi) objekty. Je nap��klad mo�n� vytvo�it objekt mimo mapu, naeditovat jeho vlastnosti a pak ho n�kdy v pr�b�hu hry do mapy um�stit (bude um�st�n na ty sou�adnice, kter� jsou zad�ny u n�j). Druh� mo�nost je pr�ce s oblast�. V tom p��pad� p�ep�na� um�s�uje do oblasti objekty zadan�ho typu, �i naopak hled� v oblasti objekty zadan�ho typu a pak je t�eba odeb�r�...</li>
<li>Klikn�te na button <code>Pridej Akci</code></li>
<li>A nakonec je t�eba p��slu�nou akci naeditovat. Zadat po�adovan� objekty nebo oblast, zadat typy objekt� a podobn�.</li>
</ul>
<p>
<b>Druhy Akc�:</b>
</p>
<ul>
<li><code>PrepUmisti</code> - P�ep�na� vypln� oblast dan�m typem objektu. Nebo um�st� dan� objekty.</li>
<li><code>PrepOdeber</code> - P�ep�na� odebere v�echny objekty dan�ho typu z oblasti. Nebo odebere dan� objekty.</li>
<li><code>PrepOdeberUmisti</code> - Kombinace p�edchoz�ch dvou akc�.</li>
<li><code>PrepVymen</code> - P�ep�na� najde v oblasti objekty prvn�ho typu a m�sto nich um�st� objekty typu druh�ho. Nebo p�ep�na� odebere objekty z prvn�ho seznamu a na jejich m�sto um�st� objekty ze seznamu druh�ho.</li>
<li><code>PrepMessage</code> - Objekt�m dan�ho typu na dan� oblasti bude zas�l�na zpr�va. Nebo dan�m existuj�c�m objekt�m bude zas�l�na zpr�va. Pokud p�ep�na� p�ep�n� je t�eba zadat zpr�vy dv�. Jednu, kter� se bude pos�lat p�i zapnut�, a druhou, kter� se bude pos�lat p�i vypnut�. Typick� pou�it� je pro pos�l�n� zpr�v typu "zapni se" a "vypni se".</li>
</ul>
<? shnav();?>

<a name="veci"></a>
<h2>Sebrateln� p�edm�ty (V�ci)</h2>
<p>
Tyto p�edm�ty jsou zni�iteln�, mohou se h�bat, pokud na n� p�sob� n�jak� s�la, nap��klad <a href="#magnet">magnet</a> nebo <a href="#pas">p�s</a>. Tak� ochotn� padaj� do <a href="#dira">d�r</a>, aktivuj� <a href="#naslapnapodlaha">n�lapn�</a> a <a href="#propadlo">propadaj�c�</a> podlahy. V�echny tyto p�edm�ty tak� p�sob� kulat�. Tedy p�i pohybu se obkut�lej�, sypou se do hrom�dek a podobn�. Ty, pokud m� je�t� m�sto v invent��i a pokud vejde� na pol��ko s p�edm�tem, tak ten p�edm�t sebere�. Pokud m� plno, p�ech�z� nad p�edm�tem, nem��e� ho strkat. <a href="#prisery">P��ery</a> tak� chod� nad p�edm�tem.
</p>
<?
  gebegin();
  ge("klice","Kl��e",'Kl��e jsou p�edm�ty, kter� slou�� k odemyk�n� <a href="#zamky">z�mk�</a>. Z�mek odemkne kl�� stejn� barvy. Ka�d� kl�� je na jedno pou�it�. Tedy po odemknut� z�mku zmiz� nevratn� z�mek i kl��.',"klic_cerveny.gif");
  ge("bomba","Bomba",'Pokud bombu pou�ije�, um�st� pod sebe aktivovanou bombu. Ta za p�r sekund vybuchne. V�buch je v�dy velik� 3*3 pol��ka okolo bomby a zni�� v�e zni�iteln� na tomto �zem�. V�buch se ned� nijak odst�nit, nap�. nezni�itelnou st�nou. Pokud tedy polo�� bombu, je t�eba rychle ut�ct z oblasti v�buchu. Pokud je bomba zni�ena, vybuchuje. To umo��uje vznik takzvan�ch �et�zov�ch v�buch�, kdy jsou bomby um�st�n� v �ad� a na n�kter�m m�st� dojde ke vzn�cen�.',"bomba.gif");
  ge("mina","Mina",'V levlu m��ou b�t rozm�st�ny aktivovan� i neaktivovan� miny. Ty neaktivovan� m��e� sb�rat. Pokud polo�� minu, ta p�r sekund �ek�, ne� se aktivuje (abys mohl ut�ct). Pot�, pokud se n�co �iv�ho (<a href="#manici">Ty</a> nebo <a href="#prisery">p��era</a>) nebo v�buch ocitne na pol��ku vedle aktivovan� miny, mina je�t� chvilku po�k� a pak vybuchne. Lze stihnout aktivovanou minu vyru�it a rychle ut�ct p�ed v�buchem. Rozhodn� ale nelze stihnout nad aktivovanou minou prob�hnout. P�i zni�en� mina vybuchuje. �et�zov� v�buch u min vznik�, u� kdy� jsou miny um�st�ny ob jedno pol��ko.',"mina.gif");
  ge2("znacky","Dopravn� zna�ky",'Podle dopravn�ch zna�ek se ��d� <a href="#pot_dopravni">dopravn�</a> a <a href="#pot_klaustr">klaustrofobn�</a> p��ery. Tyto p��ery rozhodn� neporu�uj� dopravn� p�edpisy. Pot�ebuje�-li m�t ur�itou p��eru na ur�it�m m�st�, nen� nic jednodu���ho, ne� si pat�i�n� pohr�t s dopravn�m zna�en�m. Zna�ky nesb�r� automaticky, ale jen kdy� dr�� kl�vesu pro sb�r�n� zna�ek. (defaultn� je to \'A\'). Zna�ky nejsou p�itahov�ny <a href="#magnet">magnetem</a>.
    <ul>
    <li>Pokud p��era vkro�� na sm�rovou zna�ku, zm�n� podle n� sv�j sm�r.</li>
    <li>U z�kazu vjezdu se p��era oto�� o 180�.</li>
    <li>�edes�tka sn�� rychlost p��ery na norm�ln�.</li>
    <li>Konec �edes�tky zp�sob�, �e se p��era bude pohybovat fakt rychle.</li>
    <li>P�i n�razu do nepr�chodn� p�ek�ky se p��era oto�� o 180�.</li>
    </ul>',
    84,"zakazvjezdu.gif","prikazanysmer6.gif","60.gif","konec60.gif");
  geend();
?>
<? shnav();?>

<a name="strk_predmety"></a>
<h2>Strkateln� p�edm�ty</h2>
<p>
Jsou to pohybliv� a �oupateln� p�edm�ty (nejdou tedy sb�rat), r�zn�ch vlastnost�. P�edm�ty a� na <a href="#krabice">Krabici</a> p�sob� kulat�.
</p>
<?
  gebegin();
  ge("kamen","K�men",'Pohybliv� a �oupateln� p�edm�t, je t�k� (pad� do <a href="#dira">d�r</a>, aktivuje <a href="#podlahy">podlahy</a>, zabije t�, kdy� na tebe spadne). P�sob� na n�j <a href="#pas">p�s</a>, <a href="#magnet">magnet</a> a <a href="#led">led</a>, p�sob� kulat�. Je zni�iteln�.',"kamen0000.gif");
  ge("krabice","Krabice",'Krabice se vzn�� nad zem� na vzduchov�m pol�t��i, <a href="#hemr">Hemr</a> ji m��e podl�zt. Krabice je nezni�iteln�, pohybliv� a strkateln� (p�sob� na n� <a href="#pas">p�s</a>, <a href="#magnet">magnet</a> i <a href="#led">led</a>), pad� do d�r a aktivuje podlahy.',"krabice0000.gif");
  ge("balonek","Bal�nek",'Bal�nek je lehk� a je nadn�en hork�m plynem, tak�e nen� v kontaktu s <a href="#podlahy">podlahami</a>, ani t� nezabije, kdy� na tebe spadne, naopak s�m je zni�iteln�. P�sob� kulat�.',"balonek.gif");
  ge("pneumatika","Pneumatika",'Pneumatika nen� p�itahov�na <a href="#magnet">magnetem</a>, jinak se chov� stejn� jako <a href="#kamen">k�men</a>.',"pneumatika.gif");
  ge("nitrak","Nitroglycerin",'Je to strkateln� p�edm�t, kter� vybuchuje po n�razu, p�i p�du z v��ky nebo v jin�m v�buchu. P�i strk�n� pozor, a� s n�m nikde nenaraz� do st�ny!',"nitroglycerin.gif");
  ge("ledovka","Ledov� koule",'Tato koule je tvo�ena cel� z ledu, a proto, jakmile u� se jednou d� do pohybu, tak se pohybuje st�le stejn�m sm�rem a zastav� se a� o n�jakou pevnou p�ek�ku. Ledov� koule je zni�iteln�, p�sob� kulat� a nen� p�itahov�na <a href="#magnet">magnetem</a>.',"ledovakoule.gif");
  geend();
?>
<? shnav();?>

<a name="predmety"></a>
<h2>Dal�� p�edm�ty</h2>
<?
  gebegin();
  ge("magnet","Magnet",'Magnet generuje magnetick� pole t�m sm�rem, jak�m je nasm�rov�n. Pole jednoho magnetu je v�dy omezeno na �adu �i sloupec velikosti 1*n pol��ek. Pole za��n� magnetem a kon�� okrajem levelu nebo <a href="#antimagnet">antimagnetickou st�nou</a>. Nic jin�ho pole magnetu p�eru�it nem��e. V�echny <a href="#strk_predmety">pohybliv� v�ci</a>, kter� jsou p�itahov�ny magnetem, se za�nou pohybovat sm�rem k magnetu, pokud jim v tom nebr�n� n�jak� p�ek�ka. Magnet zp�sobuje tzv. padan� p�edm�t�. Padaj�c� p�edm�ty zabij� <a href="#hemr">Hemra</a>, <a href="#dracek">Dr��ka</a> a v�echny <a href="#prisery">p��ery</a>. Magnet je nezni�iteln�.',"magnet6.gif");
  ge("proud","Elektrody s vysok�m nap�t�m",'Jedna elektroda generuje v ur�it�ch intervalech v�boj elektrick�ho proudu. Tento v�boj je dlouh� paprsek, kter� kon�� a� na prvn� p�ek�ce, pokud je tato p�ek�ka zni�iteln�, bude zni�ena. Proudem se d� prob�hnout v intervalech mezi v�boji. Pokud je naproti Elektrod� jin� Elektroda, kter� vys�l� v�boje ve stejn�ch �asech, proud mezi nimi se ustal� a u� se nep�eru�uje. Pokud mezi Elektrody narafi�� n�jakou v�c, Elektrody mezi sebou ztrat� kontakt a dojde k chvilkov�mu p�eru�en� proudu, v tom okam�iku m��e� m�stem, kde byl proud, prob�hnout. Elektrody jsou nezni�iteln�.');
  ge("teleport","Teleport",'Pokud vstoup� do teleportu, jsi teleportov�n na jin� m�sto levelu, v�t�inou to b�v� tak� teleport - ale nen� to nutn�. Plat� pravidlo, �e kdy� vleze� do teleportu ur�it�m sm�rem, z druh�ho teleportu pak vyleze� stejn�m sm�rem. (P��klad : vstoup�-li do teleportu z lev� strany, pak se objev� napravo od m�sta, kam teleport teleportuje.) Pokud je toto m�sto zablokov�no n�jakou p�ek�kou, vyzkou�� se nejprve sm�ry kolm� na tv�j p�vodn� sm�r, a� nakonec se testuje sm�r oto�en� o 180�. Pokud je i on zablokov�n, teleportace se neuskute�n�. Teleport je zni�iteln�.',"teleport1.gif");
  ge2("hajzly","Prom��ova�e (Hajzly)",'Prom��ova� funguje stejn� jako <a href="#teleport">teleport</a>, ale nav�c zm�n� tvoji <a href="#manici">podobu</a>. �asto je m�sto teleportace nastaveno na stejn� m�sto, kde je prom��ova�.',116,"hajzly-pasovec.gif","hajzly-hemr.gif","hajzly-dracek.gif");
  geend();
?>
<? shnav();?>

<a name="prisery"></a>
<h2>P��ery</h2>
<p>
Pro pohyb p��er plat� stejn� pravidla jako t�eba pro <a href="#pasovec">P�sovce</a>. Krom� toho, �e n�kam cht�t cht�j�, na n� p�sob� i <a href="#pas">p�sy</a> a <a href="#led">led</a>. Pokud p�ek�� p��e�e v cest�, zabije t� (to neplat� pro <a href="#pot_klaustr">P��eru klaustrof�bn�</a>).
</p>
<?
  gebegin();
  ge("pot_otaciva","P��era ot��iv�",'P��era ot��iv� chod� kolem st�n podle pravidla lev� nebo prav� ruky (z�le�� na tom, jak je nastavena). V�t�inou tedy obch�z� vn�j�� st�ny n�jak� oblasti ve snaze dostat se ven z t� oblasti, nebo obch�z� kolem n�jak�ho p�edm�tu, �i st�ny, ve snaze dostat se dovnit�. Vrcholem jej�ho sna�en� m��e b�t pak to, �e se za�ne to�it na m�st�. P��era ot��iv� je natolik inteligentn�, �e neleze do viditeln�ho nebezpe��, nap�. do <a href="#dira">d�ry</a>, <a href="#proud">proudu</a>, ale klidn� se nech� zlikvidovat od <a href="#mina">miny</a>.',"potvoraotaciva6.gif");
  ge("pot_dopravni","P��era dopravn�",'P��era dopravn� ��d� sv�j pohyb podle dopravn�ch <a href="#znacky">zna�ek</a>. M��e se pohybovat norm�ln� nebo rychlou rychlost�, rychlost se d� tak� m�nit zna�kami. Pokud p��era naraz� na nepr�chodnou p�ek�ku, oto�� se o 180�. Tato p��era u� nen� inteligentn�, a proto ochotn� pad� do <a href="#dira">d�r</a>.',"potvoraznackova6.gif");
  ge("pot_klaustr","P��era klaustrofobn�",'Pohybuje se podle �pln� stejn�ch pravidel, jako <a href="#pot_dopravni">p��era dopravn�</a>. Na rozd�l od v�ech ostatn�ch p��er t� nezab�j�. Jej� nebezpe�nost spo��v� v tom, �e jakmile se dostane na n�jak� m�sto, ze kter�ho nem��e odej�t, strachem vybouchne. Sta��, kdy� nem��e j�t ani dop�edu, ani dozadu, do stran toti� sama od sebe nep�jde, nedostane-li k tomu pokyn dopravn� <a href="#znacky">zna�kou</a>.',"potvoraklaustrofobni6.gif");
  ge("pot_samonav","P��era samonav�d�c�",'Sna�� se j�t t�m sm�rem, kde jsi ty. Nen� sice natolik inteligentn�, aby dok�zala proch�zet slo�it� bludi�t�, ale p�esto je velmi nebezpe�n�. Stejn� jako <a href="#pot_otaciva">p��era ot��iv�</a> se vyh�b� viditeln�mu nebezpe��.',"potvorasamonavadeci6.gif");
  geend();
?>
<? shnav();?>

</div>

<p>
Podrobn�j�� prozkoum�n� p�edm�t� p�enech�m na ka�d�m hr��i... 
</p>
<p>
<b>Tak dost �e�� a hur� do hry. Hodn� �t�st�!</b>
</p>
<div class="vecinav"> <a href="#">nahoru</a> </div>
