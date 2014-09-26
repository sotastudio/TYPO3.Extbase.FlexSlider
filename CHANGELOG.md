### 1.5.2

* Fixed jQuery implementation due to an update regarding Namespaces
* Fixed TypoScrit PLugin implementation due to an update regarding Namespaces

### 1.5.1

* Re-added Frontend Plugin to New Content Element Wizard


### 1.5.0

* Docs: Droped SXW and introduced RST.
* Compatibility revision due to 6.2 LTS.
* Increased code quality.
* Using namespaces.


### 1.4.5

* Improved alternative id generation in case FlexSlider is being generated via TypoScript.
* Fixed #30 (github): Var altUid is now being passed correctly along all template files.


### 1.4.4

* Fixed a small bug regarding subtitle expansion by rte.


### 1.4.3
* Fixed #5 (@bitbucket): Fixed a bug causing via TS inherited flexsliders not to pick different unique ids.
* Fixed #28 (@github): Fixed a typo in the docs.
* Fixed #7 (@bitbucket): Fixed a typo in flexform localization.
* Fixed #6 (@bitbucket): Fixed transport of links to the database within subtitle field.
* Fixed #4 (@bitbucket): Added a default value for subtutle in ext_tables.php.


### 1.4.2

* Fixed broken links in Extension documentation.


### 1.4.1

* JS can now be injected inline via Page Renderer as well which enables the Extension to put in the Footer and Header if wished so.


### 1.4.0

* CSS & JS is now being rendered through the Page Renderer which enables the Extensions Resources to be concatenated and compressed.


### 1.3.4

* Fixed ViewHelper for link building - multiple dynamic links per page faled to render. Thanks to Simon Rauterberg for reporting this.


### 1.3.3

* Fixed ViewHelper for link building - caused errors in Environments with reporting turned on.


### 1.3.2

* Switched type of field "subtitle" to text.


### 1.3.1

* Fixed an incompatibility to TYPO3 4.5 LTS within the DynLink ViewHelper.


### 1.3.0

* Implemented new LinkViewHelper - external URLs are now working.
* Added Link Wizard in Flexforms.
* StoragePid not needed anymore - in case the records are located on the same page where the plugin is.
* Added Extension Configuration - you can access it via the Extension Manager
* Added Subtitle Transformation to RTE via EXT Conf.
* Now it is possible to use the Plugin within TypoScript Libs.
* Revised field image - It is now required and only allows max 1 item.
* Extended Fluid Template.
* Updated README in EXT root.


### 1.2.2

* Fixed a bug regarding backward compatibility to TYPO3 4.5.x.
* Improved performance.


### 1.2.1

* Running multiple FlexSliders per Page now possible.
* Improved performance.
* Updated README in EXT root.


### 1.2.0

* Initial Release
* Initial TER Upload