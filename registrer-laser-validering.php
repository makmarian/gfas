<?php

//Hvis de forskjellige inputfeltene ikke har verdi får de automatisk verdi 0
if(!$refid){
    $refid = 0;
}
if(!$type){
    $type = 0;
}
if(!$hplaser){
    $hplaser = 0;
}
if(!$hpink){
    $hpink = 0;
}
if(!$nonhplaser){
    $nonhplaser = 0;
}
if(!$nonhpink){
    $nonhpink = 0;
}
if(!$samsunglaser){
    $samsunglaser = 0;
}
if(!$others){
    $others = 0;
}

//Sjekker at de er numeric slik at man ikke registrerer noe med bokstaver
if(!is_numeric($hplaser) || !is_numeric($hpink) || !is_numeric($nonhplaser) || !is_numeric($nonhpink) || !is_numeric($samsunglaser) || !is_numeric($others)){
    print("Alle verdiene må være tall");
    return false;
} 
?>