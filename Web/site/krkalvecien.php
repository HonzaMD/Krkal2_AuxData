<?include('ti.php');?>
<h1>Game KRKAL: description of game objects</h1>

<p>
This is a description of all objects in the game KRKAL. You can find this text in the user documentation (Description of game KRKAL).
</p>

<?
function shnav()
{
echo'<div class="vecinav">
<a href="#manici">Your forms</a> | <a href="#podlahy">Floors</a> | 
<a href="#steny">Walls</a> | <a href="#prepinace">Switches</a> | 
<a href="#veci">Pickupable items</a> | <a href="#strk_predmety">Pushable items</a> | 
<a href="#predmety">Other items</a> | <a href="#prisery">Monsters</a> 
</div>
';
}
?>

<div class="krkalveci">
<? shnav();?>

<a name="manici"></a>
<h2>Your forms</h2>
<p>
Your form can change during a game. It can happen when you start a new level or when you touch a special device - the <a href="#hajzly">converter</a> - that can be found in some levels. There are three forms, each having its unique features. Having the right form in the right time is often the key to victory.
</p>
<?
  gebegin();
  ge("pasovec","Armadillo",'The Armadillo is a very tough, armored creature. He resists if a <a href="#strk_predmety">stone</a> falls on him, even from a great height.',"pasovec6.gif");
  ge("hemr","Slime Guy",'Slime Guy\'s body consists mostly of slime. He is very sticky and therefore can move over the <a href="#led">ice</a> without sliding. Having a very low profile, he is also capable of moving through the <a href="#pruleznastena">crawlable wall</a> and can move under the floating <a href="#krabice">box</a> as well.',"hemr6.gif");
  ge("dracek","Dragon",'The Dragon is the only one who can swim in the <a href="#voda">water</a>.',"dracek6.gif");
  geend();
?>
<? shnav();?>

<a name="podlahy"></a>
<h2>Floors</h2>
<?
  gebegin();
  ge("podlaha","Floor","Ordinary floor has no special behavior.","podlaha-kameny.gif");
  ge("dira","Pit, Lava",'All <a href="#strk_predmety"> pushable</a> and <a href="#veci"> pickupable</a> objects (excepting the <a href="#balonek">balloon</a>), all <a href="#manici"> your forms</a> and all <a href="#prisery">monsters</a> will fall in the pit/lava whenever they step on it (or get on it). Everything is lost in the pit/lava forever; no recovery is possible. Pits are bottomless, so the number of object that can be pushed in the pit/lava is not limited. The balloon does not fall in the pit/lava as it floats over. Pit/lava does not affect several mounted objects (for example <a href="#magnet"> magnets</a>) and <a href="#steny">walls</a>.',"dira.gif");
  ge("propadlo","Trap",'The trap behaves like a covered <a   href="#dira"> pit/lava</a> . As an object gets on the trap, it is safe there for a short period of time (in which it is possible to cross the trap, turn back on the cell on the other side and return back over the trap). After that, the trap collapses and becomes <a href="#dira">pit/lava</a>. Explosion causes a trap to collapse immediately.',"propadlo.gif");
  ge("hrboly","Bump floor",'On that type of floor, the bumps preserve pushing or moving <a href="#predmety">objects</a>, but you and the <a href="#prisery">monsters</a> can still move over it, just like over the ordinary <a href="#podlaha">floor</a>.',"hrbpod.gif");
  ge("sliz","Toxic slime",'When you appear in the toxic slime, you start to become intoxicated. The bar in the bottom of the game menu indicates the level of intoxication. As the intoxication level reaches the maximum, you die and mutate into a <a href="#prisery">monster</a>. The <a href="#pasovec">Armadillo</a> becomes either a <a href="#pot_otaciva">rotating monster</a> or a <a href="#pot_samonav">homing monster</a>. The <a href="#hemr">Slime Guy</a> becomes a <a href="#pot_klaustr">claustrophobic monster</a> and the <a href="#dracek">Dragon</a> becomes a <a href="#pot_dopravni">traffic monster</a>. If you disappear from the slime, your intoxication will disappear too, in a short time. You are able to walk across 3 cells of a toxic slime. No <a href="#prisery">monsters</a> or <a href="#veci">objects</a> are affected by a toxic slime.',"sliz.gif");
  ge("voda","Water",'Only the <a href="#dracek">Dragon</a> can swim. Your other <a href="#manici">forms</a>, <a href="#prisery">monsters</a> and <a href="#veci">objects</a> sink in the water and they are destroyed just like in the <a href="#dira">pit/lava</a>.',"voda.gif");
  ge("led","Ice",'Only the <a href="#hemr">Slime Guy</a> does not slide on the ice. Everything else that gets on the ice - no matter if it steps there or is pushed there - starts sliding. Sliding means that the object will keep moving straight until it either leaves the ice field or hits some <a href="#steny">wall</a> or another obstacle. While sliding, it is not possible to stop or to change a direction of the movement. Explosion melts the ice, which then turns to the <a href="#voda">water</a>.',"led.gif");
  ge("pas","Conveyor",'If not moving on their own, all moveable items (excepting the <a href="#balonek">balloon</a>) are transported by the conveyor. You cannot move against the conveyor direction and you do not increase your speed when moving in the same direction, but you can slip out from the conveyor or even cross it quickly without being transported. The conveyor may be off power, in which case it behaves just like an ordinary <a href="#podlaha">floor</a>.',"pas60.gif");
  ge("exit","Exit","This floor is your goal. You will successfully complete the level as you step on it. ","exit.gif");
  ge("save","Savepoint","If you step on the savepoint (which must be on power), entire game state will be stored. Later, if you do something wrong, you may restore this state and try playing again from that savepoint. You can use the savepoint as many times as you like, always only the last state will be stored. However, be careful not to save an unusable state (such state that it is impossible to reach the victory from).","save.gif");
  geend();
