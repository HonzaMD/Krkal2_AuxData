<?include('ti.php');?>
<h1>Hra KRKAL: popis vìcí</h1>

<p>
Toto je popis všech herních objektù ve høe KRKAL.
Tento text najdete i v uivatelské dokumentaci (Popis hry KRKAL).
</p>

<?
function shnav()
{
echo'<div class="vecinav">
<a href="#manici">Tvoje podoby</a> | <a href="#podlahy">Podlahy</a> | 
<a href="#steny">Stìny</a> | <a href="#prepinace">Pøepínaèe</a> | 
<a href="#veci">Sebratelné pøedmìty</a> | <a href="#strk_predmety">Strkatelné pøedmìty</a> | 
<a href="#predmety">Další pøedmìty</a> | <a href="#prisery">Pøíšery</a> 
</div>
';
}
?>

<div class="krkalveci">
<? shnav();?>

<a name="manici"></a>
<h2>Tvoje podoby</h2>
<p>
Tvoje podoba se mùe v prùbìhu hry mìnit. Dìje se tak buï mezi levely nebo z tvé vlastní vùle pomocí speciálních zaøízení - <a href="#hajzly">promìòovaèù</a>, které mohou bıt umístìny v levlu. Kadá ze tøí podob má své speciální vlastnosti (nìjaké vıhody i nevıhody).
</p>
<?
  gebegin();
  ge("pasovec","Pásovec",'Pásovec je odolnı a obrnìnı tvor. Nevadí mu, kdy na nìj spadne z vıšky <a href="#strk_predmety">kámen</a>.',"pasovec6.gif");
  ge("hemr","Hemr",'Jeho tìlo je tvoøeno pøevánì slizem. Je velmi lepkavı, a proto dokáe neklouzat po <a href="#led">ledu</a>. Dále, díky své nízké vıšce, mùe podlézat <a href="#pruleznastena">prùleznou stìnu</a> a vznášející se <a href="#krabice">krabicí</a>.',"hemr6.gif");
  ge("dracek","Dráèek",'Dráèek jako jedinı umí plavat ve <a href="#voda">vodì</a>.',"dracek6.gif");
  geend();
?>
<? shnav();?>

