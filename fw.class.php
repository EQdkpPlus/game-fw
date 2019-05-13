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

if(!class_exists('fw')) {
	class fw extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '1.1.4';
		protected $this_game		= 'fw';
		protected $types			= array('classes', 'races', 'filters', 'roles');
		protected $classes			= array();
		protected $races			= array();
		protected $roles			= array();
		protected $filters			= array();
		public $langs				= array('english', 'german', 'french');

		protected $class_dependencies = array(
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> false
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',					// Unknown
						1 	=> array(4),				// Dwarf
						2 	=> array(1,6,8,11,12),		// Elf
						3 	=> array(1,3,5,6,13),		// Human
						4 	=> array(1,5,6,7,12),		// Kindred
						5 	=> array(2),				// Stoneman
						6 	=> array(3,6,9),			// Lycan
						7 	=> array(10),				// Demon
					),
				),
			),
		);
		
		public $default_roles = array(
			1	=> array(6, 7, 8, 12),					// healer
			2	=> array(1, 2),							// tank
			3	=> array(3, 4, 5, 7, 9, 10, 11, 12),	// damage
			4	=> array(8, 13)							// support
		);
		
		protected $class_colors = array(
			0	=> '#ff7fff',
			1	=> '#05e6fa',
			2	=> '#7d7d7d',
			3	=> '#741bd4',
			4	=> '#fc9b00',
			5	=> '#f7ff00',
			6	=> '#ffffff',
			7	=> '#ff0000',
			8	=> '#159e00',
			9	=> '#5845ff',
			10	=> '#765100',
			11	=> '#008812',
			12	=> '#007a9f',
			13	=> '#fd9900',
		);

		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= false;
		public $lang			= false;

		public function profilefields(){
			$xml_fields = array(
				'gender'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_gender',
					'options'		=> array('Male' => 'uc_male', 'Female' => 'uc_female'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'guild'	=> array(
					'type'			=> 'text',
					'category'		=> 'character',
					'lang'			=> 'uc_guild',
					'size'			=> 32,
					'undeletable'	=> true,
				),
			);
			return $xml_fields;
		}

		protected function load_filters($langs){
			if(!$this->classes) {
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang) {
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name) {
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
			}
		}

		public function install($install=false){}
		
		//Guildbank
		public function guildbank_money(){
		return 	$money_data = array(
		'diamond'		=> array(
			'icon'			=> array(
				'type'		=> 'icon',
				'name'		=> 'diamond',
			),
			'factor'		=> 1000000,
			'size'			=> 'unlimited',
			'language'		=> $this->user->lang(array('gb_currency', 'diamond')),
			'short_lang'	=> $this->user->lang(array('gb_currency', 'diamond_s')),
		),
		'gold'		=> array(
			'icon'			=> array(
				'type'		=> 'default',
				'name'		=> 'gold'
			),
			'factor'		=> 10000,
			'size'			=> 2,
			'language'		=> $this->user->lang(array('gb_currency', 'gold')),
			'short_lang'	=> $this->user->lang(array('gb_currency', 'gold_s')),
		),
		'silver'	=> array(
			'icon'			=> array(
				'type'		=> 'default',
				'name'		=> 'silver'
			),
			'factor'		=> 100,
			'size'			=> 2,
			'language'		=> $this->user->lang(array('gb_currency', 'silver')),
			'short_lang'	=> $this->user->lang(array('gb_currency', 'silver_s')),
		),
		'copper'	=> array(
			'icon'			=> array(
				'type'		=> 'default',
				'name'		=> 'bronze'
			),
			'factor'		=> 1,
			'size'			=> 2,
			'language'		=> $this->user->lang(array('gb_currency', 'copper')),
			'short_lang'	=> $this->user->lang(array('gb_currency', 'copper_s')),
		)
		);}
	}
}
?>
