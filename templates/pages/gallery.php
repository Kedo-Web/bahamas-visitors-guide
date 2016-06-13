<?php
  perch_layout('global/header', array(
    'body-class' => 'stretched sticky-responsive-menu',
  ));
?>

<!-- Header ============================================= -->
<header id="header" class="sticky-style-2">
  <div class="container clearfix desktop">
    <!-- Logo ============================================= -->
    <?php perch_content('Site Logo'); ?>

    <?php perch_content('Banner Ad'); ?>
  </div>

  <div id="header-wrap">
    <!-- Primary Navigation ============================================= -->
    <nav id="primary-menu" class="style-2">
      <div class="container clearfix">
        <a id="mmenu-btn" href="#mobile-menu" class="hideDesktop"><i class="fa fa-navicon"></i></a>
        <a id="mobile-menu-logo" href="index.html">
          <img src="/bvg-admin/extras/img/template/bvg-logo.png" alt="Bahamas Visitor's Guide Logo">
        </a>
        <?php perch_pages_navigation(array(
          'navgroup' =>'top-menu',
          'levels' => 1
        )); ?>

        <!-- Top Search ============================================= -->
        <div id="top-search" class="no-home">
          <a href="#" id="top-search-trigger">
            <i class="fa fa-search"></i>
            <i class="fa fa-times"></i>
          </a>
          <?php perch_search_form(array(
						'template'	=> 'my-search-form.html',
					)); ?>
        </div><!-- #top-search end -->
      </div>
    </nav><!-- #primary-menu end -->
  </div>
</header><!-- #header end -->
<?php 
 // perch_gallery_album_details('Testing-1');
 // perch_gallery_albums();
 // $albumSlug = $album[0]['album'];
 // perch_gallery_album($albumSlug);;
 // print_r($album);
?>
<!--=======================================================-->
          <!-- Portfolio Filter
          ============================================= -->
        <section id="content">

          <div class="content-wrap">

            <div class="container clearfix">

              <!-- Portfolio Filter
              ============================================= -->
              <ul id="portfolio-filter" class="clearfix">

                <li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
                <li><a href="#" data-filter=".pf-icons">Icons</a></li>
                <li><a href="#" data-filter=".pf-illustrations">Illustrations</a></li>
                <li><a href="#" data-filter=".pf-uielements">UI Elements</a></li>
                <li><a href="#" data-filter=".pf-media">Media</a></li>
                <li><a href="#" data-filter=".pf-graphics">Graphics</a></li>

              </ul><!-- #portfolio-filter end -->

              <div class="clear"></div>

              <!-- Portfolio Items
              ============================================= -->
              <div id="portfolio" class="clearfix">
              <?php 
              $album = perch_page_attribute('ialbum', [], true);
              print_r($album);
              perch_gallery_album_images($album);

              // perch_gallery_albums();
              perch_gallery_album_images($album, array(
                'template' => 'island-album/island-gallery.html',
                ));

              ?>

              <!-- <div class="clear"></div> -->
              </div>
             </div>
           </div>
        </section>

          <!-- Portfolio Items
          ============================================= -->

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++ -->


<!-- Content ============================================= -->
<!-- #content end -->

<?php
  perch_layout('global/footer');
?>
