Summary of how to configure and use the Web Slideshow



# Web Slideshow
###### Current version: 0.0.9





### Getting Started
Please remember that this is NOT a fully functional slideshow.  This is the base style that uses on custom slides web sites.  In order to get things working you will first need to clone the current release from github to a local project folder and prepare the project per the SOP.  Once you have the folder and project set up and working, there are a few things that you will need to configure to get the site working:

* .htaccess - you will need to add the file to reflect the correct root path to your project files to allow for the automatic pre-pending of the site configuration file…you should also ensure that all error reporting is uncommented and working.

* __PRECOMP
	contains SASS Framework to build style

* _datastore
 	* slidedata - json file contains all assets - sets up some details to be used in slideshow
	  1- Images (JPG - PNG)
			"type":"image",
			"title":"this will be caption",
			"source":"path of image"
		2- Video (MP4-WEBM-OGV)
			"type":"video",
			"title":"this will be caption",
			"source":"background image path",
			"mp4": "file path",
			"webm": "file path",
			"ogv": "file path"
		3- Vimeo (film ID Required)
			"type":"vimeo",
			"title":"Vimeo Support",
			"source":"background image path",
			"id": "vimeo source id"
		4- SVG It runs with background color option if the svg in Transparent
			"type":"svg",
			"title":"SVGs In Use",
			"source":"svg path",
			"background-color": "#d42e8a"

* _content
		uses for upload all assets. 

		The web slideshow package contains 15 items which you can increase by SASS VARIABLES to be more that based on SASS Framework with many crazy functions

		/* ***********************************************************
		## VARIABLES
		*********************************************************** */
		$hmx-autoplay       :				false; // set autoplay
		$hmx-speed          :			  5; // set slideshow speed
		$hmx-max-slides     :				15; // max number of slider items
		$hmx-background     :		  	color('black'); // color of background screen
		$hmx-fade           :				150ms;  // transition speed
		$main-nav-color     :				color('white',0.9); // color of main nav
		$main-nav-active    :	      color($color-2,0.8);  // color of active nav
		$prev-next-color    :	      color('black',0.2); // color of prev/next button
		$prev-next-bg       :				color('black',0); // color of background for prev/next button
		$prev-next-bg-hover : 			color('black',0.1); // hover color state of background for prev/next button
		$hmx-responsive     :				true;  // set responsive of slidershow
		$hmx-breakpoint     :		    720px; // set breakpoint of slidershow
		$hmx-autohide-btn   :			  true; // option to autohide prev/next button
		$hmx-prev-icon      :		  	'../_ui/arrow_left_white.svg'; // set Prev Icon
		$hmx-next-icon      :				'../_ui/arrow_right_white.svg'; // set Next Icon

		This web slideshow could be with future fun work like autoplay by css, touch swipe using jQuery Libraries. very easy to style dots, Next/Prev controller
