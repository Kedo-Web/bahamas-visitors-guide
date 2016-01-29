<?php
  perch_layout('global/header', array(
    'body-class' => 'stretched sticky-responsive-menu',
  ));
?>

<!-- Header ============================================= -->
<header id="header" class="transparent-header full-header" data-sticky-class="not-dark">
	<div id="header-wrap" class="mm-slideout">
		<div class="container clearfix">
      <a id="mmenu-btn-home" href="#mobile-menu" class="hideDesktop"><i class="fa fa-navicon"></i></a>

			<!-- Logo ============================================= -->
			<?php perch_content('Site Logo'); ?>

			<!-- Primary Navigation ============================================= -->
			<nav id="primary-menu" class="dark">
        <?php perch_pages_navigation(array(
          'navgroup' =>'top-menu',
          'levels' => 1
        )); ?>

        <!-- Top Search ============================================= -->
				<div id="top-search">
					<a href="#" id="top-search-trigger">
            <i class="fa fa-search"></i>
            <i class="fa fa-times"></i>
          </a>
					<?php perch_search_form(array(
						'template'	=> 'my-search-form.html',
					)); ?>
				</div><!-- #top-search end -->
      </nav><!-- #primary-menu end -->

		</div>
	</div>
</header><!-- #header end -->

<?php perch_content('Home Page Slider'); ?>

<!-- Content ============================================= -->
<section id="content">
	<div class="content-wrap">

    <!-- Island Logo Menu ============================================= -->
		<?php perch_content('Visit An Island'); ?>

    <?php perch_content('Advertisement 1'); ?>

    <!-- Plan Your Trip ============================================= -->
    <?php perch_content('Plan Your Trip'); ?>

    <!-- Recent News & Updates ============================================= -->
		<?php
			perch_blog_custom(array(
        'count'      => 10,
        'template'   => 'post_on_home.html',
        'sort'       => 'postDateTime',
        'sort-order' => 'DESC',
      ));
		?>

    <?php perch_content('Advertisement 2'); ?>

    <!-- Upcoming Events ============================================= -->
		<?php
			perch_events_custom(array(
				'count'	   		=> 3,
				'sort'				=> 'eventDateTime',
				'sort-order' 	=> 'DESC',
				'template' 		=> 'events/listing/event-home.html'
			));
		?>

  </div><!-- .content-wrap Ends -->
</section>

<?php
  perch_layout('global/footer');
?>
