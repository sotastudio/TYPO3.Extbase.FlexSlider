<?php

class Tx_Flexslider_ViewHelpers_AddFileViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractTagBasedViewHelper {

	/**
	 * Adds JS
	 *
	 * @param string $file
	 * @return void
	 */

	public function render($file = NULL) {

		$mediaTypeSplit = strrchr($file, '.');
		$fileRef = $GLOBALS['TSFE']->tmpl->getFileName($file);

		if ($fileRef) {
			if ($mediaTypeSplit == '.js') {
				$GLOBALS['TSFE']->additionalHeaderData['flexSliderJs'] = '<script src="' . $fileRef . '" type="text/javascript"></script>';
			}
			elseif ($mediaTypeSplit == '.css') {
				$GLOBALS['TSFE']->additionalHeaderData['flexSliderCss'] =
					'<link rel="stylesheet" type="text/css" media="all" href="' . $fileRef . '" />';
			}
		}
	}
}
?>