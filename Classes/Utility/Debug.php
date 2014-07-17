<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012-2014 Andy Hausmann <ah@sota-studio.de>, SOTA Studio
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Helper Class which makes debugging tools available
 *
 * @author Andy Hausmann <ah@sota-studio.de>
 * @package flexslider
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Flexslider_Utility_Debug {

	/**
	 * Helper function for debuggin purposes.
	 *
	 * @param mixed $v Var to debug
	 */
	public static function debug($v) {
		t3lib_utility_Debug::debug($v);
	}

	/**
	 * Returns the class name of the given object.
	 *
	 * @param object $obj Object to analyze
	 * @return string Class name
	 */
	public static function getClassName($obj) {
		return get_class($obj);
	}

	/**
	 * Returns a list of class methods within the given object.
	 *
	 * @param object $obj Object to analyze
	 * @return array List of class methods
	 */
	public static function getClassMethods($obj) {
		return get_class_methods($obj);
	}

	/**
	 * Returns a list of class properties within the given object.
	 *
	 * @param object $obj Object to analyze
	 * @return array List of vlass properties
	 */
	public static function getClassVars($obj) {
		return get_object_vars($obj);
	}

}