<a name="podlahy"></a>
<h2>Podlahy</h2>
<?
  gebegin();
  ge("podlaha","Podlaha","Základní podlaha v Krkalovi. ádná vìc na podlahu nijak nepùsobí, podlaha nemùe ovlivnit ádnı pøedmìt v Krkalovi.","podlaha-kameny.gif");
  ge("dira","Díra, Láva",'Všechny <a href="#strk_predmety">strkatelné</a> a <a href="#veci">sebratelné pøedmìty</a> (kromì <a href="#balonek">balónku</a>), všechny <a href="#manici">Tvoje podoby</a> a všechny <a href="#prisery">pøíšery</a>, pokud se ocitnou nad dírou (èi díra se ocitne pod nimi), spadnou nenávratnì do díry. Díry a lávy jsou bezedné, take do nich mùeš nastrkat libovolné mnoství pøedmìtù. Do dìr nepadá balónek, jeliko se vznáší, a rùzné pevnì umístìné pøedmìty (magnet) a stìny.',"dira.gif");
  ge("propadlo","Propadací podlaha",'Pokud na propadací podlahu nìkdo vstoupí nebo se na ni dostane nìjakı pøedmìt, kterı by mohl spadnout do <a href="#dira">díry</a>, zaène proces propadání. To znamená, e po urèitém èase se propadající se podlaha zmìní na díru (lávu). Pøedmìt do ní pak okamitì spadne. Èas propadání je zvolen tak, e se dá stihnout: vlézt na podlahu, odejít na vedlejší políèko, rychle se vrátit na podlahu (ještì není propadlá) a utéct (teï se propadne). Vıbuch zpùsobí okamité propadnutí podlahy.',"propadlo.gif");
  ge("hrboly","Hrbolatá podlaha",'Podlaha zabraòuje jakémukoli strkání, èi pohybu <a href="#strk_predmety">pøedmìtu</a> po ní. (Ty a pøíšery se po hrbolech pohybovat mùete.)',"hrbpod.gif");
  ge("sliz","Toxickı sliz",'Pokud vstoupíš na sliz, zaène docházet k intoxikaci. Stupeò otravy indikuje pruh dole v herním menu. Pokud otrava stoupne na maximum, zemøeš a promìníš se v <a href="#prisery">pøíšeru</a>. Pásovec se promìòuje buï v pøíšeru Otáèivou nebo Samonavádìcí. Hemr v pøíšeru klaustrofóbní a Dráèek v pøíšeru Dopravní. Jestlie sliz zase opustíš, intoxikace opìt postupnì klesne na nulu. Dokáeš pøejít 3 políèka slizu. Sliz neubliuje ádné pøíšeøe nebo pøedmìtu.',"sliz.gif");
  ge("voda","Voda",'Jedinı <a href="#dracek">Dráèek</a> umí ve vodì plavat. Pro všechny tvé ostatní podoby, pøíšery a pøedmìty pùsobí voda stejnì jako <a href="#dira">díra</a>.',"voda.gif");
  ge("led","Led",'Jedinı <a href="#hemr">Hemr</a> na ledu nekloue. Všechno ostatní, co na led vkroèí, èi je strèeno, zaène klouzat. To znamená, e ona vìc se bude pohybovat stále stejnım smìrem a zastaví se, a narazí na druhé stranì ledu do nìjaké stìny, èi pøedmìtu. Vìc se tedy nemùe sama zastavit, ani sama zmìnit smìr. Vıbuch led rozehøeje a zmìní na <a href="#voda">vodu</a>.',"led.gif");
  ge("pas","Pás",'Všechny pohyblivé pøedmìty (kromì <a href="#balonek">Balónku</a>), pokud se samy nepohybují, jsou odsunuty ve smìru pohybu pásu. Pokud se pøedmìt (Ty) pohybuje(š) kolmo na pás a ani na chvilku se nezastaví(š), projde(š) kolmo pøes pás a ten pøedmìt (Tebe) nestaèí nijak vychılit. Proti smìru pohybu pásu se pohybovat nelze. Pohyb po smìru nijak nezvyšuje tvoji rychlost. Pás mùe bıt i vypnutı, v tom pøípadì se chová jako obyèejná podlaha.',"pas60.gif");
  ge("exit","Exit","Tato podlaha je cílem hry. Vstoupíš-li na ni, level úspìšnì skonèí.","exit.gif");
  ge("save","Savepoint","Vstoupíš-li na SavePoint, zapamatuje se celı stav levelu. Pokud nìkde pozdìji udìláš chybu, mùeš se k tomuto stavu vrátit a zkusit to tentokrát zahrát správnì. Pokud SavePoint není vypnutı, mùeš na nìj vstupovat kolikrát chceš, pøedchozí stav se zapomene, zapamatován bude ten nejnovìjší. Jen dávej pozor, aby sis neuloil stav, ze kterého u level nejde dohrát!","save.gif");
  geend();
?>
<? shnav();?>

