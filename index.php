<?php
  // set the fileName to be loaded
  $fileName             =       "index";
  // set the base path of the site
  $_basePath             =       "";
  // call in the main site config
  require_once("_config/config.php");
  // set up page specific title, description, and keywords here (over-rides values in main config)
  // comment out and remove these as needed if no page specific information is required
  $page_title           =       "Slideshow no libraries";
  $page_description     =       "";
  $page_keywords        =       "";


  // API TO LOAD MAP DATA TO FILES
  $data = $nav = $control = '';
  $file = file_get_contents("_datastore/slideshow/slidedata.json");
  $json = json_decode($file,true);
  $i = 1;
  foreach ($json['SLIDES']['items'] as $key => $value) {
    $type = $value['type']; // get the FIle type
    $title = $value['title']; // Caption of Slide
    $source = $value['source']; // Path to source
    $svg = $png = $video = $vimeo = '';
    $isVideo = $isVimeo = '';

    if ($type=='video') {
      $video .='<video width="100%" height="100%" poster="'.$source.'" controls="true" preload="auto" loop="" autoplay="" muted="">';
      $video .='<source src="'.$value['webm'].'" type="video/webm">';
      $video .='<source src="'.$value['mp4'].'" type="video/mp4">';
      $video .='<source src="'.$value['ogv'].'" type="video/ogg">';
      $video .='</video>';
      $isVideo = 'video';
    } elseif ($type=='svg') {
      $svg .='background-color:'.$value['background-color'].'; background-size:contain; ';
    } elseif ($type=='vimeo') {
      $vimeo .='<iframe src="https://player.vimeo.com/video/'.$value['id'].'?background=1&autoplay=1&loop=1&byline=0&title=0"
          frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
      $isVimeo = 'vimeo';
    } elseif ($type=='image') {
      if (isset($value['png'])) {
        $png .='background-color:'.$value['background-color'].'; background-size:contain; ';
      }
    }

    $data .= '<div class="animated fadeIn" style="background-image: url('.$source.'); '.$svg.' '.$png.'">';
    $data .= '<div class="' . $isVideo . $isVimeo. '">';
    if (!empty($isVideo)) :  $data .= $video; endif;
    if (!empty($isVimeo)) :  $data .= $vimeo; endif;
    $data .= '  <h1>'.$title.'</h1>';
    $data .= '</div>';
    $data .= '</div>';
    $nav .= '<label for="slide-'. $i .'"></label>';
    $control .= '<input type="radio" name="hmx-slides" id="slide-'. $i .'" />';
    $i++;
  }

  // check to see if there is a script file for this page that needs to be loaded in
  // all PHP logic should be done in external script and then variable results echoed/used on this page
  if(file_exists("_scripts/pages/".$fileName.".php")){
    require_once("_scripts/pages/".$fileName.".php");
  }

  // call in the page start include
  include("_includes/pagestart.php");
?>
</head>
<body id="<?=$fileName?>">

  <?php include("_includes/header.php"); ?>

  <!-- if fixed header, page content should appear here above header for SEO purposes else between header and footer -->
  <main>

    <div class="slide-container">

    	<div data-slide="hmx-slideshow" class="animated fadeIn">
        <?= $control; ?> <!-- slider controls -->
        <?=$content?> <!-- slider items -->
    		<div class="hmx-nav"> <?=$nav;?> </div> <!-- DOT Nav -->
    		<div class="hmx-prev-nav"> <?=$nav;?> </div> <!-- Prev Nav -->
    		<div class="hmx-next-nav"> <?=$nav;?> </div> <!-- Next Nav -->
    	</div>

    </div>


  </main>

  <?php include("_includes/footer.php"); ?>
</body>
<?php include("_includes/pageend.php"); ?>
