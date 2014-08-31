<?include('ti.php');?>
<h1>What is KRKAL?</h1>
<p>
KRKAL is a sophisticated system for 2D games design and development. With KRKAL, you can develop new games or just improve already existing games. You can create or modify the game levels and play all games, of course.
KRKAL includes a full logical-action game Krkal, which is a remake of our old logical-action title. KRKAL runs on a powerful graphics engine, has its own level editor, script editor and compiler. KRKAL was originally developed at the Faculty of Math and Physics of the Charles University, Prague, the Czech Republic. 
</p>
<img src="/img/manik.png" width="200" height="200" alt="Dráèek" style="float:right"/>
<h2>Game Krkal</h2>
<p>
Krkal is an excellent logical-action game. With one of three different characters, you have to avoid all dangerous traps, deal with various items, escape from deadly monsters and in the first place - boil your brain - to finally find the way through and reach so long desired exit... and then? Just select level that is even more difficult and rush to the battle again.
</p>
<p>
The levels are built of many miscellaneous items, which interact one with the other. You will push stones, slide on the ice, avoid stepping on mines, play with the switches, wander in complex labyrinths and even set up the traffic signs to take advantage of the traffic monsters!
</p>
<p>
Simply, Krkal is very interesting and unique. You observe everything from above and will miss neither a professional graphics nor stylish music. With KRKAL, you will not only be able to build new levels from existing items, but also create quite new objects. You will be able to improve and modify the game itself!
<br/>
<a href="krkal.html">More about game Krkal...</a>
</p>
<h2>Special scripting language</h2>
<p>
For an easy and flexible game development, we created a special programming language. Primarily, we designed it to be useful for easy programming of game extensions and game modifications, even for several independent users. Basically, anybody can improve or modify his favorite game to meet his needs. The language is object-oriented, based on classic C. It includes some useful concepts that allow the simulation of life of many co-existing objects. 
</p>
<p>
Our system integrates the script editor and the compiler. The compiler translates your scripts to an assembler-like code, which is internally interpreted in the run time. Optionally, the scripts can be also translated to C++ to be included in some future KRKAL distribution. These scripts are very fast, as they do not need to be interpreted.
</p>
<h2>Powerful graphical engine</h2>
<p>
We endeavored for a beautiful game appearance and were determined not to sacrifice the quality of graphics. Although the engine is only two dimensional at the bottom, it is able to display the three dimensional world using the isometric projection and realistic lighting. The engine allows the local point lights to be placed anywhere in the level and the global light, which lights the scene from above. If the global light shines on the objects, it produces realistic and correctly computed shadows. The lighting computation is performed in 3D! The final image rendering is hardware accelerated, while the graphics remains very fine, smooth and detailed even at the lower resolutions, all thanks to the 2D nature of the engine.
</p>
<p>
The graphics is not connected to its object directly, but it uses the automatisms instead. The automatism is a set of rules that determine which graphics shall be used in a particular situation. For example, it solves the correct image connection, produces random patterns, animations etc.  Thanks to the automatisms, the scripts almost do not need to care about the graphics at all. 
</p>
<h2>Level editor</h2>
<p>
The level editor is a flexible, universal tool for game levels editing. Many games are equipped with a level editor, but it can usually only handle the levels for this specific game. Our level editor is able to edit the levels of any game developed in KRKAL. While in the editor, you can place objects in the map and set their attributes. The scripts can control the way the objects are handled within the editor. We had made every effort to make the editor productive and easy to use. It is possible to play the game while editing.
</p>
<p>
<a href="http://forum.krkal.org/en/viewtopic.php?t=24">How to use level editor</a>
</p>
<h2>Own graphical user interface</h2>
<p>
We developed our own GUI for KRKAL, in order to manage the controls and dialogs more easily and to alter their style and appearance. 
</p>