<a name="steny"></a>
<h2>Stìny</h2>
<?
  gebegin();
  ge("stena","Stìna",'Klasická pevná stìna. Nelze ádnım klasickım zpùsobem znièit, pøelézt nebo odstrèit.',"stena0000.gif");
  ge("skavastena",'Skákavá Stìna','Stìna, která mùe vyskoèit nahoru a nechat tì pod sebou projít, ale pozor, a tì nerozmáèkne! Stìna typicky bıvá ovládána <a href="#prepinace">pøepínaèi</a> (posíláním zpráv <code>OdstartujSkoky</code>, <code>OtevriStenu</code> a <code>ZavriStenu</code>), které ji mohou poslat nahoru nebo dolu, dále stìna mùe opakovanì skákat. Nelze ádnım klasickım zpùsobem znièit, pøelézt nebo odstrèit.',"stena0000.gif");
  ge("znicitelnastena","Znièitelná stìna",'Tato stìna ji lze znièit. Znièí jí vıbuch. Dále stìna pùsobí kulatì. Tedy pokud na ni spadne nebo jinak se k ní "dopohybuje" nìjakı jinı kulatı pøedmìt, tak tento pøedmìt se kolem stìny obkutálí (pokud na to má místo).',"stenaroz.gif");
  ge("antimagnet",'Antimagnetická stìna','Tato stìna, jako jediná, ruší úèinky <a href="#magnet">Magnetu</a>. Stìna je neznièitelná.',"antimagnet.gif");
  ge("hlina","Hlína",'Hlína je znièitelná všemi klasickımi zpùsoby a navíc ji mùeš znièit i Ty tím, e na ni prostì vlezeš. (Hlína ti nebraní v pohybu a Ty tvım pohybem v ní dìláš cestièky.) Ve hlínì se nemùou pohybovat <a href="#prisery">pøíšery</a> ani jakékoli <a href="#strk_predmety">pøedmìty</a>. Pokud tedy kámen spadne na hlínu, zastaví se o ni a hlínu nijak neznièí. Pod hlínou mohou byt narafièeny rùzné nebezpeèné podlahy (napø. <a href="#dira">díry</a>).',"hlina.gif");
  ge("dvere","Dveøe",'Pokud jsou dveøe zavøené, pùsobí jako neznièitelná stìna. Otevøené neznamenají ádnou pøekáku, vše vèetnì tøeba <a href="#proud">Proudu</a> mùe projít skrz. Vìtšinou jsou dveøe nastaveny tak, aby se otevíraly, kdy se pøed nì postavíš ty. Mùou ale reagovat i na jiné objekty nebo mùou bıt vypnuty.',"dvereV0000.gif");
  ge("pruleznastena","Prùlezná stìna",'Touto stìnou mùe prolézat jedinì <a href="#hemr">Hemr</a>, pro vše ostatní se chová jako pøekáka. Stìna je znièitelná.',"prulstena.gif");
  ge("zamky","Zámky",'Chovají se jako neznièitelné stìny. Mùeš je odemknout pouze <a href="#klice">klíèem</a> stejné barvy.',"zamekR.gif");
  geend();
?>
<? shnav();?>

<a name="prepinace"></a>
<h2>Pøepínaèe</h2>
<p>
Pøepínaèe dokáí v levelu témìø cokoli zmìnit. Dokáí zapínat a vypínat <a href="#pas">pásy</a>, dokáí tvoøit pøedmìty, dokáí naprosto zmìnit umístìní stìn, zmìnit podlahy na jiné, vytvoøit prùchod ve stìnì... A kadı pøepínaè mùe tìchto zmìn udìlat nìkolik. Pøepínaèe jsou neznièitelné.
</p>
<?
  gebegin();
  ge("naslapnapodlaha","Nášlapná podlaha","Nášlapná podlaha reaguje, pokud je zatíena nìjakım tìkım pøedmìtem. Mùe bıt nastavena tak, e pøi zatíeni nìco zapne a pøi uvolnìní to zase vrátí do pùvodního stavu. Druhá monost je, e pøi zatíení (nebo uvolnìní) nìco udìlá a u to tak nechá.","naslapnapodlaha0.gif");
  ge("prepinac","Pøepínaè","Mùeš ho zapnout jedinì Ty tím, e se snaíš jít na jeho políèko. Pøepínaè mùeš buï pøehazovat z polohy zapnuto do polohy vypnuto (a obrácenì) a on vdy nìco udìlá a pak to vrátí do pùvodního stavu. Nebo je nastaven tak, e lze pøepnout jen jednou.","prepinac0.gif");
  ge("fotobunka","Fotobuòka",'Fotobuòka reaguje, pokud se na políèko vedle ní (i v šikmıch smìrech) dostane nìjaká ivá bytost (<a href="#manici">ty</a> nebo <a href="#prisery">pøíšera</a>), také reaguje na vıbuch. Deaktivace nastává, kdy tato bytost nebo vıbuch "odejde". Opìt stejnì jako nášlapná podlaha mùe pøepínat stavy nebo jenom urèitı stav uskuteèòovat.',"fotobunka1.gif");
  ge("globprepinac","Globální pøepínaè","Tento pøepínaè není v levlu reprezentován ádnou grafikou, není umísován do mapy, ale mezi globální objekty. Funguje podobnì jako fotobuòka s tím, e oblast, kde reaguje na objekty, a typy tìch objektù se zadávají a bìhem editace.");
  geend();
?>

