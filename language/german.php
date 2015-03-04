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
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Krieger',
		2	=> 'Patriot',
		3	=> 'Assassine',
		4	=> 'Schütze',
		5	=> 'Magier',
		6	=> 'Priester',
		7	=> 'Vampir',
		8	=> 'Barde',
		9	=> 'Seelensammler',
		10	=> 'Höllenpeiniger',
	),

	'races' => array(
		0	=> 'Unknown',
		1	=> 'Zwerg',
		2	=> 'Elf',
		3	=> 'Mensch',
		4	=> 'Kindred',
		5	=> 'Steinmensch',
		6	=> 'Lykaner',
		7	=> 'Dämone',
	),
	'roles' => array(
		1	=> 'Heiler',
		2	=> 'Tank',
		3	=> 'Schadensausteiler',
		4	=> 'Unterstützer',
	),
	
	'lang' => array(
		'fw'							=> 'Forsaken World',

		'plate'							=> 'Platte',
		'heavy'							=> 'Schwere Rüstung',
		'light'							=> 'Stoff',	
		'medium'						=> 'Leder',
	
		// Profile information
		'uc_gender'						=> 'Geschlecht',
		'uc_male'						=> 'Männlich',
		'uc_female'						=> 'Weiblich',
		'uc_guild'						=> 'Gilde',
		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',

		// Admin Settings
		'core_sett_fs_gamesettings'		=> 'Forsaken World Einstellungen',
	),
);

?>