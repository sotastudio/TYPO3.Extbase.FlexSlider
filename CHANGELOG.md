### 1.4.4
* __Bugfix__: Fixed a small bug regarding subtitle expansion by rte.


### 1.4.3
* __Bugfix__: Fixed #5 (@bitbucket): Fixed a bug causing via TS inherited flexsliders not to pick different unique ids.
* __Bugfix__: Fixed #28 (@github): Fixed a typo in the docs.
* __Bugfix__: Fixed #7 (@bitbucket): Fixed a typo in flexform localization.
* __Bugfix__: Fixed #6 (@bitbucket): Fixed transport of links to the database within subtitle field.
* __Bugfix__: Fixed #4 (@bitbucket): Added a default value for subtutle in ext_tables.php.


### 1.4.2

* __Misc__: Fixed broken links in Extension documentation.

### 1.4.1

* __Improvement__: JS can now be injected inline via Page Renderer as well which enables the Extension to put in the Footer and Header if wished so.

### 1.4.0

* __Improvement__: CSS & JS is now being rendered through the Page Renderer which enables the Extensions Resources to be concatenated and compressed.

### 1.3.4

* __Hotfix__: Fixed ViewHelper for link building - multiple dynamic links per page faled to render. Thanks to Simon Rauterberg for reporting this.

### 1.3.3

* __Hotfix__: Fixed ViewHelper for link building - caused errors in Environments with reporting turned on.

### 1.3.2

* __Hotfix__: Switched type of field "subtitle" to text.

### 1.3.1

* __Hotfix__: Fixed an incompatibility to TYPO3 4.5 LTS within the DynLink ViewHelper.

### 1.3.0

* __Feature__: Implemented new LinkViewHelper - external URLs are now working.
* __Feature__: Added Link Wizard in Flexforms.
* __Feature__: StoragePid not needed anymore - in case the records are located on the same page where the plugin is.
* __Feature__: Added Extension Configuration - you can access it via the Extension Manager
* __Feature__: Added Subtitle Transformation to RTE via EXT Conf.
* __Bugfix__: Now it is possible to use the Plugin within TypoScript Libs.
* __Bugfix__: Revised field image - It is now required and only allows max 1 item.
* __Misc__: Extended Fluid Template.
* __Misc__: Updated README in EXT root.

### 1.2.2

* __Bugfix__: Fixed a bug regarding backward compatibility to TYPO3 4.5.x.
* __Misc__: Improved performance.

### 1.2.1

* __Bugfix/Feature__: Running multiple FlexSliders per Page now possible.
* __Misc__: Improved performance.
* __Misc__: Updated README in EXT root.

### 1.2.0

* Initial Release
* Initial TER Upload