<h3>Editace pøepínaèù</h3>
<p>
Kadı pøepínaè mùe pracovat ve dvou reimech:
</p>
<ul>
<li><b>pøepíná</b> - pøi aktivaci pøepínaè provede nìjakou akci (akce), pøi další aktivaci to vrátí do pùvodního stavu</li>
<li><b>nepøepíná</b> - pøi kadé aktivaci pøepínaè provede danou akci (akce)</li>
</ul>
<p>
Pokud pøepínaè umísuje nìjaké objekty do mapy, divá se, zda cílové místo u není obsazeno nìèím jinım (zda umísovanı objekt koliduje). Pokud je zaškrtnut tag <code>Nekoliduj</code>, pøepínaè, v pøípadì kolize, objekt neumístí. Pokud <code>Nekoliduj</code> není nastaven, bude objekt umístìn vdy, pøípadnı kolidující objekt bude odstranìn z mapy.
</p>
<p>
U pøepínaèù, které obsahují trigger (Nášlapná podlaha, Fotobuòka, Globální pøepínaè a pod.) je mono nastavit promìnnou <code>Reaguje</code>. Tím lze urèit, kdy dochází k aktivaci pøepínaèe.
</p>
<ul>
<li><code>ReagujeVzdy</code> - reaguje pøi zapnutí i pøi vypnutí</li>
<li><code>PriZapnuti</code> - reaguje pouze pøi zapnutí (zapnuto = kolem fotobuòky jsou objekty na které reaguje)</li>
<li><code>PriVypnuti</code> - reaguje pouze pøi vypnutí (vypnuto = kolem fotobuòky nejsou ádné objekty na které reaguje)</li>
</ul>
<p>
Kadı pøepínaè mùe dìlat 0 a n <b>akcí</b>. U kadé akce mùeme nezávisle urèit, co pøepínaè bude dìlat.
</p>
<p>
<b>Vytvoøení Akce:</b>
</p>
<ul>
<li>V poloce <code>DruhAkce</code> je tøeba vybrat typ èinnosti (umísování, odebírání, vımìna...)</li>
<li>V poloce <code>Pusobnost</code> je tøeba vybrat, èeho se èinnost bude tıkat. Jsou zde dvì monosti. Pøepínaè mùe pracovat s ji existujícími (vytvoøenımi) objekty. Je napøíklad moné vytvoøit objekt mimo mapu, naeditovat jeho vlastnosti a pak ho nìkdy v prùbìhu hry do mapy umístit (bude umístìn na ty souøadnice, které jsou zadány u nìj). Druhá monost je práce s oblastí. V tom pøípadì pøepínaè umísuje do oblasti objekty zadaného typu, èi naopak hledá v oblasti objekty zadaného typu a pak je tøeba odebírá...</li>
<li>Kliknìte na button <code>Pridej Akci</code></li>
<li>A nakonec je tøeba pøíslušnou akci naeditovat. Zadat poadované objekty nebo oblast, zadat typy objektù a podobnì.</li>
</ul>
<p>
<b>Druhy Akcí:</b>
</p>
<ul>
<li><code>PrepUmisti</code> - Pøepínaè vyplní oblast danım typem objektu. Nebo umístí dané objekty.</li>
<li><code>PrepOdeber</code> - Pøepínaè odebere všechny objekty daného typu z oblasti. Nebo odebere dané objekty.</li>
<li><code>PrepOdeberUmisti</code> - Kombinace pøedchozích dvou akcí.</li>
<li><code>PrepVymen</code> - Pøepínaè najde v oblasti objekty prvního typu a místo nich umístí objekty typu druhého. Nebo pøepínaè odebere objekty z prvního seznamu a na jejich místo umístí objekty ze seznamu druhého.</li>
<li><code>PrepMessage</code> - Objektùm daného typu na dané oblasti bude zasílána zpráva. Nebo danım existujícím objektùm bude zasílána zpráva. Pokud pøepínaè pøepíná je tøeba zadat zprávy dvì. Jednu, která se bude posílat pøi zapnutí, a druhou, která se bude posílat pøi vypnutí. Typické pouití je pro posílání zpráv typu "zapni se" a "vypni se".</li>
</ul>
<? shnav();?>

