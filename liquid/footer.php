<div class="pagetop">
    <a href="#top" aria-label="top"><i class="icon icon-arrow-up2"></i></a>
</div>

<footer>
    <div class="container">
        <div class="row">
            <?php if(! dynamic_sidebar('liquid_footer')): ?>
            <!-- no widget -->
            <?php endif; ?>
        </div>
    </div>

    <div class="copy">
        <?php esc_html_e( '(C)', 'liquid' ); ?>
        <?php echo date('Y'); ?> <a href="<?php echo esc_url( home_url() ); ?>">
            <?php bloginfo('name'); ?></a>
        <?php esc_html_e( 'All rights reserved.', 'liquid' ); ?>
    </div>

</footer>

</div><!--/wrapper-->

<?php wp_footer(); ?>

<script>
jQuery(function ($) {
  var fadeIn = $('.fade-in');
  jQuery(window).on('scroll', function () {
    jQuery(fadeIn).each(function () {
      var offset = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > offset - windowHeight + 150) {
        jQuery(this).addClass("scroll-in");
      }
    });
  });
});
</script>

</body>
</html>