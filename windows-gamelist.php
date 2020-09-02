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

?>
