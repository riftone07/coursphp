<?php 
/*
$heure = 17;

if ($heure < 17) {
	echo "je dois pas venir  à l'ecole";
}else{
	echo "je dois venir à lùecole";
}



if ($heure == 17) {
	echo "je dois pas venir  à l'ecole";
}else{
	echo "je dois venir à lùecole";
}

$sexe = "masculin";
if($sexe == "masculin")
{
	echo "vous avez choisi le sexe masculin";
}else{
	echo "vous avez choisi le sexe feminin";
}



$age = 18; //c'est un majeur
$age = 15 ; //c'est un mineur
$age = 12; //ado


if($age == 12)
{
	echo "Vous un ado";
}elseif($age == 15){
	echo " vous etes mineur";
}else{
	echo "vous ".$age." ans";
}
*/



$age = 12;

if($age == 15)
{
	echo "c'est un enfant";
}elseif($age >12 && $age <= 15)
{
	echo "vous etes mineur";
}elseif($age > 15 && $age <= 30)
{ 
	echo "vous etes majeur";
}else
{
	echo "vous n'etes pas autorise";
}
echo "<br/>" ;
//

$allume = false;

if ($allume != false) {
	echo "la lampe est allumée";
}else{
	echo "la lampe est eteinte";
}
echo "<br/>" ;
echo "<br/>" ;
echo "<br/>" ;

$note = 3;
if ($note == 0) {
	echo "mauvaise note";
}elseif ($note == 1) {
	echo "note moyenne";
}elseif ($note == 2) {
	echo "note a bien";
}elseif ($note == 3) {
	echo " bonne note";
}else
{
	echo "la note n'existe pas";
}

echo "<br/>" ;
echo "<br/>" ;
echo "<br/>" ;


$note = 3;

switch ($note) {
	case 0:
		echo "mauvaise note";
		break;
	case 1:
		echo "mauvaise note";
		break;
	case 2:
		echo "mauvaise note";
		break;
	
	default:
		echo "la note n'existe pas";
	break;
}








?>

