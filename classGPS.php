<?php

class GPS {

	public $marque;
	public $adresse;
	public $position;
	public $onAPasLesThunes = false;
	public $bouchons = false;

	public function definirUnTrajet($depart, $arrivee) {
		return "Part de ".$depart." pour arriver à ".$arrivee.".<br>";
	}

	public function enregistreUneAdresse($adresse) {
		return "Enregistre : ".$adresse." dans le GPS. <br>";
	}

	public function afficherLaCarte($ici) {
		return "Me montre la carte et me positionne ".$ici." !<br>";
	}

	public function eviterLesPeages($onAPasLesThunes) {
		if( $onAPasLesThunes == true){
				return "On evite les péages !<br>";
			} else {
				return "On paye !<br>";
			}
	}

	public function eviterLesBouchons($bouchons) {
		if( $bouchons == true){
				return "On fais un détour !<br>";
			} else {
				return "Ok, y'a pas de bouchons !<br>";
			}
	}

	public function avertirPause($tempsTrajet) {

		if ($tempsTrajet >= 7200000){
			$nbPause = round($tempsTrajet / 7200000);
			return "Il faudra faire ".$nbPause." pause(s) toutes les 2h !<br>";
		}
		else {
			return "Pas besoin de faire de pause.";
		}
	}

}


$ParisLyon = new GPS();
$ParisLyon->marque = 'TOMTOM';
$position = $ParisLyon->position = '44 rue de chez ta mère 75001 PARIS';
$arrivee = $ParisLyon->adresse = '57 avenue du bas 69000 LYON';
$trajetParisLyon = $ParisLyon->tempsTrajet = 18000000;

echo $ParisLyon->definirUnTrajet($position,$arrivee);
echo $ParisLyon->enregistreUneAdresse($arrivee);
echo $ParisLyon->afficherLaCarte($position);
echo $ParisLyon->eviterLesPeages(true);
echo $ParisLyon->eviterLesBouchons(false);
echo $ParisLyon->avertirPause($trajetParisLyon);