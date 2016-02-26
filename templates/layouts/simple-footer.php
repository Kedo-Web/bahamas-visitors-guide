<footer id="footer" class="dark">
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
<script type="text/javascript" src="/bvg-admin/addons/assets/js/main.js"></script>

<?php perch_content('Analytics'); ?>
</body>
</html>