<a name="veci"></a>
<h2>Sebratelné pøedmìty (Vìci)</h2>
<p>
Tyto pøedmìty jsou znièitelné, mohou se hıbat, pokud na nì pùsobí nìjaká síla, napøíklad <a href="#magnet">magnet</a> nebo <a href="#pas">pás</a>. Také ochotnì padají do <a href="#dira">dìr</a>, aktivují <a href="#naslapnapodlaha">nášlapné</a> a <a href="#propadlo">propadající</a> podlahy. Všechny tyto pøedmìty také pùsobí kulatì. Tedy pøi pohybu se obkutálejí, sypou se do hromádek a podobnì. Ty, pokud máš ještì místo v inventáøi a pokud vejdeš na políèko s pøedmìtem, tak ten pøedmìt sebereš. Pokud máš plno, pøecházíš nad pøedmìtem, nemùeš ho strkat. <a href="#prisery">Pøíšery</a> také chodí nad pøedmìtem.
</p>
<?
  gebegin();
  ge("klice","Klíèe",'Klíèe jsou pøedmìty, které slouí k odemykání <a href="#zamky">zámkù</a>. Zámek odemkne klíè stejné barvy. Kadı klíè je na jedno pouití. Tedy po odemknutí zámku zmizí nevratnì zámek i klíè.',"klic_cerveny.gif");
  ge("bomba","Bomba",'Pokud bombu pouiješ, umístíš pod sebe aktivovanou bombu. Ta za pár sekund vybuchne. Vıbuch je vdy velikı 3*3 políèka okolo bomby a znièí vše znièitelné na tomto území. Vıbuch se nedá nijak odstínit, napø. neznièitelnou stìnou. Pokud tedy poloíš bombu, je tøeba rychle utéct z oblasti vıbuchu. Pokud je bomba znièena, vybuchuje. To umoòuje vznik takzvanıch øetìzovıch vıbuchù, kdy jsou bomby umístìné v øadì a na nìkterém místì dojde ke vznícení.',"bomba.gif");
  ge("mina","Mina",'V levlu mùou bıt rozmístìny aktivované i neaktivované miny. Ty neaktivované mùeš sbírat. Pokud poloíš minu, ta pár sekund èeká, ne se aktivuje (abys mohl utéct). Poté, pokud se nìco ivého (<a href="#manici">Ty</a> nebo <a href="#prisery">pøíšera</a>) nebo vıbuch ocitne na políèku vedle aktivované miny, mina ještì chvilku poèká a pak vybuchne. Lze stihnout aktivovanou minu vyrušit a rychle utéct pøed vıbuchem. Rozhodnì ale nelze stihnout nad aktivovanou minou probìhnout. Pøi znièení mina vybuchuje. Øetìzovı vıbuch u min vzniká, u kdy jsou miny umístìny ob jedno políèko.',"mina.gif");
  ge2("znacky","Dopravní znaèky",'Podle dopravních znaèek se øídí <a href="#pot_dopravni">dopravní</a> a <a href="#pot_klaustr">klaustrofobní</a> pøíšery. Tyto pøíšery rozhodnì neporušují dopravní pøedpisy. Potøebuješ-li mít urèitou pøíšeru na urèitém místì, není nic jednoduššího, ne si patøiènì pohrát s dopravním znaèením. Znaèky nesbíráš automaticky, ale jen kdy dríš klávesu pro sbírání znaèek. (defaultnì je to \'A\'). Znaèky nejsou pøitahovány <a href="#magnet">magnetem</a>.
    <ul>
    <li>Pokud pøíšera vkroèí na smìrovou znaèku, zmìní podle ní svùj smìr.</li>
    <li>U zákazu vjezdu se pøíšera otoèí o 180°.</li>
    <li>Šedesátka sníí rychlost pøíšery na normální.</li>
    <li>Konec šedesátky zpùsobí, e se pøíšera bude pohybovat fakt rychle.</li>
    <li>Pøi nárazu do neprùchodné pøekáky se pøíšera otoèí o 180°.</li>
    </ul>',
    84,"zakazvjezdu.gif","prikazanysmer6.gif","60.gif","konec60.gif");
  geend();
?>
<? shnav();?>

