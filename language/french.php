<?php
/*	Project:	EQdkp-Plus
 *	Package:	Forsaken World game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$french_array =  array(
	'classes' => array(
		0	=> 'Inconnue',
		1	=> 'Guerrier',
		2	=> 'Gardien',
		3	=> 'Assassin',
		4	=> 'Fusilier',
		5	=> 'Mage',
		6	=> 'Prêtre',
		7	=> 'Vampire',
		8	=> 'Barde',
		9	=> 'Faucheur',
		10	=> 'Tourmenteur',
		11	=> 'Rôdeur',
		12	=> 'Sentinelle',
		13	=> 'Lancier',
	),

	'races' => array(
		0	=> 'Inconnue',
		1	=> 'Nain',
		2	=> 'Elf',
		3	=> 'Humain',
		4	=> 'Kindred',
		5	=> 'Pétran',
		6	=> 'Lycan',
		7	=> 'Démon',
	),

	'roles' => array(
		1	=> 'Soigneur',
		2	=> 'Tank',
		3	=> 'Degats',
		4	=> 'Soutien',
	),
	
	'lang' => array(
		'fw'							=> 'Forsaken World',

		'plate'							=> 'Plate',
		'heavy'							=> 'Heavy',
		'light'							=> 'Cloth',	
		'medium'						=> 'Leather',
	
		// Profile information
		'uc_gender'						=> 'Genre',
		'uc_male'						=> 'Masculin',
		'uc_female'						=> 'Féminin',
		'uc_guild'						=> 'Guilde',
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Classe',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Paramètres de Forsaken World',
	),
);

?>
