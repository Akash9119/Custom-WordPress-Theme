<?php wp_footer()
?>
<footer class="site-footer">
      <div class="site-footer__inner container container--narrow">
        <div class="group">
          <div class="site-footer__col-one">
            <h1 class="school-logo-text school-logo-text--alt-color">
              <a href=<?php echo site_url() ?>><strong>Fictional</strong> University</a>
            </h1>
            <p><a class="site-footer__link" href="#">555.555.5555</a></p>
          </div>

          <div class="site-footer__col-two-three-group">
            <div class="site-footer__col-two">
              <h3 class="headline headline--small">Explore</h3>
              <nav class="nav-list">
                <?php 
                wp_nav_menu(array(
                  'theme_location' => 'footerMenuOne'
                ))
                ?>
                <!-- <ul>
                  <li><a href=<?php echo site_url('/about-us') ?>>About Us</a></li>
                  <li><a href=<?php echo site_url('/programs') ?>>Programs</a></li>
                  <li><a href=<?php echo site_url('/events') ?>>Events</a></li>
                  <li><a href=<?php echo site_url('/campuses') ?>>Campuses</a></li>
                </ul> -->
              </nav>
            </div>

            <div class="site-footer__col-three">
              <h3 class="headline headline--small">Learn</h3>
              <nav class="nav-list">
                <?php
                 wp_nav_menu(array(
                  'theme_location' => 'footerMenuTwo'
                 ))
                ?>
                <!-- <ul>
                  <li><a href=<?php echo site_url('/legal') ?>>Legal</a></li>
                  <li><a href=<?php echo site_url('/privacy') ?>>Privacy</a></li>
                  <li><a href=<?php echo site_url('/careers') ?>>Careers</a></li>
                </ul> -->
              </nav>
            </div>
          </div>

          <div class="site-footer__col-four">
            <h3 class="headline headline--small">Connect With Us</h3>
          </div>
        </div>
      </div>
    </footer>


</body>
</html>