<a name="strk_predmety"></a>
<h2>Strkatelné pøedmìty</h2>
<p>
Jsou to pohyblivé a šoupatelné pøedmìty (nejdou tedy sbírat), rùznıch vlastností. Pøedmìty a na <a href="#krabice">Krabici</a> pùsobí kulatì.
</p>
<?
  gebegin();
  ge("kamen","Kámen",'Pohyblivı a šoupatelnı pøedmìt, je tìkı (padá do <a href="#dira">dìr</a>, aktivuje <a href="#podlahy">podlahy</a>, zabije tì, kdy na tebe spadne). Pùsobí na nìj <a href="#pas">pás</a>, <a href="#magnet">magnet</a> a <a href="#led">led</a>, pùsobí kulatì. Je znièitelnı.',"kamen0000.gif");
  ge("krabice","Krabice",'Krabice se vznáší nad zemí na vzduchovém polštáøi, <a href="#hemr">Hemr</a> ji mùe podlézt. Krabice je neznièitelná, pohyblivá a strkatelná (pùsobí na ní <a href="#pas">pás</a>, <a href="#magnet">magnet</a> i <a href="#led">led</a>), padá do dìr a aktivuje podlahy.',"krabice0000.gif");
  ge("balonek","Balónek",'Balónek je lehkı a je nadnášen horkım plynem, take není v kontaktu s <a href="#podlahy">podlahami</a>, ani tì nezabije, kdy na tebe spadne, naopak sám je znièitelnı. Pùsobí kulatì.',"balonek.gif");
  ge("pneumatika","Pneumatika",'Pneumatika není pøitahována <a href="#magnet">magnetem</a>, jinak se chová stejnì jako <a href="#kamen">kámen</a>.',"pneumatika.gif");
  ge("nitrak","Nitroglycerin",'Je to strkatelnı pøedmìt, kterı vybuchuje po nárazu, pøi pádu z vıšky nebo v jiném vıbuchu. Pøi strkání pozor, a s ním nikde nenarazíš do stìny!',"nitroglycerin.gif");
  ge("ledovka","Ledová koule",'Tato koule je tvoøena celá z ledu, a proto, jakmile u se jednou dá do pohybu, tak se pohybuje stále stejnım smìrem a zastaví se a o nìjakou pevnou pøekáku. Ledová koule je znièitelná, pùsobí kulatì a není pøitahována <a href="#magnet">magnetem</a>.',"ledovakoule.gif");
  geend();
?>
<? shnav();?>

<a name="predmety"></a>
<h2>Další pøedmìty</h2>
<?
  gebegin();
  ge("magnet","Magnet",'Magnet generuje magnetické pole tím smìrem, jakım je nasmìrován. Pole jednoho magnetu je vdy omezeno na øadu èi sloupec velikosti 1*n políèek. Pole zaèíná magnetem a konèí okrajem levelu nebo <a href="#antimagnet">antimagnetickou stìnou</a>. Nic jiného pole magnetu pøerušit nemùe. Všechny <a href="#strk_predmety">pohyblivé vìci</a>, které jsou pøitahovány magnetem, se zaènou pohybovat smìrem k magnetu, pokud jim v tom nebrání nìjaká pøekáka. Magnet zpùsobuje tzv. padaní pøedmìtù. Padající pøedmìty zabijí <a href="#hemr">Hemra</a>, <a href="#dracek">Dráèka</a> a všechny <a href="#prisery">pøíšery</a>. Magnet je neznièitelnı.',"magnet6.gif");
  ge("proud","Elektrody s vysokım napìtím",'Jedna elektroda generuje v urèitıch intervalech vıboj elektrického proudu. Tento vıboj je dlouhı paprsek, kterı konèí a na první pøekáce, pokud je tato pøekáka znièitelná, bude znièena. Proudem se dá probìhnout v intervalech mezi vıboji. Pokud je naproti Elektrodì jiná Elektroda, která vysílá vıboje ve stejnıch èasech, proud mezi nimi se ustalí a u se nepøerušuje. Pokud mezi Elektrody narafièíš nìjakou vìc, Elektrody mezi sebou ztratí kontakt a dojde k chvilkovému pøerušení proudu, v tom okamiku mùeš místem, kde byl proud, probìhnout. Elektrody jsou neznièitelné.');
  ge("teleport","Teleport",'Pokud vstoupíš do teleportu, jsi teleportován na jiné místo levelu, vìtšinou to bıvá také teleport - ale není to nutné. Platí pravidlo, e kdy vlezeš do teleportu urèitım smìrem, z druhého teleportu pak vylezeš stejnım smìrem. (Pøíklad : vstoupíš-li do teleportu z levé strany, pak se objevíš napravo od místa, kam teleport teleportuje.) Pokud je toto místo zablokováno nìjakou pøekákou, vyzkouší se nejprve smìry kolmé na tvùj pùvodní smìr, a nakonec se testuje smìr otoèenı o 180°. Pokud je i on zablokován, teleportace se neuskuteèní. Teleport je znièitelnı.',"teleport1.gif");
  ge2("hajzly","Promìòovaèe (Hajzly)",'Promìòovaè funguje stejnì jako <a href="#teleport">teleport</a>, ale navíc zmìní tvoji <a href="#manici">podobu</a>. Èasto je místo teleportace nastaveno na stejné místo, kde je promìòovaè.',116,"hajzly-pasovec.gif","hajzly-hemr.gif","hajzly-dracek.gif");
  geend();
