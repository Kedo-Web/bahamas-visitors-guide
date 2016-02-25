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

<?php perch_content('Page Title'); ?>

<!-- Content ============================================= -->
<section id="content">
  <div class="content-wrap">
    <div class="container clearfix">

      <?php perch_content('Team'); ?>

    </div>
    <div class="section topmargin-sm footer-stick">

      <?php perch_content('Testimonials'); ?>

    </div>
  </div>

</section><!-- #content end -->

<?php
  perch_layout('global/footer');
?>
