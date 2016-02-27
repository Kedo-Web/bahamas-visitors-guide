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

<?php perch_content('Hero'); ?>

<!-- Page Sub Menu ============================================= -->
<div id="page-menu" class="hideMobile">
  <div id="page-menu-wrap">
    <div class="container clearfix">

      <div class="menu-title">
        <?php perch_pages_breadcrumbs(); ?>
      </div>

      <span class="pre-submenu">Jump to : </span>

      <nav>
        <?php perch_pages_navigation(array(
          'navgroup' =>'submenu',
          'levels' => 2
        )); ?>
      </nav>

    </div>
  </div>
</div>

<!-- Content ============================================= -->
<section id="content">
  <div class="content-wrap">
    <div class="container clearfix">

      <!-- Post Content ============================================= -->
      <div class="postcontent nobottommargin clearfix">
        <div class="hideDesktop">
          <?php perch_pages_breadcrumbs(); ?>
        </div>
        <h2><?php perch_content('Page Title'); ?></h2>
        <?php perch_content('Content Area 1'); ?>
        <?php
          $collection = perch_page_attribute('collection', [], true);
          $category = perch_page_attribute('category', [], true);
          $subcategory = perch_page_attribute('subcategory', [], true);
          // print_r($collection);
          // print_r($category);
          // print_r($subcategory);

          if ($collection) {
            perch_collection('Listings', array(
              'template' => 'main/collection_listings.html',
              'sort-order' => 'RAND',
              'count' => 5,
              'paginate' => true,
              'filter' => 'islands.name',
              'match' => 'eq',
              'value' => 'Acklins',
              'category' => 'industry/'.$category,
            ));
          }
          else {
            perch_collection('Listings', array(
              'template' => 'main/collection_listings.html',
              'sort-order' => 'RAND',
              'count' => 5,
              'paginate' => true,
              'category' => 'industry/'.$category.'/'.$subcategory,
            ));
          }
        ?>
        <?php perch_content('Content Area 2'); ?>
        <?php perch_content('Content Area 3'); ?>
        <?php perch_content('Content Area 4'); ?>
        <?php perch_content('Content Area 5'); ?>
        <?php perch_content('Content Area 6'); ?>
      </div>

      <!-- Sidebar ============================================= -->
      <div class="sidebar nobottommargin col_last clearfix">
        <div class="sidebar-widgets-wrap">
          <div class="widget widget_links clearfix">
            <h4>Things to Know</h4>
            <nav>
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
            <?php perch_content('Sidebar Area 1'); ?>
            <?php perch_content('Sidebar Area 2'); ?>
            <?php perch_content('Sidebar Area 3'); ?>
            <?php perch_content('Sidebar Area 4'); ?>
            <?php perch_content('Sidebar Area 5'); ?>
            <?php perch_content('Sidebar Area 6'); ?>

          </div>
        </div>
      </div>

    </div>
  </div>

</section><!-- #content end -->

<?php
  perch_layout('global/footer');
?>
