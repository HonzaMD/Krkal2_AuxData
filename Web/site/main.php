<?include('ti.php');?>
<h1>Co je KRKAL?</h1>
<p>
KRKAL je rozsáhlı systém pro vıvoj her, které se odehrávají na 
obdélníkovém plánu. V systému KRKAL lze vytváøet úplnì nové hry, 
vylepšovat hry ji hotové, vytváøet nové herní úrovnì (levely) 
a samozøejmì také všechny tyto hry hrát.
Souèástí je i znovu vytvoøená hra Krkal, vıkonnı grafickı engine,
editor levlù a skriptù, kompilátor.
Krkal byl vytvoøen jako projekt na Matematicko Fyzikální Fakultì
Univerzity Karlovy.
</p>
<img src="/img/manik.png" width="200" height="200" alt="Dráèek" style="float:right"/>
<h2>Hra Krkal</h2>
<p>
Hra Krkal je logicko-akèní hra, kde si vyzkoušíte ovládání jedné 
ze tøí postavièek, pomùete jí vyøešit všechny nástrahy, pøekonat
rafinované pøekáky a nakonec se ve zdraví dostat do vytoueného
cíle kadého levelu - do exitu. 
</p>
<p>
Levely jsou postaveny z mnoha rozmanitıch prvkù èi pøedmìtù, které 
ovlivòují jak sami sebe navzájem, tak i vás. Budete posouvat kameny, 
klouzat po ledu, vyhıbat se minám, správnì nastavovat rùzná tlaèítka, 
bloudit v bludištích a tøeba pøestavovat znaèky pro dopravní pøíšery...
</p>
<p>
Hra Krkal je prostì velmi zajímavá a originální. Vše vidíte 
pøehlednì z vıšky a díky Systému Krkal nechybí kvalitní grafika
i hudba. V Systému je moné nejen editovat nové levly, ale pøímo
vytváøet zcela nové herní objekty, vylepšovat a modifikovat samotnou
hru!
<br/>
<a href="krkal.html">Více o høe KRKAL...</a>
</p>
<h2>Speciální skriptovací jazyk</h2>
<p>
Pro tvorbu her v našem systému jsme vyvinuli speciální programovací jazyk. Zamìøili jsme se hlavnì na to, aby bylo snadné rozšiøovat a modifikovat ji existující hry a to i nìkolika nezávislımi uivateli souèasnì. V podstatì kadı si svou oblíbenou hru mùe vylepšit, podle svıch pøání. Jazyk je objektovì orientovanı, vychází z klasického C a obsahuje prostøedky pro simulaci souèasného ivota mnoha objektù...
</p>
<p>
Souèástí systému je editor skriptù spojenı s kompilátorem. Kompilátor umí skripty pøekládat jak do jakéhosi našeho „assembleru“, kterı je pak za bìhu interpretován, tak do C++, které mùeme pøipojit k celému projektu KRKAL, tyto skripty nejsou interpretovány, jsou tudí velice rychlé.
</p>
<h2>Moderní grafickı engine</h2>
<p>
Snaili jsme se o to, aby naše hry byly velice pìkné a nezaostávaly za souèasnou konkurencí. Aè je náš engine dvourozmìrnı, dokáe zobrazovat trojrozmìrnı svìt v izometrické projekci, vèetnì realisticky poèítaného osvìtlení. Engine zvládá lokální bodová svìtla, které mohou bıt umísována pøímo do levlu, na konkrétní prostorové souøadnice, dále globální svìtlo shora, které má korektnì poèítané, realistické stíny. Vıpoèet osvìtlení probíhá ve 3D! K vykreslování pouíváme hardwarovou akceleraci a díky dvourozmìrné povaze enginu je grafika velmi jemná, hladká a detailní a vypadá dobøe i v nízkıch rozlišeních.
</p>
<p>
Grafika není k objektu pøipojována pøímo, ale pøes takzvané automatismy, co je soubor rozhodovacích pravidel, která urèují, jaká grafika se pro konkrétní situaci pouije. Skripty se tedy o grafiku nemusejí témìø starat. Automatismy øeší napøíklad správné navazování obrázkù na sebe, náhodné alterace a vzory, animace, ...
</p>
<h2>Editor levelù</h2>
<p>
Je to univerzální nástroj, kterı slouí k editaci levelù dopøedu neznámıch her. V editoru je moné umísovat objekty do mapy a nastavovat jejich atributy. Zpùsob editace je øízen skripty. I pøesto, e nevíme, jak konkrétní hra mùe vypadat, snaili jsme se, aby práce s editorem byla maximálnì efektivní a jednoduchá. V editoru je moné souèasnì hru hrát i editovat.
</p>
<p>
<a href="http://forum.krkal.org/cs/viewtopic.php?t=16">Jak pouívat editor levlù</a>
</p>
<h2>Vlastní grafické uivatelské rozhraní</h2>
<p>
Pro systém Krkal jsme vyvinuli vlastní GUI, abychom mìli lepší kontrolu nad ovládacími prvky a mohli libovolnì upravovat jejich styl èi vzhled.
</p>
