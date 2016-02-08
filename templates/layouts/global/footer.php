<footer id="footer" class="dark">
  <div class="container">

    <!-- Footer Widgets ============================================= -->
    <div class="footer-widgets-wrap clearfix">
      <div class="col_two_third">

        <?php perch_content('Footer Section 1'); ?>
        <?php perch_content('Footer Section 2'); ?>
        <?php perch_content('Footer Section 3'); ?>

      </div>

      <div class="col_one_third col_last">

        <?php perch_content('Footer Subscription'); ?>
        <?php perch_content('Footer Twitter Feed'); ?>

      </div>
    </div><!-- .footer-widgets-wrap end -->

  </div>

  <!-- Copyrights ============================================= -->
  <div id="copyrights">
    <div class="container clearfix">
      <?php perch_content('Copyright'); ?>
      <div class="col_half col_last tright">

        <div class="fright clearfix">
          <?php perch_content('Footer Social Media'); ?>
        </div>

        <div class="clear"></div>
        <?php perch_content('Footer Contact Info'); ?>
      </div>
    </div>
  </div><!-- #copyrights end -->

</footer><!-- #footer end -->

</div>

<nav id="mobile-menu" class="hideDesktop">
  <?php perch_pages_navigation(array(
    'navgroup' => 'mobile-menu',
    'levels' => 4,
    'flat' => false
  )); ?>
</nav>

<!-- Go To Top ============================================= -->
<div id="gotoTop" class="fa fa-angle-up Fixed"></div>

<!-- Scripts ============================================= -->
<script type="text/javascript" src="/bvg-admin/addons/assets/js/jquery.js"></script>
<script type="text/javascript" src="/bvg-admin/addons/assets/js/jquery.mmenu.min.all.js"></script>
<script type="text/javascript" src="/bvg-admin/addons/assets/js/vendor-min.js"></script>
<?php
  if (perch_layout_has('calendar')) {
    echo '<script type="text/javascript" src="/bvg-admin/addons/assets/js/jquery.calendario.js"></script>';
    echo '<script type="text/javascript" src="/bvg-admin/addons/assets/js/events-data.js"></script>';
  }
  elseif (perch_layout_has('slider')) {
    echo '<script type="text/javascript" src="/bvg-admin/addons/assets/js/canvas.slider.fade.js"></script>';
  }
?>
<script type="text/javascript" src="/bvg-admin/addons/assets/js/main.js"></script>


</body>
</html>
