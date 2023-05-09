<?php
$teste = ["Maizena","Arroz","Feijão","Manga","Farinha de trigo"];
function myImplode($char,$arr){
    $str= "";
    for($i = 0;$i < count($arr); $i++){
        if($i == count($arr)-1){
            $str .= "$arr[$i]";  
        }else{
            $str .= "$arr[$i]$char";  
        }
     
    }
    return $str;
}
$variavel = myImplode(",",$teste);
echo $variavel;

