#!/usr/bin/php
<?php
$gamelist1 = <<<EOF1
WoW
BDO
Tree of Savior
CoD: warzone
Fortnite
Minecraft (controller)
Skyrim
GTA5
EOF1;
$gamelist2 = <<<EOF2
MMORPGs: BDO, WoW, Tree of Savior
Single-player open world: GTA5, Just Cause 2 demo, Minecraft (controller), Skyrim
Battle royale: CoD: warzone, Fortnite
EOF2;

if(rand(0,1) == 0){
$arGamelist1 = explode("\n", $gamelist1);
shuffle($arGamelist1);
$szGamelist1 = implode(', ', $arGamelist1);
echo $szGamelist1;
}
else{
$arGamelist2 = explode("\n", $gamelist2);
shuffle($arGamelist2);
for($i=0; $i<count($arGamelist2); $i++)
{
  $arExploded1 = explode(': ', $arGamelist2[$i], 2);
  $arExploded2 = explode(', ', $arExploded1[1]);
  shuffle($arExploded2);
  $szPostGamelist = implode(', ', $arExploded2);
  $szGamelist2 = implode(': ', array($arExploded1[0], $szPostGamelist));
  echo $szGamelist2 . "\n";
}

}
/*
example outputs:
Fortnite, CoD: warzone, GTA5, Minecraft (controller), Skyrim, WoW, Tree of Savior, BDO
---
BDO, Skyrim, Fortnite, CoD: warzone, Minecraft (controller), GTA5, WoW, Tree of Savior
---
GTA5, WoW, Minecraft (controller), CoD: warzone, BDO, Tree of Savior, Skyrim, Fortnite
---
MMORPGs: WoW, BDO, Tree of Savior
Battle royale: CoD: warzone, Fortnite
Single-player open world: GTA5, Skyrim, Just Cause 2 demo, Minecraft (controller)
---
Single-player open world: GTA5, Minecraft (controller), Just Cause 2 demo, Skyrim
Battle royale: Fortnite, CoD: warzone
MMORPGs: BDO, Tree of Savior, WoW
---
Battle royale: CoD: warzone, Fortnite
MMORPGs: BDO, Tree of Savior, WoW
Single-player open world: Just Cause 2 demo, Skyrim, Minecraft (controller), GTA5
*/
?>
