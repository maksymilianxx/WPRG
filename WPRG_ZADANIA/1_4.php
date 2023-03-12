<?php

$pesel = "81020352363";

$peselsplit[] = str_split($pesel, 2);

if((int)$peselsplit[0][1]>=20 && (int)$peselsplit[0][1]<=32){
 $peselsplit[0][1] = (int)$peselsplit[0][1]-20;
 if((int)$peselsplit[0][1]<10) $peselsplit[0][1] = "0".$peselsplit[0][1];
}

echo $peselsplit[0][2]."-".$peselsplit[0][1]."-".$peselsplit[0][0];

?>