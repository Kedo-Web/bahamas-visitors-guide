<?php
  perch_layout('global/header', array(
    'body-class' => 'stretched sticky-responsive-menu',
    'css-events' => true,
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
        <a id="mobile-menu-logo" href="/">
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

<?php perch_content('Page Title'); ?>

<!-- Content ============================================= -->
<section id="content">
  <div class="content-wrap">
    <div class="container clearfix">

      <div id="posts" class="events small-thumbs postcontent nobottommargin clearfix">
  		<?php
        $ntext = perch_pages_navigation_text(true);
        switch ($ntext) {
          case 'Abaco':
            $category = 'abaco';
            break;
          case 'Acklins':
            $category = 'acklins';
            break;
          case 'Andros':
            $category = 'andros';
            break;
          case 'Berry Islands':
            $category = 'berry-islands';
            break;
          case 'Bimini':
            $category = 'bimini';
            break;
          case 'Cat Island':
            $category = 'cat-island';
            break;
          case 'Crooked Island':
            $category = 'crooked-island';
            break;
          case 'Eleuthera':
            $category = 'eleuthera';
            break;
          case 'Exuma':
            $category = 'exuma';
            break;
          case 'Grand Bahama':
            $category = 'grand-bahama';
            break;
          case 'Inagua':
            $category = 'inagua';
            break;
          case 'Long Island':
            $category = 'long-island';
            break;
          case 'Mayaguana':
            $category = 'mayaguana';
            break;
          case 'New Providence':
            $category = 'new-providence';
            break;
          case 'Rum Cay':
            $category = 'rum-cay';
            break;
          case 'San Salvador':
            $category = 'san-salvador';
            break;
          default:
            $category = 'all-islands';
            break;
        }
        perch_events_custom(array(
          'count'	   		=> 5,
          'sort'				=> 'eventDateTime',
          'sort-order' 	=> 'ASC',
          'filter'      => 'eventDateTime',
          'match'       => 'gt',
          'value'       => date('Y-m-d H:i:s'),
          'template' 		=> 'events/listing/events-listings.html',
          'category'    =>  $category,
        ));
  		?>
      </div>

      <!-- Sidebar ============================================= -->
      <div class="sidebar nobottommargin col_last clearfix">
        <div class="sidebar-widgets-wrap">
          <div class="widget widget_links clearfix">

            <h4>View By Island</h4>
            <nav class="left">
              <?php
              $navgroup = perch_page_attribute('navgroup', [], true);
              if($navgroup) {
                perch_pages_navigation(array(
                  'navgroup' => $navgroup,
                  'template' => 'sidebar_menu.html',
                ));
              }
              ?>
            </nav>

          </div>
        </div>
      </div>

    </div>
  </div>

</section><!-- #content end -->

<?php
  perch_layout('global/footer');
?>
