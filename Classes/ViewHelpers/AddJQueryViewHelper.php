<?php
namespace SotaStudio\Flexslider\ViewHelpers;
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

use SotaStudio\Flexslider\Utility\Div,
	TYPO3\CMS\Core\Messaging\FlashMessage,
	TYPO3\CMS\Core\Utility\ExtensionManagementUtility,
	TYPO3\CMS\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;

/**
 *
 * A view helper for adding jQuery to the frontend.
 *
 * = Examples =
 *
 * <code title="Single argument">
 * <fs:AddJQuery altJQueryFile="path/to/alternativeJQueryFile.js" />
 * </code>
 * <output>
 * </output>
 *
 * @author Andy Hausmann <ah@sota-studio.de>, SOTA Studio
 * @package flexslider
 * @subpackage ViewHelpers
 */
class AddJQueryViewHelper extends AbstractTagBasedViewHelper {

	/**
	 * Adds T3Jquery as Lib
	 *
	 * If T3Jquery is available, it adds it's script file(s)
	 * Otherwise, it includes the script of this Ext.
	 *
	 * @param string $altJQueryFile
	 * @param bool $moveToFooter
	 * @return void
	 */
	public function render($altJQueryFile = NULL, $moveToFooter = FALSE) {
		// checks if t3jquery is loaded
		if (ExtensionManagementUtility::isLoaded('t3jquery')) {
			require_once(ExtensionManagementUtility::extPath('t3jquery').'class.tx_t3jquery.php');
		}
		// if t3jquery is loaded and the custom Library had been created
		if (T3JQUERY === TRUE) {
			\tx_t3jquery::addJqJS();

		} else {
			if ($altJQueryFile) {
				div::addCssJsFile(
					$altJQueryFile,
					$moveToFooter
				);
			} else {
				Div::renderFlashMessage(
					'jQuery not loaded',
					'jQuery could not be loaded. Please check the path to the alternative jQuery library or simply use the Extension t3jquery.',
					FlashMessage::ERROR
				);
			}
		}
	}
}