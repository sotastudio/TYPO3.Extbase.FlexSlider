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
 * Helper Class which makes various tools and helper available
 *
 * @author Andy Hausmann <ah@sota-studio.de>
 * @package flexslider
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_Flexslider_Utility_EmConfiguration {

	/**
	 * Extension key to get the EM Config from.
	 * This will we overwritten later on if a key is given through call.
	 *
	 * @var string
	 */
	static protected $extKey = 'flexslider';


	/**
	 * Returns the Extension key.
	 *
	 * @static
	 * @return string The Extension key.
	 */
	protected static function getExtKey() {
		return self::$extKey;
	}

	/**
	 * Sets the Extension key.
	 *
	 * @static
	 * @param string $extKey The Extension key.
	 */
	protected static function setExtKey($extKey) {
		self::$extKey = $extKey;
	}

	/**
	 * Overrides the Extension key, if one's given.
	 *
	 * @static
	 * @param string $extKey Lower-cased key of the extension to get the EM Config from.
	 */
	protected static function overrideExtKey($extKey) {
		$extKey = (string) trim($extKey);
		if (strlen($extKey)) {
			self::setExtKey($extKey);
		}
	}

	/**
	 * Parses the Extension Configuration and returns it.
	 *
	 * @static
	 * @param string $extensionKey The Extension key.
	 * @return array The Extension Configuration.
	 */
	public static function getConfiguration($extensionKey = '') {
		self::overrideExtKey($extensionKey);
		return self::parseConfiguration();
	}

	/**
	 * Parse settings and return it as array
	 *
	 * @return array unserialized extconf settings
	 */
	protected static function parseConfiguration() {
		$settings = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][self::getExtKey()]);
		if (!is_array($settings)) {
			$settings = array();
		}
		return $settings;
	}

}