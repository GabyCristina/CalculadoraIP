<?php

//<h1></h1>

 $trinca1 = $_GET['trinca1'];
 $trinca2 = $_GET['trinca2'];
 $trinca4 = $_GET['trinca4'];
 $trinca3 = $_GET['trinca3'];
 $masc    = $_GET['masc'];

echo "<h1>Ip digitado foi: ";
 echo $trinca1.".";

 echo $trinca2.".";

 echo $trinca4.".";

 echo $trinca3."/";

 echo $masc;

 echo "</h1>";


echo "<h1>mascara integral</h1>";



echo "<h1>total de endereços</h1>";
$sobramasc= 32-$masc;
$endereco=pow(2,$sobramasc);
echo $endereco;



echo "<h1>total de possiveis host(s)</h1>";
$usehost=$endereco - 2;
echo $usehost;



echo "<h1>total sub redes</h1>";
$totalrange = 256/$endereco;
echo $totalrange;


//classifição
echo "<h1>classifição</h1>";
if(($trinca1 == '10')
 or ($trinca1=='127')
  or ($trinca1=='172' and $trinca2>='16' and $trinca2<='32')
  or ($trinca1 == '192' and $trinca2 == '168')
){
  echo "<h4>Reservado ";
}else{
  echo "<h4>Liberado ";
};


if( $trinca1>='0' and $trinca1<='127'
and $trinca2>='0' and $trinca2<='255'
and $trinca3>='0' and $trinca3<='255'
and $trinca4>='0' and $trinca4<='255'
){
   echo "da classe A </h4>";
 }elseif( $trinca1>='128' and $trinca1<='191'
      and $trinca2>='0' and $trinca2<='255'
      and $trinca3>='0' and $trinca3<='255'
      and $trinca4>='0' and $trinca4<='255'
 ){
   echo "da classe B </h4>";
 }elseif ( $trinca1>='192' and $trinca1<='223'
       and $trinca2>='0' and $trinca2<='255'
       and $trinca3>='0' and $trinca3<='255'
       and $trinca4>='0' and $trinca4<='255'
 ){
   echo "da classe C </h4>";
 }elseif ( $trinca1>='224' and $trinca1<='239'
       and $trinca2>='0' and $trinca2<='255'
       and $trinca3>='0' and $trinca3<='255'
       and $trinca4>='0' and $trinca4<='255'
 ){
   echo "da classe D </h4>";
 }elseif ( $trinca1>='240' and $trinca1<='255'
       and $trinca2>='0' and $trinca2<='255'
       and $trinca3>='0' and $trinca3<='255'
       and $trinca4>='0' and $trinca4<='255'
 ){
   echo "Classe E";
 }else{
   echo "Numero invalido";
 }
