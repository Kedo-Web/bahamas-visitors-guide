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
        <div class="widget quick-contact-widget clearfix">

          <h4>Subscribe to Our Newsletter</h4>
          <div id="quick-contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Message Sent Successfully!"></div>
          <form id="quick-contact-form" name="quick-contact-form" action="fpp/index.php" method="post" class="quick-contact-form nobottommargin">
            <div class="form-process"></div>

            <div class="input-group divcenter">
              <span class="input-group-addon"><i class="icon-user"></i></span>
              <input type="text" class="required form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Name" />
            </div>

            <div class="input-group divcenter">
              <span class="input-group-addon"><i class="icon-email2"></i></span>
              <input type="text" class="required form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
            </div>

            <div class="input-group divcenter">
              <select>
                <option value="">Choose An Island</option>
                <option value="abaco">Abaco</option>
                <option value="acklins">Acklins</option>
                <option value="andros">Andros</option>
                <option value="berry-island">Berry Islands</option>
                <option value="bimini">Bimini</option>
                <option value="cat-island">Cat Island</option>
                <option value="crooked-island">Crooked Island</option>
                <option value="eleuthera">Eleuthera</option>
                <option value="exuma">Exuma</option>
                <option value="grand-bahama">Grand Bahama</option>
                <option value="inagua">Inagua</option>
                <option value="long-island">Long Island</option>
                <option value="mayaguana">Mayaguana</option>
                <option value="new-providence">New Providence</option>
                <option value="rum-cay">Rum Cay</option>
                <option value="san-salvador">San Salvador</option>
              </select>
            </div>

            <!-- <textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea> -->
            <input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
            <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-success nomargin" value="submit">Subscribe</button>
          </form>
        </div>

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
?>
<script type="text/javascript" src="/bvg-admin/addons/assets/js/main.js"></script>

<?php perch_content('Analytics'); ?>
</body>
</html>