?>
<? shnav();?>

<a name="steny"></a>
<h2>Walls</h2>
<?
  gebegin();
  ge("stena","Wall",'Ordinary solid wall. It cannot be destroyed, climbed over or pushed.',"stena0000.gif");
  ge("skavastena",'Jumping wall','This wall can jump up and let you to pass under it, or it can jump up and down - which makes passing by more dangerous. Usually the wall is controlled by some <a href="#prepinace">switch</a> - this can send messages <code>OdstartujSkoky</code> (jumping), <code>OtevriStenu</code> (jump up) and <code>ZavriStenu</code> (jump down). Like an ordinary wall, the jumping wall cannot be destroyed, climbed over or pushed.',"stena0000.gif");
  ge("znicitelnastena","Destroyable wall",'This wall can be destroyed. It cannot be climbed over or pushed. Destroyable wall has a round nature, which means that any object of a round nature that hits this wall will roll around it (if there is enough space).',"stenaroz.gif");
  ge("antimagnet",'Antimagnetic wall','This wall cancels the effect of the <a href="#magnet">magnet</a>, so the magnetic force does not affect the space behind the wall. It cannot be destroyed, climbed over or pushed.',"antimagnet.gif");
  ge("hlina","Soil",'The soil can be easily destroyed. You can even destroy it simply by getting on it. The soil does not prevent you from moving; you can dig through it, leaving empty space behind you. Neither <a href="#prisery">monsters</a> nor any <a href="#veci">objects</a> are able to move in the soil. For example - if the <a href="#kamen">stone</a> falls on the soil, it stops and will not destroy the soil. There may be dangerous floors (like <a href="#dira">pits</a>) hidden under the soil.',"hlina.gif");
  ge("dvere","Door",'When closed, the door acts like an ordinary <a href="#stena">wall</a>. Opened door does not represent an obstacle and anything (including the <a href="#proud">high voltage discharge</a>, for instance) may pass through it. Usually the door is set to open whenever you come in front of it. Alternatively, another object can trigger it or it can be off power.',"dvereV0000.gif");
  ge("pruleznastena","Crawlable wall",'Only the <a href="#hemr">Slime Guy</a> may crawl through this wall and it behaves as the ordinary <a href="#stena">wall</a> for everything else. This wall can be destroyed in the explosion.',"prulstena.gif");
  ge("zamky","Locks",'The locks behave like the ordinary <a href="#stena">wall</a> . You can unlock them if you have at least one <a href="#klice">key</a> of the same color as the lock. Once unlocked, the lock disappears forever.',"zamekR.gif");
  geend();
?>
<? shnav();?>

