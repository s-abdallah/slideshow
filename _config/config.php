<?php
  /**************************************************
	SCRIPT: ##config.php

	Description:
	This script will set up basic site wide settings as
  well as perform the detection for being on a mobile
  device or not for the sake of content loading

	**************************************************/

  if(!isset($_SESSION)){session_start();}		// DO NOT MOVE OR REMOVE

  date_default_timezone_set('America/New_York');  		// DO NOT MOVE OR REMOVE


	// set the site defaults for certain things like titles and descriptions
	$config = array(
     "client"                =>      "Cient Name"
		,"site_title"            =>      "This Is The Site Title"
    ,"title_divider"         =>      " - "
		,"site_description"      =>      "This is the site description"
		,"site_keywords"         =>      "these,are,the,site,keywords"
    ,"logo_path"             =>      "_ui/logo.png"
    ,"url"                   =>      "http://yoursite.com"
    ,"zip"                   =>      "The zip code goes here: ex. 02210"
    ,"city"                  =>      "The city goes here: ex. New York"
    ,"state"                 =>      "The state goes here: ex. New York"
	);





  /********** DO NOT EDIT BELOW THIS LINE **********/


?>
