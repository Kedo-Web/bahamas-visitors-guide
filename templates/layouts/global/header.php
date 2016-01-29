<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/bvg-admin/runtime.php'); ?>
<!doctype html>
<html lang="en-us">
  <head>
    <meta charset="utf-8" />
  	<title><?php perch_pages_title(); ?></title>
  	<?php perch_page_attributes(); ?>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link href="/bvg-admin/addons/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="/bvg-admin/addons/assets/css/vendor.css" rel="stylesheet">
    <link href="/bvg-admin/addons/assets/css/main.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/ico" href="/bvg-admin/extras/img/template/favicon.jpg" />
  </head>
  <?php
  	if (perch_layout_has('body-class')) {
  		echo '<body class="'.perch_layout_var('body-class', true).'">';
  	}
    else{
  		echo '<body>';
  	}

    if (perch_layout_has('facebook-feed')) {
      echo '<div id="'.perch_layout_var('facebook-feed', true).'"></div>';
      echo '
        <script>
          (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, \'script\', \'facebook-jssdk\'));
        </script>
      ';
    }
  ?>
    <!-- Document Wrapper ============================================= -->
    <div id="wrapper" class="clearfix">
