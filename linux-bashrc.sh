

gamelist(){
shuf ~/linux-gamelist.txt | tr '\n' ',' | sed 's/,/, /g' | sed 's/, $//'
echo
}

#example output:
#Dota 2, Minecraft, Diablo 1, CS:GO, WoW, Factorio demo, Team fortress 2, Borderlands 2, Diablo 2
#Borderlands 2, Diablo 1, Dota 2, WoW, Diablo 2, Minecraft, CS:GO, Team fortress 2, Factorio demo
#Borderlands 2, CS:GO, Dota 2, Minecraft, Team fortress 2, Factorio demo, Diablo 2, WoW, Diablo 1
#Diablo 1, CS:GO, Diablo 2, Team fortress 2, Factorio demo, WoW, Borderlands 2, Minecraft, Dota 2
#Team fortress 2, Minecraft, Factorio demo, Borderlands 2, Diablo 2, Diablo 1, Dota 2, WoW, CS:GO
#WoW, Diablo 1, Minecraft, Diablo 2, Factorio demo, Team fortress 2, Dota 2, CS:GO, Borderlands 2
