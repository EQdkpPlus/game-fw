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
$english_array =  array(
	'classes' => array(
		0	=> 'Unknown',
		1	=> 'Warrior',
		2	=> 'Protector',
		3	=> 'Assassin',
		4	=> 'Marksman',
		5	=> 'Mage',
		6	=> 'Priest',
		7	=> 'Vampire',
		8	=> 'Bard',
		9	=> 'Soul Reaper',
	),

	'races' => array(
		0	=> 'Unknown',
		1	=> 'Dwarf',
		2	=> 'Elf',
		3	=> 'Human',
		4	=> 'Kindred',
		5	=> 'Stoneman',
		6	=> 'Lycan',
	),
	'roles' => array(
		1	=> 'Healer',
		2	=> 'Tank',
		3	=> 'Damage Dealer',
		4	=> 'Supporter',
	),
	
	'lang' => array(
		'fw'							=> 'Forsaken World',

		'plate'							=> 'Plate',
		'heavy'							=> 'Heavy',
		'light'							=> 'Cloth',	
		'medium'						=> 'Leather',
	
		// Profile information
		'uc_gender'						=> 'Gender',
		'uc_male'						=> 'Male',
		'uc_female'						=> 'Female',
		'uc_guild'						=> 'Guild',
		'uc_race'						=> 'Race',
		'uc_class'						=> 'Class',

		// Admin Settings
		'core_sett_fs_gamesettings'	=> 'Forsaken World Settings',
	),
);

?>