<a name="prepinace"></a>
<h2>Switches</h2>
<p>
Switches provide a powerful tool to perform modifications in the level. For example - they can power the <a href="#pas">conveyors</a> on and off, create various <a href="#veci">objects</a>, change the location of <a href="#steny">walls</a>, change the type of <a href="#podlahy">floors</a>, create a pass it the wall... Every single switch can perform multiple operations like these. The switches cannot be destroyed. They can be programmed just to do some actions (every time the same) either when switched on or off. Alternatively, they can be set to do actions and to undo them after switched next time. 
</p>
<?
  gebegin();
  ge("naslapnapodlaha","Floor trigger",'The floor trigger is switched on when some heavy object (like a <a href="#kamen">stone</a>) is placed on it. Otherwise, the floor trigger is switched off.',"naslapnapodlaha0.gif");
  ge("prepinac","Switch",'Only you can set the switch on and off by touching it. The switch usually changes something in the level. After switched back to its original state, the switch either undoes the changes or does nothing ("nonswitching switch" is only for a single use).',"prepinac0.gif");
  ge("fotobunka","Photocell",'Photocell is switched on when some living creature (you or some <a href="#prisery">monster</a>) gets in the adjacent area (one cell all around). It also reacts on the explosion. When there is no such creature (or explosion) nearby, the photocell is switched off.',"fotobunka1.gif");
  ge("globprepinac","Global switch","This switch does not have its own graphics, as it is not placed in the map, but in the global objects list instead. It behaves like a photocell, but the trigger area and the types of recognized objects are set in the level editor.");
  geend();
?>

<h3>Editing switches</h3>
<p>
Every switch can work in two modes:
</p>
<ul>
<li><b>switching</b> - the switch does some action(s) when switched and it restores the original state when switched next time</li>
<li><b>no switching</b> - the switch does some actions when switched either on or off</li>
</ul>
<p>
If the switch places some objects in the map, it is checked whether the target place is free or blocked by some obstacle (the placed object collides). When collision occurs, the object will be placed unless the tag <code>Nekoliduj</code> (do not collide) is checked. Having this tag unchecked causes replacement of the blocking object (it will be removed from the map).
</p>
<p>
Switches that contain a trigger (floor trigger, photocell, global switch...) include the attribute Reaguje (reacts). You can control switch's behavior by changing its value:
</p>
<ul>
<li><code>ReagujeVzdy</code> (reacts always)</li>
<li><code>PriZapnuti</code>(reacts only when switched on) - there is one or more objects of interest in the trigger area</li>
<li><code>PriVypnuti</code>(reacts only when switched off) - there is no object of interest in the trigger area</li>
</ul>
<p>
Every switch can perform any number of <b>actions</b>. You can individually set each action up.
</p>
<p>
<b>Creating an action:</b>
</p>
<ul>
<li>Set the attribute <code>DruhAkce</code> (type of action) to select what shall the action do (placing, removing, swapping...)</li>
<li>Set the attribute <code>Pusobnost</code> (target of action) to select what shall the action affect. You can choose either to manage existing objects (these can exist outside the map having all their properties set and waiting to be placed on the pre-selected place during a game) or to work with an area within the map. In this case, the switch places the objects into this area or it searches it through and removes the objects it finds.</li>
<li>Press the button <code>Pridej Akci</code> (add action)</li>
<li>Finally, you have to edit the new action. You should select relevant objects or areas; select the types of objects etc.</li>
</ul>
<p>
<b>Types of actions:</b>
</p>
<ul>
<li><code>PrepUmisti</code> - The switch fills the area using the given type of object or it places selected objects only.</li>
<li><code>PrepOdeber</code> - The switch removes all objects of given type from the area or it removes selected objects only.</li>
<li><code>PrepOdeberUmisti</code> - Combines both previous actions.</li>
<li><code>PrepVymen</code> - The switch finds all objects of the first given type in the area and replaces them with objects of second type. Alternatively, it removes all objects from the first list and places the ones from the second list in their place.</li>
<li><code>PrepMessage</code> - The switch sends a message to all objects of the given type in the area. Alternatively, it can send a message to given existing objects. Two messages are needed if the switch works in a switching mode - one message is sent after switched on, another one after switched off. Usually these messages are something like "turn on" and "turn off".</li>
</ul>
<? shnav();?>