?>
<? shnav();?>

<a name="prisery"></a>
<h2>Pøíšery</h2>
<p>
Pro pohyb pøíšer platí stejná pravidla jako tøeba pro <a href="#pasovec">Pásovce</a>. Kromì toho, e nìkam chtít chtìjí, na nì pùsobí i <a href="#pas">pásy</a> a <a href="#led">led</a>. Pokud pøekáíš pøíšeøe v cestì, zabije tì (to neplatí pro <a href="#pot_klaustr">Pøíšeru klaustrofóbní</a>).
</p>
<?
  gebegin();
  ge("pot_otaciva","Pøíšera otáèivá",'Pøíšera otáèivá chodí kolem stìn podle pravidla levé nebo pravé ruky (záleí na tom, jak je nastavena). Vìtšinou tedy obchází vnìjší stìny nìjaké oblasti ve snaze dostat se ven z té oblasti, nebo obchází kolem nìjakého pøedmìtu, èi stìny, ve snaze dostat se dovnitø. Vrcholem jejího snaení mùe bıt pak to, e se zaène toèit na místì. Pøíšera otáèivá je natolik inteligentní, e neleze do viditelného nebezpeèí, napø. do <a href="#dira">díry</a>, <a href="#proud">proudu</a>, ale klidnì se nechá zlikvidovat od <a href="#mina">miny</a>.',"potvoraotaciva6.gif");
  ge("pot_dopravni","Pøíšera dopravní",'Pøíšera dopravní øídí svùj pohyb podle dopravních <a href="#znacky">znaèek</a>. Mùe se pohybovat normální nebo rychlou rychlostí, rychlost se dá také mìnit znaèkami. Pokud pøíšera narazí na neprùchodnou pøekáku, otoèí se o 180°. Tato pøíšera u není inteligentní, a proto ochotnì padá do <a href="#dira">dìr</a>.',"potvoraznackova6.gif");
  ge("pot_klaustr","Pøíšera klaustrofobní",'Pohybuje se podle úplnì stejnıch pravidel, jako <a href="#pot_dopravni">pøíšera dopravní</a>. Na rozdíl od všech ostatních pøíšer tì nezabíjí. Její nebezpeènost spoèívá v tom, e jakmile se dostane na nìjaké místo, ze kterého nemùe odejít, strachem vybouchne. Staèí, kdy nemùe jít ani dopøedu, ani dozadu, do stran toti sama od sebe nepùjde, nedostane-li k tomu pokyn dopravní <a href="#znacky">znaèkou</a>.',"potvoraklaustrofobni6.gif");
  ge("pot_samonav","Pøíšera samonavádìcí",'Snaí se jít tím smìrem, kde jsi ty. Není sice natolik inteligentní, aby dokázala procházet sloitá bludištì, ale pøesto je velmi nebezpeèná. Stejnì jako <a href="#pot_otaciva">pøíšera otáèivá</a> se vyhıbá viditelnému nebezpeèí.',"potvorasamonavadeci6.gif");
  geend();
?>
<? shnav();?>

</div>

<p>
Podrobnìjší prozkoumání pøedmìtù pøenechám na kadém hráèi... 
</p>
<p>
<b>Tak dost øeèí a hurá do hry. Hodnì štìstí!</b>
</p>
<div class="vecinav"> <a href="#">nahoru</a> </div>
