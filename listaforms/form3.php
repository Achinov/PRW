<?php


$e= $_POST['estado'];
if($e=="Amazonas" || $e=="AM"){$c="Manaus";}
if($e=="Tocantins" || $e=="TO"){$c="Palmas";}
if($e=="Para" || $e=="PA"){$c="Belem";}
if($e=="Amapa" || $e=="AP"){$c="Macapa";}
if($e=="Acre" || $e=="AC"){$c="Rio Branco";}
if($e=="Roraima" || $e=="RR"){$c="Boa Vista";}
if($e=="Rondonia" || $e=="RO"){$c="Porto Velho";}
if($e=="Mato Grosso" || $e=="MT"){$c="Cuiaba";}
if($e=="Goias" || $e=="GO"){$c="Goiania";}
if($e=="Distrito Federal" || $e=="DF"){$c="Brasília";}
if($e=="Pernambuco" || $e=="PE"){$c="Recife";}
if($e=="Bahia" || $e=="BA"){$c="Salvador";}
if($e=="Paraiba" || $e=="PB"){$c="João Pessoa";}
if($e=="Ceara" || $e=="CE"){$c="Fortaleza";}
if($e=="Maranhao" || $e=="MA"){$c="Sao Luis";}
if($e=="Alagoas" || $e=="AL"){$c="Maceio";}
if($e=="Rio Grande Do Norte" || $e=="RN"){$c="Natal";}
if($e=="Piaui" || $e=="PI"){$c="Teresina";}
if($e=="Sergipe" || $e=="SE"){$c="Aracaju";}
if($e=="Sao Paulo" || $e=="SP"){$c="Sao Paulo";}
if($e=="Rio de Janeiro" || $e=="RJ"){$c="Rio de Janeiro";}
if($e=="Espirito Santo" || $e=="ES"){$c="Vitoria";}
if($e=="Minas Gerais" || $e=="MG"){$c="Belo Horizonte";}
if($e=="Mato Grosso do Sul" || $e=="MS"){$c="Campo Grande";}
if($e=="Parana" || $e=="PR"){$c="Curitiba";}
if($e=="Rio Grande do Sul" || $e=="RS"){$c="Porto Alegre";}
if($e=="Santa Catarina" || $e=="SC"){$c="Florianopolis";}
 echo "$c\n";
?>