<a name="veci"></a>
<h2>Pickupable items (Things)</h2>
<p>
All these objects are destroyable, they can move if some force (like a <a href="#magnet">magnet</a> or the <a href="#pas">conveyor</a>) affects them. They fall in <a href="#dira">pits</a>, activate a <a href="#naslapnapodlaha">floor trigger</a> and <a href="#propadlo">traps</a>. In addition, they all have a round nature, so they roll around whenever they hit during a movement, they form the heaps etc. You can pickup these items assuming you have enough space in your inventory. In case you do not have a free space for the item, you just walk over it without picking it up; you cannot push it. The <a href="#prisery">monsters</a> always walk over these items. 
</p>
<?
  gebegin();
  ge("klice","Keys",'The key can be used to open the <a href="#zamky">lock</a> of the same color. Both the key and the lock are designed for a single use, which means that both the key and the lock will disappear after the lock is unlocked.',"klic_cerveny.gif");
  ge("bomba","Bomb",'Once dropped, the bomb is activated and placed right under you. In few seconds, the bomb explodes. The explosion always affects squared area of 3 times 3 cells with the bomb in its center. Explosion destroys every destroyable item in the affected area. Therefore, you should run out from the explosion-affected area as soon as possible. If destroyed, the bomb explodes immediately. This allows an initiation of a chained explosion of the bombs placed in line, one next to other.',"bomba.gif");
  ge("mina","Mine",'The mine can be either activated or inactive. The activated mine has the top yellow light lit. You can pick up inactive mines. Once dropped, the mine waits few seconds to let you run away. After that, if any living creature (<a href="#manici">you</a> or some <a href="#prisery">monster</a>) or explosion reaches the cell next to the activated mine, the mine explodes after a short delay. It is possible to come next to the activated mine and run back quickly to escape the explosion. However, you cannot run over the activated mine without being killed by the explosion. If destroyed, the mine explodes immediately. The chained explosion occurs even if the activated mines are placed with one free cell between two of them.',"mina.gif");
  ge2("znacky","Traffic sign",'The <a href="#pot_dopravni">traffic monsters</a> and the <a href="#pot_klaustr">claustrophobic monsters</a> follow these signs. You can be sure that they do not even think about breaking the traffic rules. If you need some monster to be on certain place, you can simply alter the traffic signs location in the level. You do not pick up the traffic signs unless you hold the key for the traffic signs pickup (which is \'A\' by default). The signs are not attracted to the <a href="#magnet">magnet</a>.
    <ul>
    <li>The monster turns back (by 180°) after getting to no fare sign.</li>
    <li>The monster follows the direction of the direction sign.</li>
    <li>The speed limit of 60 km/h (37 mph) makes the monster to travel at its usual speed.</li>
    <li>The end of the speed limit makes the monster to travel really fast.</li>
    <li>After crashing in the obstacle (for example the wall), the monster turns back (by 180°).</li>
    </ul>',
    84,"zakazvjezdu.gif","prikazanysmer6.gif","60.gif","konec60.gif");
  geend();
?>
<? shnav();?>

<a name="strk_predmety"></a>
<h2>Pushable items</h2>
<p>
These items can move and you can push them (so you cannot pick them up). They all have a round nature excepting the <a href="#krabice">box</a>.
</p>
<?
  gebegin();
  ge("kamen","Stone",'The stone can be pushed, it is heavy, so it falls in the <a href="#dira">pits</a>, activates the <a href="#podlahy">floors</a> , will kill you if it falls on you. The stone is affected by the <a href="#pas">conveyor</a>, the <a href="#magnet">magnet</a> and the <a href="#led">ice</a>. It is destroyable and has a round nature.',"kamen0000.gif");
  ge("krabice","Box",'The box floats over the floor on the air cushion, so the <a href="#hemr">Slime Guy</a> can crawl under it. Otherwise, it is similar to the <a href="#kamen">stone</a>; except it has not a round nature and it cannot be destroyed.',"krabice0000.gif");
  ge("balonek","Balloon",'The balloon is light as it is filled with the hot air. Therefore the balloon floats over the <a href="#podlahy">floors</a> (it does not interact with them), it will not hurt you if it falls on you, it is destroyable (even if some heavy item falls on it) and it has a round nature.',"balonek.gif");
  ge("pneumatika","Tire",'The tire is similar to the <a href="#kamen">stone</a>, but it is not affected by the <a href="#magnet">magnet</a>.',"pneumatika.gif");
  ge("nitrak","Nitroglycerin",'The nitroglycerin explodes if it hits some obstacle or gets in the explosion. If pushing it, you should be careful not to hit some <a href="#stena">wall</a>!',"nitroglycerin.gif");
  ge("ledovka","Ice ball",'The ice ball is entirely made of the ice, so it keeps sliding straight once pushed. It stops after hitting some solid obstacle. The ice ball is destroyable, is not affected by the <a href="#magnet">magnet</a> and it has a round nature.',"ledovakoule.gif");
  geend();
?>
<? shnav();?>

