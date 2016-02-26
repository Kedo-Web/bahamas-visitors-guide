<?php
perch_layout('global/header', array(
  'body-class' => 'stretched sticky-responsive-menu',
));
?>

<!-- Header ============================================= -->
<header id="header" class="sticky-style-2 hideDesktop">
  <div id="header-wrap">
    <!-- Primary Navigation ============================================= -->
    <nav id="primary-menu" class="style-2">
      <div class="container clearfix">
        <a id="mmenu-btn" href="#mobile-menu" class="hideDesktop"><i class="fa fa-navicon"></i></a>
        <a id="mobile-menu-logo" href="/">
          <img src="/bvg-admin/extras/img/template/bvg-logo.png" alt="Bahamas Visitor's Guide Logo">
        </a>
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

<!-- Content
============================================= -->
<section id="content">
  <div class="content-wrap">
    <div class="container center clearfix">

      <div id="subscribe">
        <?php perch_content('Subscribe Form'); ?>
      </div>

      <a href="/" class="btn btn-default topmargin-sm">&lArr; Back to the Bahamas Visitor's Guide</a>

    </div>
  </div>
</section>

<?php
  perch_layout('simple-footer');
?>
