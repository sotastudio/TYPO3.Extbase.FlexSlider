# FlexSlider


## Installation


### Via Git

Clone into typo3conf/ext/

	git clone git@github.com:andyhausmann/jqct.git /path/to/project/typo3conf/ext/flexslider/

Install by Extension Manager as usual

### Via TER

Currently this Extension isn't available through TER. The Extension key 'flexslider' has already been reserved for this Extension. If it reaches a stable state, it will be uploaded immediately.


## Configure

* Include **static Extension Template**
* Create **Frontend plugin**
	* Adjust the **Plugin Settings** to your needs
	* Setup **Record Storage Page** where the Slider Items come from
* Create **Slider Items** on the Record Storage Page
* Check the Frontend!


### TypoScript Constants

_This section isn't completed yet._

	plugin.tx_flexslider {
		settings {
			view {
				# Necessary options, if you plan to manipulate the templates
				templateRootPath = EXT:flexslider/Resources/Private/Templates/
				partialRootPath = EXT:flexslider/Resources/Private/Partials/
				layoutRootPath = EXT:flexslider/Resources/Private/Layouts/
			}
			persistence {
				# Here you can set up the Record Storage Page globally
				storagePid = 
			}
			settings {
				# String: File reference to the FlexSlider's Css file - empty this value if you want to include this at your own
				css = EXT:flexslider/Resources/Public/Css/flexslider.css
				lib {
					# String: File reference to alternative jQuery library if EXT t3jquery is not in use
					jQuery = EXT:flexslider/Resources/Public/Js/jquery-min.js
					# String: File reference to flexslider library
					flexslider = EXT:flexslider/Resources/Public/Js/jquery.flexslider-min.js
					# Bool: Flag to define whether the script shoul be moved to the footer or not
					moveToFooter = 0
				}
			}
		}
	}


### TypoScript Setup

_This section isn't completed yet._

	plugin.tx_flexslider {
		settings {
			# String: Select your animation type, "fade" or "slide"
			animation = fade
			# String: Select the sliding direction, "horizontal" or "vertical"
			slideDirection = horizontal
			# Boolean: Animate slider automatically
			slideshow = 0
			# Integer: Set the speed of the slideshow cycling, in milliseconds
			slideshowSpeed = 7000
			# Integer: Set the speed of animations, in milliseconds
			animationDuration = 600
			# Boolean: Create navigation for previous/next navigation? (true/false)
			directionNav = 1
			# Boolean: Randomize slide order
			randomize = false
			# Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
			pauseOnHover = 0
		}
	}


## How to

### … use the Plugin in a Library

… to e.g. refer it to the page template:

	lib.example < plugin.tx_flexslider


## Roadmap and Tasks

Plase take a look at the Github Issue Tracker for this projekt.


## Contribute

If you have ideas, feature or bug requests, don't hesitate and report them at the Issue Tracker.

Feel also free to fork and pull.