<a name="predmety"></a>
<h2>Other items</h2>
<?
  gebegin();
  ge("magnet","Magnet",'The magnet generates a magnetic field in the way it is directed. The field is always covering an area of 1*n cells (horizontally or vertically) beginning in magnet and ending in the end of the map or in front of the <a href="#antimagnet">antimagnet</a>. Nothing else can interrupt the magnetic field. All <a href="#veci">objects</a> affected by the magnetism will start moving to the magnet, if the path is free of obstacles. Magnets cause the objects to fall. Falling objects would kill the <a href="#hemr">Slime Guy</a> , the <a href="#dracek">Dragon</a>, all <a href="#prisery">monsters</a> and the <a href="#balonek">balloon</a>. Magnets cannot be destroyed.',"magnet6.gif");
  ge("proud","Electrode with high voltage",'One electrode generates discharges of electric power in short periods. Each discharge creates a long beam, which stops on the first obstacle in its way. If the obstacle is destroyable, it will be destroyed and the beam will enlarge even more. The beam would kill you, but you can pass through in the short time between two discharges. If there are two electrodes located to discharge one against the other in the same time, the beam will be stabilized. However, you can push some object between the electrodes - they will lose contact, which makes the beam unstable again. Electrodes cannot be destroyed.');
  ge("teleport","Teleport",'If you enter the teleport, you are teleported to a different place in the level. Often but not necessarily, this is another teleport. While teleporting, you keep the direction of your very last movement. For example if you enter the teleport from left, you will appear on right to the teleport destination. If there is not empty space, you will be placed on one of two upright places considering the original direction of your movement (this would be up and down from the target in our previous example). If neither this is possible, you will appear on the same side of the target according to the side, from which you entered the teleport. If an obstacle blocks even this place, the teleportation will not start. Teleport can be destroyed in explosion.',"teleport1.gif");
  ge2("hajzly","Converters",'The converter behaves like the <a href="#teleport">teleport</a>, but it will change <a href="#manici">your form</a> in addition. In fact, this is often the only effect as the target of teleportation is set to the same place as the source.',116,"hajzly-pasovec.gif","hajzly-hemr.gif","hajzly-dracek.gif");
  geend();
?>
<? shnav();?>

<a name="prisery"></a>
<h2>Monsters</h2>
<p>
The monsters move in the same way as the <a href="#pasovec">Armadillo</a>. Besides they try to move on their own, <a href="#pas">conveyors</a> and <a href="#led">ice</a> affect them. The monsters will kill you if they reach you, with exception of the <a href="#pot_klaustr">claustrophobic monster</a>.
</p>
<?
  gebegin();
  ge("pot_otaciva","Rotative monster",'Rotative monster walks along the <a href="#steny">walls</a> following the rule of the right hand or the left hand (depending on its initial setting). Usually it "patrols" around the wall in some area, trying to get in or out. If there is no wall around, it can even start turning on the spot. Anyways, it has some basic intelligence that would prevent it from getting in an evident danger, for example, it will not walk in the <a href="#dira">pit</a> or in the <a href="#proud">high voltage</a>, but will die in the explosion after activated a <a href="#mina">mine</a>, because it is too far from its view.',"potvoraotaciva6.gif");
  ge("pot_dopravni","Traffic monster",'Traffic monster follows the <a href="#znacky">traffic signs</a>. It can travel at normal or high speed, which can be also controlled by the signs. It turns back when it hits some obstacle, but it cannot avoid the danger - it will go wherever the signs will tell it to go, even directly in the <a href="#dira">pit</a>.',"potvoraznackova6.gif");
  ge("pot_klaustr","Claustrophobic monster",'Like a <a href="#pot_dopravni">traffic monster</a>, the claustrophobic monster follows the <a href="#znacky">traffic signs</a>. In contrast to every other monster, this one does not kill you. However, it will panic and explode whenever it gets to such place, it cannot escape from. It is enough to have both ways forth and back blocked because the claustrophobic monster will not turn left or right unless is told so by a <a href="#znacky">traffic sign</a>.',"potvoraklaustrofobni6.gif");
  ge("pot_samonav","Homing monster",'The homing monster tries to go to you. Although it is not smart enough to run through a complex labyrinth, it is still very dangerous, especially when in higher number. It can avoid an evident danger, just like a <a href="#pot_otaciva">rotative monster</a>.',"potvorasamonavadeci6.gif");
  geend();
?>
<? shnav();?>

</div>

<p>
Much more knowledge about the objects and their interactions can be discovered by playing KRKAL... 
</p>
<p>
<b>So much for the chat, now go and play. Good luck!</b>
</p>
<div class="vecinav"> <a href="#">up</a> </div>
