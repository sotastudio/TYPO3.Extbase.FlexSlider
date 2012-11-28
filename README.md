

# EXT: FlexSlider

It simply brings WooThemes awesome fully responsive jQuery Slider Plugin to TYPO3 – as a Frontend Plugin, of course.



## Installation


### Via Git

Clone into typo3conf/ext/

	git clone git@bitbucket.org:sotastudio/typo3.extbase.flexslider.git /path/to/project/typo3conf/ext/flexslider/

Install via Extension Manager as usual.

### Via TER

[Jump to TER](http://typo3.org/extensions/repository/view/flexslider)


## Configuration

* Include **static Extension Template**
* Create **Frontend plugin**
	* Adjust the **Plugin Settings** to your needs
	* Setup **Record Storage Page** where the Slider Items come from
* Create **Slider Items** on the Record Storage Page
* Check the Frontend!


### TypoScript Constants

	plugin.tx_flexslider {
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


### TypoScript Setup

	plugin.tx_flexslider {
		settings {
 				# Boolean: Define whether the image caption should be shown or not
	 		showCaption = 1
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
				# Boolean: Display control navigation
			controlNav = 1
				# Boolean: Create navigation for previous/next navigation? (true/false)
			directionNav = 1
				# Boolean: Allow slider navigating via keyboard left/right keys
			keyboardNav = 1
				# Boolean: Allow slider navigating via mousewheel
			mousewheel = 0
				# Boolean: Create pause/play dynamic element
			pausePlay = 0
				# Boolean: Randomize slide order
			randomize = 0
				# Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
			animationLoop = 1
				# Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
			pauseOnHover = 0
				# Image settings in px - experimental!
				# If you don't really NEED them, just keep the options empty!
				# Cropping works - just type something like width = 960c
			images {
				width =
				height =
				minWidth =
				minHeight =
				maxWidth =
				maxHeight =
			}
		}
	}


### Language Overrides

Use the following TS Setup Object Path to override localizations.

	plugin.tx_flexslider._LOCAL_LANG.en {
		languageLabel = value
	}


### Miscellaneous

Take a look at

* /Configuration/Typoscript/constants.txt
* /Configuration/Typoscript/setup.txt

to get further infos about settings and language labels.


## Fluid Templating

Hint at the beginning: If you want to use special objects/vars in Partials, you'll need to pass them through as an argument, e.g.

	<f:render partial="JavaScript" 
	          arguments="{settings: settings, data: data, configuration: configuration}"/>


### Storing the templates somewhere else

Really? That's easy - just adjust the following lines to fit your needs and put them into the TypoScript Constants.

	plugin.tx_flexslider {
		view {
			# Necessary options, if you plan to manipulate the templates
			templateRootPath = fileadmin/res/tpl/ext/flexslider/Templates/
			partialRootPath = fileadmin/res/tpl/ext/flexslider/Partials/
			layoutRootPath = fileadmin/res/tpl/ext/flexslider/Layouts/
		}
	}


### Accessing Frontend data

Using the object {data}, you can access everything regarding the Content Element (containing the FlexSlider Plugin):

<table>
    <tr>
        <th colspan="2">cObject Data Array</th>
    </tr>
    <tr>
    	<td>data.uid</td>
    	<td>The Uid</td>
    </tr>
    <tr>
    	<td>data.pid</td>
    	<td>Page ID containing this Content Element</td>
    </tr>
    <tr>
    	<td>data.sys_language_uid</td>
    	<td>ID of the records language
    </tr>
</table>

And, of course, many more. Just use the Debug Viewhelper to get a clue about other variables:

	<f:debug>{data}</f:debug>
	

### Accessing Extension Configuration

Using the object {configuration}, you can access all options from the Extension Configuration, defined through Extension Manager (stored in the localconf.php):

<table>
    <tr>
        <th colspan="2">Extension Configuration</th>
    </tr>
    <tr>
    	<td>extendSubtitleByRTE</td>
    	<td>Boolean - defines whether the subtitle is an RTE or not; if it is, it can contain HTML</td>
    </tr>
</table>



## How to

### … use the Plugin in a Library

… to e.g. refer it to the page template:

	lib.example < temp.flexslider
	lib.example.persistence.storagePid = 73
	lib.example.settings.randomize = 1

You just need to adjust the Records Storage Page ID (storagePid) - required!
Of course you can adjust the TypoScript Setup to fit your need via lib.example.settings.
Just dig into /Configuration/Typoscript/setup.txt to get a clue about the possibilities.


## Roadmap and Tasks

Plaese take a look at the Github Issue Tracker for this project.


## Contribute

If you have any ideas, features or bug requests, don't hesitate to report them in the Issue Tracker.

Feel free to fork and pull.