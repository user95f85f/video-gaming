

gamelist(){
shuf ~/linux-gamelist.txt | tr '\n' ',' | sed 's/,/, /g' | sed 's/, $//'
echo
}

#example output:
#TODO
