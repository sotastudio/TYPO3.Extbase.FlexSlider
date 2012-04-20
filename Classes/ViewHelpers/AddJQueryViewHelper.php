<?php

class Tx_Flexslider_ViewHelpers_AddJQueryViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractTagBasedViewHelper {

	/**
	 * Adds T3Jquery as Lib
	 *
	 * If T3Jquery is available, it adds it's script file(s)
	 * Otherwise, it includes the script of this Ext.
	 *
	 * @param string $altJQueryFile
	 * @return void
	 */

	public function render($altJQueryFile = NULL) {
		// checks if t3jquery is loaded
		if (t3lib_extMgm::isLoaded('t3jquery')) {
			require_once(t3lib_extMgm::extPath('t3jquery').'class.tx_t3jquery.php');
		}
		// if t3jquery is loaded and the custom Library had been created
		if (T3JQUERY === true) {
			tx_t3jquery::addJqJS();

		} else {
			if ($altJQueryFile) {
				$fileRef = $GLOBALS['TSFE']->tmpl->getFileName($altJQueryFile);
				$GLOBALS['TSFE']->additionalHeaderData['flexSliderJQuery'] =
					'<script src="' . $fileRef . '" type="text/javascript"></script>';
			}
		}
	}
}
?>