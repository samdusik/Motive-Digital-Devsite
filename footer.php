<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
</div><!-- #wrap -->

<footer id="footer">
  <section id="footer-body">
    <div class="container">
      <div class="row justify-content-between align-items-start">
        <div class="col-12 col-lg-3">
          <a href="<?php echo home_url(); ?>" class="footer-logo">
            <h2>motive</h2>
            <img src="<?php bloginfo('template_directory'); ?>/images/logo.svg"/>
          </a>
        </div>
        <div class="col-12 col-lg-6">
          <div class="footer-right">
            <div class="footer-menu">
              <h5>Browse</h5>
              <?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'nav','container_class' => 'main-menu')); ?>
            </div>
            <div class="social-media">
              <h5>Follow</h5>

              <?php 
              $link = get_field('facebook', 'option');
              if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>

              <?php 
              $link = get_field('instagram', 'option');
              if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>

              <?php 
              $link = get_field('linkedin', 'option');
              if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
              
              <?php 
              $link = get_field('youtube', 'option');
              if( $link ): 
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
            </div>
            <div class="contacts">
              <h5>Get in touch</h5>
              <?php if ( get_field('email', 'option') ) : ?>
                <p><?php echo get_field('email', 'option'); ?></p>
              <?php endif; ?>
              <?php if ( get_field('phone', 'option') ) : ?>
                <p><?php echo get_field('phone', 'option'); ?></p>
              <?php endif; ?>
              <?php if ( get_field('address', 'option') ) : ?>
                <p><?php echo get_field('address', 'option'); ?></p>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="footer-terms">
    <div class='container'>
      <div class="row">
        <div class="col-md-6 col-12">
          <div class="left">
            <a href="/terms-and-conditions">Terms &#38; Conditions</a>
            <a href="/terms-and-conditions">Privacy policy</a>
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div class="right">
            <p>© <?php echo date("Y"); ?> Motive Digital &copy; all rights reserved</p>
            <a href="http://www.metadigital.co.nz" class="site-by">Web Design By: <strong>MetaDigital</strong></a>
          </div>

        </div>
      </div>
    </div>
  </section>
</footer>

<?php wp_footer(); ?>

  </body>
</html>